@extends('layouts.static')

@section('content')

    <section class="bg-faded-primary d-flex min-vh-100 overflow-hidden py-5">
        <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">
            <div class="row align-items-center pt-5 mt-4 mt-xxl-0">
                <!-- Video + Parallax-->
                <div class="col-lg-6 mb-4 mb-lg-0 pb-3 pb-lg-0">
                    <div class="parallax mx-auto mx-lg-0" style="max-width: 582px;">
                        <div class="parallax-layer zindex-3" data-depth="0.1">
                            <div class="position-relative mx-auto"
                                style="max-width: 61%; padding: .3125rem; margin-bottom: 9.9%; background-color: #121519; border-radius: calc(var(--ar-border-radius) * 2.125);">
                                <div class="position-absolute start-50 translate-middle-x" style="top: 4.4%; width: 85%;">
                                    <div class="row row-cols-4 gx-2 mb-3">
                                        <div class="col">
                                            <div class="border-white border opacity-80"></div>
                                        </div>
                                        <div class="col">
                                            <div class="border-white border opacity-80"></div>
                                        </div>
                                        <div class="col">
                                            <div class="border-white border opacity-80"></div>
                                        </div>
                                        <div class="col position-relative">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 border-white border opacity-30">
                                            </div>
                                            <div
                                                class="position-absolute top-0 start-0 w-50 border-white border opacity-80">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center"><img class="rounded-circle"
                                            src="assets/img/landing/marketing-agency/hero/avatar.jpg" width="35"
                                            alt="Avatar">
                                        <div class="ignore-dark-mode fs-xs ps-2"><span
                                                class="text-nav fw-bold me-1">Lonoi@1</span><span class="text-muted">12
                                                min</span></div>
                                    </div>
                                </div>
                                <video class="d-block w-100" autoplay loop muted
                                    style="border-radius: calc(var(--ar-border-radius) * 1.875);">
                                    <source src="assets/img/landing/marketing-agency/hero/video.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="parallax-layer" data-depth="0.3"><img
                                src="assets/img/landing/marketing-agency/hero/shape01.svg" alt="Background shape">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="-0.1"><img
                                src="assets/img/landing/marketing-agency/hero/shape02.svg" alt="Background shape">
                        </div>
                        <div class="parallax-layer" data-depth="-0.15"><img
                                src="assets/img/landing/marketing-agency/hero/shape03.svg" alt="Background shape">
                        </div>
                        <div class="parallax-layer zindex-2" data-depth="-0.25"><img
                                src="assets/img/landing/marketing-agency/hero/shape04.svg" alt="Background shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-2 pb-3 mb-4"><span class='fw-normal'>Full servises</span> marketing agency
                    </h1>
                    <div class="row row-cols-3">
                        <div class="col"><i class="ai-bulb-alt d-block fs-1 text-dark mb-2 pb-1"></i>
                            <p class="mb-0">Individual approach to the brand</p>
                        </div>
                        <div class="col"><i class="ai-rocket d-block fs-2 text-dark mb-3"></i>
                            <p class="mb-0">We guarantee the result after a month</p>
                        </div>
                        <div class="col"><i class="ai-circle-check-filled d-block fs-3 text-dark mb-3"></i>
                            <p class="mb-0">Completing tasks exactly on time</p>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-lg-start pt-5 mt-lg-2"><a
                            class="btn btn-lg btn-primary w-100 w-sm-auto mb-2 mb-sm-0 me-sm-1" href="#">Get
                            in touch</a><a class="btn btn-lg btn-link" href="#">Our case studies<i
                                class="ai-arrow-right ms-2"></i></a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="container pb-sm-2 pb-md-3 pb-lg-5 mb-md-3 mb-lg-0">
            <!-- Parallax image-->
            <div class="position-relative mx-auto" style="max-width: 1198px;">
                <div class="position-relative zindex-3" data-aos="fade-left" data-aos-duration="600"
                    data-aos-offset="300"><img src="assets/img/landing/marketing-agency/about/01.png" alt="Image">
                </div>
                <div class="position-absolute top-0 start-0 zindex-2" data-aos="fade-right" data-aos-duration="600"
                    data-aos-offset="300"><img src="assets/img/landing/marketing-agency/about/02.png" alt="Image">
                </div>
                <div class="position-absolute top-0 start-0 zindex-4" data-aos="zoom-in" data-aos-duration="500"
                    data-aos-offset="300" data-aos-delay="900" data-aos-easing="ease-out-back">
                    <svg class="w-100 h-100 text-info" width="1198" height="693" viewBox="0 0 1198 693"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M579.362 65.02c1.689-.051 3.25-1.264 4.785-1.89l2.699-1.2 1.203-.587c-.051.026 1.446-.69.704-.613 3.147-.345 2.571-4.916-.589-4.303-.844.166-1.33.626-2.008 1.098-.909.638-1.907 1.2-2.879 1.711l-2.827 1.443c-.653.409-1.19 1.034-1.881 1.379-1.433.715-.729 3.013.793 2.962zm-27.74-8.747c1.56.357 3.428-.792 4.835-1.405.998-.434 1.945-.983 2.917-1.481.665-.332 1.484-.97 1.983-1.239 1.753-.907 1.036-4.163-1.062-3.907-1.126.14-1.471.587-2.239 1.302-.614.562-1.522 1.073-2.2 1.571l-4.452 3.397c-.678.421-.627 1.57.218 1.762zm22.666-6.037l.077.153c.217.472.908.868 1.433.817 1.356-.141 2.571-.919 3.812-1.481l3.505-1.711c2.546-.958 1.587-4.648-1.125-4.099-1.766.358-3.467 1.941-5.028 2.796-1.177.677-3.441 1.852-2.674 3.524zm29.078 9.805c1.65.69 3.761-.702 5.271-1.328 1.612-.664 3.224-1.073 4.541-2.273 1.766-1.622-1.01-4.38-2.622-2.618-.896.983-2.252 1.328-3.403 1.928l-4.056 2.273c-.882.536-.588 1.66.269 2.017zm7.491 14.504c2.533-1.073 4.555-3.103 6.909-4.469.87-.511.947-1.826.409-2.579-.627-.881-1.727-.907-2.584-.409-1.152.677-2.111 1.698-3.16 2.528-1.062.83-2.431 1.545-3.25 2.617-.857 1.136.269 2.911 1.676 2.311zm-8.731 22.483c2.265-2.464 4.683-4.801 6.909-7.278 2.188-2.439-1.829-5.516-3.544-2.732-.473.779-1.049 1.417-1.471 2.234-.499.945-1.088 1.813-1.715 2.682-.946 1.315-2.418 2.86-2.085 4.584.141.843 1.356 1.111 1.906.511zm-23.927 4.292c1.433-.307 2.814-1.673 3.723-2.771.985-1.187 2.226-2.171 2.904-3.588 1.164-2.439-2.917-4.15-3.877-1.622-.921 2.452-4.311 4.035-4.196 6.87.025.664.806 1.251 1.446 1.111zm-20.46 13.752c-.013.306.55-.588.691-.792.448-.651.832-1.341 1.215-2.018.819-1.468 1.856-2.758 2.726-4.188 1.292-2.094-2.252-4.073-3.263-1.902l-2.597 5.924c-.461 1.213-1.331 2.439-.384 3.64.55.702 1.574.063 1.612-.664zm-15.532-2.812c1.177-.306 2.06-2.209 2.636-3.167.46-.766.831-1.596 1.254-2.387.025-.039.806-1.711.192-.703.217-.357.665-.574.895-.995.665-1.213-.141-3.282-1.765-3.065-2.943.383-2.854 3.831-3.672 6.103-.192.524-1.485 4.725.46 4.214zm17.857-15.767c.243-.204.781-.332 1.1-.485.909-.447 1.728-1.047 2.521-1.647 1.407-1.047 2.981-2.158 4.107-3.499 1.458-1.737-.742-3.92-2.482-2.477-.806.664-1.472 1.507-2.188 2.26l-2.508 2.413c-.819.83-2.392 1.979-1.714 3.294.243.434.831.434 1.164.141zm-14.918-2.936c.602-1.149 1.024-2.273 1.408-3.524.32-1.047.921-1.915 1.228-2.937.448-1.456-1.292-2.771-2.584-1.979-1.433.881-1.484 2.503-1.459 4.022.038 1.392-.294 3.141.294 4.405.205.447.909.421 1.113.013zm57.587-50.408l5.194.306c2.034.051 4.081.741 5.718-.702.563-.498.563-1.545 0-2.056-1.714-1.52-4.35-.868-6.486-.6-1.535.191-3.646.026-5.028.83-1.061.638-.537 2.145.602 2.222zm26.732 4.633c-.409 1.29 1.408 1.839 2.329 2.017l6.946 1.468c2.431.702 3.39-3.345 1.011-3.677-2.072-.294-4.209-.358-6.294-.268-.934.038-2.584.472-3.454.153-.218-.077-.474.102-.538.306zm3.38 14.008c1.753.702 3.377 1.264 5.232 1.647 1.408.294 3.16.792 4.58.677 1.612-.128 2.597-2.03 1.356-3.281-1.356-1.366-3.377-.843-5.117-.932-1.829-.102-4.324-.613-6.064.064-.882.37-.882 1.481.013 1.826zm8.212 14.185c3.365 1.379 7.241.472 10.721 1.328 3.748.932 3.774-5.427 0-4.482-3.48.868-7.356-.051-10.721 1.328-.882.37-.895 1.456 0 1.826zm-50.489 29.84c-.716.038-1.023.319-1.561.766l-2.443 2.069c-1.305 1.187-2.239 2.464-3.288 3.856-1.203 1.583 1.074 3.435 2.584 2.579.755-.421.908-.894 1.267-1.622.409-.829 1.01-1.583 1.586-2.311.973-1.213 2.431-2.592 2.751-4.162.115-.562-.256-1.213-.896-1.175zm-17.324 10.214c-1.023.791-1.356 1.979-1.727 3.166-.575 1.839-.742 3.614-.857 5.542-.153 2.707 4.414 2.681 4.184 0-.154-1.839-.307-3.576-.167-5.414.077-.958.282-2.477-.575-3.18-.218-.178-.602-.306-.858-.114zm-22.837 9.935c-.448 1.341.422 3.052.716 4.379.307 1.354.64 2.746 1.369 3.933 1.894 3.103 6.282-.83 3.711-2.86-.857-.677-1.28-1.507-1.74-2.477l-.806-1.698c-.295-.575-.781-1.009-1.088-1.558-.512-.919-1.842-.651-2.162.281zM531.155 95.51c.806-1.009 1.561-1.954 2.098-3.141l1.689-4.175c1.177-2.911-3.864-4.443-4.811-1.328l-1.139 4.226c-.345 1.251-1.215 2.273-.793 3.626.371 1.162 2.073 1.89 2.956.792zm8.903-21.707c.78-.868 1.74-1.558 2.482-2.477.716-.881 1.369-2.081 2.239-2.809 2.303-1.941-1.165-5.516-3.34-3.333-.524.536-.831 1.111-1.202 1.749-.41.715-.96 1.354-1.357 2.069-.742 1.366-1.573 2.567-1.189 4.188.23.996 1.663 1.392 2.367.613zm42.435 8.175c1.791-.473 3.621-1.456 5.092-2.567 1.279-.97 3.083-1.941 3.991-3.294 1.331-1.979-1.906-3.869-3.211-1.877-.179.281-.831.562-1.113.779l-2.494 2.005c-1.241.945-3.02 1.532-3.787 2.962-.55 1.034.345 2.311 1.522 1.992zm-23.063-3.834c.32-.523.934-.83 1.369-1.251.499-.472.883-1.047 1.318-1.583.959-1.149 2.239-1.979 3.198-3.116 1.548-1.839-.78-4.15-2.622-2.618-1.421 1.175-2.598 2.924-3.493 4.52-.653 1.162-1.971 2.707-1.293 4.048.32.6 1.203.536 1.523 0zm62.284 2.389c1.138.217 2.2.064 3.313-.204 1.152-.268 2.342-.255 3.506-.46 2.239-.383 1.241-4.175-.947-3.422-.921.319-1.906.434-2.815.779-.895.332-1.804.983-2.75 1.098-1.139.153-1.664 1.954-.307 2.209zm36.932-17.275c.256 2.017 2.431 2.796 4.069 3.601l1.765.868c-.102-.051.704.434.512.281-.397-.294.767.728.908.805 1.318.702 3.019.102 3.429-1.392l.038-.141c.217-.779.026-1.826-.627-2.375-1.087-.919-2.264-1.124-3.62-1.341-1.689-.281-3.301-.868-4.887-1.507-.704-.281-1.676.447-1.587 1.2zm-125.755 53.139c-.09 1.673.601 3.626 1.164 5.184.614 1.698 1.766 3.486 3.813 3.077.998-.204 1.407-1.289 1.241-2.183-.141-.766-.614-1.047-1.062-1.596-.32-.396-.563-.932-.806-1.379l-.909-1.698c-.409-.754-.882-1.29-1.356-1.967-.64-.906-2.034-.574-2.085.562z">
                        </path>
                    </svg>
                </div>
                <div class="position-absolute top-0 start-0" data-aos="fade-up" data-aos-duration="600"
                    data-aos-offset="300" data-aos-delay="600" data-aos-easing="ease-out-back">
                    <svg class="w-100 h-100 text-warning" width="1198" height="693" viewBox="0 0 1198 693"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M828.762 131.524c-38.952 16.753-134.813 136.894-54.172 163.269 29.536 9.657 62.546 1.819 92.465 13.085 33.408 12.588 60.283 32.772 97.566 29.519 31.269-2.729 42.409-28.44 45.229-56.387 2.93-29.041 12.95-35.606 31.06-57.194 14.93-17.793 25.09-41.532 6.11-59.579-20.29-19.286-53.376-9.385-78.904-10.343-17.496-.656-35.976-2.91-50.929-11.198-8.325-4.62-17.067-11.049-26.502-13.973-19.456-5.976-44.603-4.649-61.923 2.801z">
                        </path>
                    </svg>
                </div>
            </div>
            <!-- Content-->
            <div class="row pt-5 mt-md-4">
                <div class="col-md-6 col-xxl-5 offset-xxl-1 mb-4 mb-md-0">
                    <div class="text-center text-md-start pe-md-4 pe-xl-5 pe-xxl-0">
                        <h2 class="h1 mb-sm-4">A team of specialists works for your business</h2>
                        <p class="fs-lg mb-2 mb-sm-3 mb-xl-4 mx-auto mx-md-0" style="max-width: 475px;">Sapien
                            ultrices egestas at faucibus on diam velit diam amet nibh in quam rutrum diam natoque
                            scelerisque viverra pharetra quis massa maecenas vulputate.</p><a
                            class="btn btn-lg btn-link px-0" href="#">More about us<i
                                class="ai-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mt-n3">
                    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-2 row-cols-lg-3 gy-md-2 gx-3">
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/klinos-gray.svg" width="120"
                                        alt="Klinos"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/klinos-light.svg" width="120"
                                        alt="Klinos">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/starcraft-gray.svg" width="147"
                                        alt="Starcraft"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/starcraft-light.svg" width="147"
                                        alt="Starcraft">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/airbnb-gray.svg" width="121"
                                        alt="Airbnb"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/airbnb-light.svg" width="121"
                                        alt="Airbnb">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/alpine-gray.svg" width="132"
                                        alt="Alpine"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/alpine-light.svg" width="132"
                                        alt="Alpine">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/foster-gray.svg" width="132"
                                        alt="Foster"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/foster-light.svg" width="132"
                                        alt="Foster">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/champion-gray.svg" width="130"
                                        alt="Champion"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/champion-light.svg" width="130"
                                        alt="Champion">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/starcraft-gray.svg" width="147"
                                        alt="Starcraft"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/starcraft-light.svg" width="147"
                                        alt="Starcraft">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/klinos-gray.svg" width="120"
                                        alt="Klinos"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/klinos-light.svg" width="120"
                                        alt="Klinos">
                                </div>
                            </div>
                        </div>
                        <div class="col d-none d-sm-block d-md-none d-lg-block">
                            <div class="ratio ratio-21x9 position-relative mx-auto" style="max-width: 180px;">
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 px-3">
                                    <img class="d-block d-dark-mode-none"
                                        src="assets/img/landing/saas-1/brands/alpine-gray.svg" width="132"
                                        alt="Alpine"><img class="d-none d-dark-mode-block"
                                        src="assets/img/landing/saas-1/brands/alpine-light.svg" width="132"
                                        alt="Alpine">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
