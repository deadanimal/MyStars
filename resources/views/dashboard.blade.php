@extends('layout-auth')

@section('content')
    <!-- Page content-->
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <h1 class="h2 mb-4">Overview</h1>

        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
            <div class="card-body">
                

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
            </div>
        </section>
        

    </div>
@endsection
