{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
  <div class="container">
    <div class="row justify-content-center">
      <div>
        <h2>ShaQ Express Careers</h2>
        <a href="/create-career">Create Career</a>

        @forelse ($careers as $career)
          <div>
            {{ $career->job_position }} |
            {{ $career->job_description }} |
            {{ $career->status }} |
            <a href="{{route('edit-career', $career)}}">Edit</a>
          </div>
        @empty
          <p>No careers. Create a vacancy.</p>
        @endforelse
      </div>
    </div>
  </div>
{{-- @endsection --}}
