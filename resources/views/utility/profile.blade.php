@extends('layouts.app')

@section('content')

    <form action="/profile/pfp" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label w-100">Profile Picture</label>
            <input type="file" name="profile_picture">
            <small class="form-text d-block text-muted">- - - -</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    
@endsection
