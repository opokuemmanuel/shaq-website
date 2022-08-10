<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CareerController extends Controller
{
  public function index()
  {
    // $careers = Career::where('status', 'Show')->get();
    // return view('careers', ['careers' => $careers]);
    return view('careers');
  }

  public function allPositions()
  {
    $careers = Career::all();
    return view('careers.all-positions', ['careers' => $careers]);
  }

  public function create()
  {
    return view('careers.create-career');
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      "job_position" => "required|min:3|max:255|unique:careers",
      "job_description" => "required|min:3",
      "status" => "in:Show,Hide",
    ]);

    $data['slug'] = Str::slug($data['job_position']);

    Career::create($data);
    return redirect('vacant-positions');
  }

  public function edit(Career $career)
  {
    return view('careers.edit-career', ['career' => $career]);
  }

  public function update(Request $request, Career $career)
  {
    $request['slug'] = Str::slug($request['job_position']);

    $career->update($request->validate([
      "job_position" => "min:3|max:255",
      "job_description" => "required|min:3",
      "status" => "in:Show,Hide",
    ]));

    return redirect('vacant-positions');
  }

  public function apply(Request $request)
  {
    $careers = Career::where('status', 'Show')->get();
    if (!$careers->contains($request['job_position'])) {
      return back()->withErrors(['job_position' => 'No vacancy for this position'])->withInput();
    }

    $data = $request->validate([
      "first_name" => "required|min:3|max:255",
      "last_name" => "required|min:3|max:255",
      "email" => "required|email|unique:job_applications",
      "phone" => "required|digits:10|unique:job_applications",
      "job_position" => "required|exists:careers,job_position",
      "personal_statement" => "required|min:3",
      "cv_file" => "required|mimes:pdf|max:1000",
    ]);

    dd($data);

    // JobApplication::create($data);

    return back()->with(['success' => 'Your details have been successfully submitted!']);
  }
}
