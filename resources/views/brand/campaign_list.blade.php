@extends('layout-auth')

@section('content')
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <h1 class="h2 mb-4">Profile</h1>
        <!-- Basic info-->
        <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i
                        class="ai-user text-primary lead pe-1 me-2"></i>
                    <h2 class="h4 mb-0">Basic info</h2>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown"><a
                            class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0"
                            href="#" data-bs-toggle="dropdown" aria-expanded="false"
                            style="width: 80px; height: 80px; background-image: url(assets/img/avatar/02.jpg);"><span
                                class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)"><i
                                    class="ai-camera"></i></span></a>
                        <div class="dropdown-menu my-1"><a class="dropdown-item fw-normal" href="#"><i
                                    class="ai-camera fs-base opacity-70 me-2"></i>Upload new photo</a><a
                                class="dropdown-item text-danger fw-normal" href="#"><i
                                    class="ai-trash fs-base me-2"></i>Delete photo</a></div>
                    </div>
                    <div class="ps-3">
                        <h3 class="h6 mb-1">Profile picture</h3>
                        <p class="fs-sm text-muted mb-0">PNG or JPG no bigger than 1000px wide and tall.</p>
                    </div>
                </div>
                <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
             
                    <div class="col-12">
                        <label class="form-label" for="bio">Bio</label>
                        <textarea class="form-control" rows="5" placeholder="Add a bio" id="bio"></textarea>
                    </div>
        
                    <div class="col-12 d-flex justify-content-end pt-3">
                        <button class="btn btn-secondary" type="button">Cancel</button>
                        <button class="btn btn-primary ms-3" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </section>
    @endsection
