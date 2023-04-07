@extends('layouts.app')

@section('content')
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <h1 class="h2 mb-4">Profile</h1>




        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
            <div class="card-body">
                <form action="/profile" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i
                            class="ai-user text-primary lead pe-1 me-2"></i>
                        <h2 class="h4 mb-0">Personal Information</h2>
                    </div>
                    <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                        <div class="col-sm-6">
                            <label class="form-label" for="fn">Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $user->name }}"
                                id="fn">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="email">Email address</label>
                            <input class="form-control" type="email" name="email" value="{{ $user->email }}"
                                id="email" disabled>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="bio">Bio</label>
                            <textarea class="form-control" rows="5" placeholder="Add a bio" name="bio" id="bio">{{ $user->bio }}</textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-end pt-3">
                            <button class="btn btn-secondary" type="button">Cancel</button>
                            <button class="btn btn-primary ms-3" type="submit">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
            <div class="card-body">
                <form action="/profile/pfp" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3"><i
                            class="ai-camera text-primary lead pe-1 me-2"></i>
                        <h2 class="h4 mb-0">Profile Picture</h2>
                    </div>
                    <div class="row align-items-center g-3 g-sm-4 py-3">

                        <div class="mb-2 mb-md-3 row align-items-center">
                            <label class="col-md-2 col-form-label" for="file-input">Picture</label>
                            <div class="col-md-10">
                                <input class="form-control" name="profile_picture" type="file" id="file-input">
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-end pt-3">
                        <button class="btn btn-primary ms-3" type="submit">Update Profile Picture</button>
                    </div>
                </form>
            </div>
        </section>


        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
            <div class="card-body">
                <form action="/profile/password" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3"><i
                            class="ai-lock-closed text-primary lead pe-1 me-2"></i>
                        <h2 class="h4 mb-0">Password change</h2>
                    </div>
                    <div class="row align-items-center g-3 g-sm-4 pb-3">

                        <div class="col-sm-6">
                            <label class="form-label" for="new-pass">New password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" name="password" id="new-pass">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="confirm-pass">Confirm new password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" name="password_confirmation" id="confirm-pass">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="alert alert-info d-flex my-3 my-sm-4"><i class="ai-circle-info fs-xl me-2"></i>
                        <p class="mb-0">Password must be minimum 8 characters long - the more, the better.</p>
                    </div>
                    <div class="d-flex justify-content-end pt-3">
                        <button class="btn btn-primary ms-3" type="submit">Change Password</button>
                    </div>
                </form>
            </div>
        </section>



    </div>
@endsection
