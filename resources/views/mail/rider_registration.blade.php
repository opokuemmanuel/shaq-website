@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
<h1>New Rider Registration</h1>
<p><b>Name</b> : {{$riderData->first_name}} {{$riderData->last_name}}</p> <br>
<p><b>Email</b> : {{$riderData->email}}</p> <br>
<p><b>Phone</b> : {{$riderData->phone}}</p> <br>
<p><b>Company</b> : {{$riderData->business_name ?? 'N/A'}}</p> <br>
<p><b>City</b> : {{$riderData->city}}</p> <br>
<p><b>Location</b> : {{$riderData->location}}</p> <br>
<p><b>Vehicle Number</b> : {{$riderData->vehicle_number}}</p> <br>



{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} ShaQ Express @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
