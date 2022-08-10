{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
  <div class="container">
    <div class="row justify-content-center">
      <div class="">
        <form action="{{ route('career.store') }}" method="POST">
          @csrf
          <div>
            <div>
              <input type="text" name="job_position" id="job_position" placeholder="Position" value="{{ old('job_position') }}">

              @error('job_position')
                <span class="text-danger" role="alert">
                  <small><strong>{{ $message }}</strong></small>
                </span>
              @enderror
            </div>

            <div>
              <textarea name="job_description" id="job_description" placeholder="Job Description" cols="30" rows="10">{{ old('job_description') }}</textarea>

              @error('job_description')
                <span class="text-danger" role="alert">
                  <small><strong>{{ $message }}</strong></small>
                </span>
              @enderror
            </div>
            <div>
              <select name="status" id="status">
                @if (old('status') !== null)
                  <option value="{{old('status')}}">{{old('status')}}</option>
                  @if (old('status') == 'Show')
                    <option value="Hide">Hide</option>
                  @else
                    <option value="Show">Show</option>
                  @endif
                @else
                  <option value="Show">Show</option>
                  <option value="Hide">Hide</option>
                @endif
              </select>

              @error('status')
                <span class="text-danger" role="alert">
                  <small><strong>{{ $message }}</strong></small>
                </span>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-secondary px-5">Create</button>
        </form>
      </div>
    </div>
  </div>
{{-- @endsection --}}
