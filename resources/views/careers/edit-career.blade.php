{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
  <div class="row justify-content-center">
    <div class="">
      <form action="{{ route('update-career', $career) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
          <h2>Edit Career</h2>
          <div>
            <input type="text" name="job_position" id="job_position" placeholder="Position" value="{{ old('job_position', $career->job_position) }}">

            @error('job_position')
              <span class="text-danger" role="alert">
                <small><strong>{{ $message }}</strong></small>
              </span>
            @enderror
          </div>

          <div>
            <textarea name="job_description" id="job_description" placeholder="Job Description" cols="30" rows="10">{{ old('job_description', $career->job_description) }}</textarea>

            @error('job_description')
              <span class="text-danger" role="alert">
                <small><strong>{{ $message }}</strong></small>
              </span>
            @enderror
          </div>
          <div>
            <select name="status" id="status">
              <option value="{{$career->status}}">{{$career->status}}</option>
              @if ($career->status == 'Show')
                <option value="Hide">Hide</option>
              @else
                <option value="Show">Show</option>
              @endif
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-secondary px-5">Update</button>
      </form>
    </div>
  </div>
</div>
{{-- @endsection --}}
