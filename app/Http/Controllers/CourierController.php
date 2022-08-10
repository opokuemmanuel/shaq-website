<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Mail\{
    RequestCourierMail,
    newCourierRegistration
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CourierController extends Controller
{
    public function requestCourier(Request $request)
    {
        //    $pickupLocation = $request->pickup_location;
        //    $pickupLat= $request->pickup_lat;
        //    $pickupLng= $request->pickup_lng;
        //    $pickupPhone = $request->pickup_phone;
        //    $dropoffLocation = $request->dropoff_location;
        //    $dropoffLat= $request->dropoff_lat;
        //    $dropoffLng= $request->dropoff_lng;
        //    $dropoffPhone = $request->dropoff_phone;
        //    $deliveryDate = $request->delivery_date;
        //    $packageType = $request->package_type;
        //    $pickupNote = $request->pickup_note;

        Mail::to('backoffice@shaqexpress.com')
            ->cc('info@shaqexpress.com')
            ->bcc('info@shaqexpress.com')
            ->send(new RequestCourierMail($request));
    }
    public function newCourierRegistration(Request $request)
    {
        try {
            //$request->validate(['email'=>'required|email']);
        Mail::to('backoffice@shaqexpress.com')
            ->cc('info@shaqexpress.com')
            ->bcc($request->email)
            ->send(new newCourierRegistration($request));
            return response()->json(['response' => 1]);
        } catch (\Throwable $th) {
            return response()->json(['response' => 0]);

        }
    }
    public static function SendSMS($message, $phone)
    {

        $curl = curl_init();
        $jsonData = json_encode(array(
            "apiKey" => "cSMSf0966ea9a086f917-662953e5dcd35451",
            "phone" => [$phone],
            "sender" => "ShaQExpress",
            "message" => $message

        ));
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiv2.mycsms.com',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_SSL_VERIFYHOST=> false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function verifyPhone(Request $request)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $code = rand(2376, 9999);
        $_SESSION['verify_code'] = $code;
        $_SESSION['phone'] = $request->phone;
        $message = 'Hi! Your verification code is ' . $code;
        return $this->SendSMS($message, $request->phone);
    }
    public function verifyCode(Request $request)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if ($request->code == $_SESSION['verify_code']) {
            $_SESSION['phone_verify'] = $_SESSION['phone'];
            return response()->json(['response' => 1]);
        } else {
            return response()->json(['response' => 0]);
        }
    }



    public  function SendCourierRequest(Request $request)
    {
        $data = $request->pickup_lat;

        if($data > 8){
            $region = 'Northern Region';
        }else{
            $region = 'Greater Accra';
        }
               
        try {
            $tripCode = "SCWT-" . rand(100769, 999999);
            $costData = $this->pricing($request);
            $costData = json_decode($costData->getContent());
            if ($costData->msg == 'success') {
                $cost = $costData->cost;
            } else {
                return response()->json(['response' => 4]);
            }
            if ($cost == 0) {
                return response()->json(['response' => 5]);
            }
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $phone = $_SESSION['phone_verify'] ?? '';
            $curl = curl_init();
            $jsonData = json_encode(array(
                "region" => $region,
                "pickup_location" => $request->pickup_location,
                "pickup_lat" => $request->pickup_lat,
                "pickup_lng" => $request->pickup_lng,
                "pickup_phone_number" => $request->pickup_phone_number,
                "start_date" => date('Y-m-d', strtotime($request->delivery_date)),
                "start_time" => date('H:i:s', strtotime($request->delivery_date)),
                "package_type" => $request->package_type,
                "delivery_note" => $request->pickup_note . '(Site request by ' . $phone . ')',
                "package_type" => $request->package_type,
                "is_return_trip" => $request->package_type == 1 ? 1 : 0,
                "trip_scheduled" => 1,
                "amount" => $cost,
                "vehicle_type_id" => $request->vehicle_type_id,
                "trip_code" => $tripCode,
                "dropOffData" => [
                    [
                        "dropoff_location" => $request->dropoff_location,
                        "dropoff_lat" => $request->dropoff_lat,
                        "dropoff_lng" => $request->dropoff_lng,
                        "dropoff_phone_number" => $request->dropoff_phone_number,
                        "dropoff_fare" => $cost,
                        "dropoff_code" => "SCWD-" . rand(10076, 99999)
                    ]
                ],
                "user_id" => 2846,  //website user id
            ));
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://services.shaqexpress.com/api/create-trip',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $jsonData,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                ),
            ));

            $response = curl_exec($curl);
            $res = json_decode($response);
            curl_close($curl);
            if ($res->error == false) {
                $message = "Hello, Your request (with code $tripCode) has been received. A dispatch rider will contact you shortly. Thank you for using ShaQ Express";
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $msg = $this->SendSMS($message, $_SESSION['phone']);
                return response()->json(['response' => 1]);
            } else {
                return response()->json(['response' => 2]);
            }
        } catch (\Throwable $th) {
            //dd($th);
            return response()->json(['response' => 0]);
        }
    }

    public function shaQDeliveryCalc($dist, $unitPrice, $minutes, $minutePrice)
    {
        return ($dist * $unitPrice) + ($minutes * $minutePrice);
    }
    public function pricing(Request $request)
    {
        try {
             $region_data = $request->pickup_lat;

             if($region_data > 8){
                 $data_region = 'Northern Region';
             }else{
                 $data_region = 'Greater Accra';
             }

            $curl = curl_init();
            $jsonData = json_encode(array(
                "region" => $data_region,
                "vehicle_type_id" => $request->vehicle_type_id,
                "pickup_lat" => $request->pickup_lat,
                "pickup_lng" => $request->pickup_lng,
                "dropoff_lat" => $request->dropoff_lat,
                "dropoff_lng" => $request->dropoff_lng
            ));
            curl_setopt_array($curl, array(
              //CURLOPT_URL => "https://maps.googleapis.com/maps/api/directions/json?origin=$latitudeFrom,$longitudeFrom&destination=$latitudeTo,$longitudeTo&key=AIzaSyCcNLZGoUqLsA4jeKVudD6DNSLg0odLg1A",
               CURLOPT_URL => "https://services.shaqexpress.com/api/delivery-pricing?region=GreaterAccra&vehicle_type_id=$request->vehicle_type_id&pickup_lat=$request->pickup_lat&pickup_lng=$request->pickup_lng&dropoff_lat=$request->dropoff_lat&dropoff_lng=$request->dropoff_lng",
              // CURLOPT_URL => 'https://services.shaqexpress.com/api/delivery-pricing?region=NorthernRegion&vehicle_type_id=1&pickup_lat=9.419267699999999&pickup_lng=-0.8676946&dropoff_lat=9.3955194&dropoff_lng=-0.8139269000000001',
             // CURLOPT_URL => 'https://services.shaqexpress.com/api/delivery-pricing',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $jsonData,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                ),
              
            ));
            $response = curl_exec($curl);
            $response = json_decode($response);
          // dd($response);
             $cost = $response->data->price;

           //  dd($cost);
            //foreach ($response->data as $key => $value) {
                // if ($value->vehicle_type_id == 1) {
                   // $unitPrice = $response->data->unit_price;
                    //$minutePrice = $response->data->minute_price;
                    // $basePrice = $response->data->base_price;
                //}
            //}
            // $distanceTime = $this->getDistanceTime($request->pickup_lat, $request->pickup_lng, $request->dropoff_lat, $request->dropoff_lng);

            // $dist = $distanceTime['distance']->value / 1000; // get in kilometers
           // $minutes = $distanceTime['duration']->value / 60; //multiply by 60 minutes
            
            // $cost = $this->ShaQDeliveryCalc($dist, $unitPrice, $minutes, $minutePrice);
           // $cost = $this->ShaQDeliveryCalc($dist, $unitPrice, $minutes, $minutePrice);
           // if ($cost < $basePrice) {
             //   $cost = $basePrice;
           // }
            return response()->json(['msg' => 'success', 'cost' => round($cost)]);
        } catch (\Throwable $th) {
            dd($th);
            return response()->json(['msg' => 'failed', 'cost' => 0]);
        }
    }


    public static function getDistanceTime($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://maps.googleapis.com/maps/api/directions/json?origin=$latitudeFrom,$longitudeFrom&destination=$latitudeTo,$longitudeTo&key=AIzaSyCcNLZGoUqLsA4jeKVudD6DNSLg0odLg1A",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            //echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            return [
                'distance' => isset($response->routes[0]->legs[0]) ? $response->routes[0]->legs[0]->distance : 0,
                'duration' => isset($response->routes[0]->legs[0]) ? $response->routes[0]->legs[0]->duration : 0
            ];
        }
    }
}