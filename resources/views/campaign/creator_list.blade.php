@extends('layouts.app')

@section('content')
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <div class="d-flex align-items-center mb-4">
            <h1 class="h2 mb-0">Available Campaign</h1>
            <a class="btn btn-sm btn-outline-primary ms-auto" href="/campaigns?task=refresh"><i class="ai-refresh ms-n1 me-2"></i>New Campaigns?</a>
        </div>
        <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
            <div class="card-body pb-4">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button"><i class="ai-trash fs-xl text-danger"></i></button>
                            <div class="swiper swiper-nav-onhover"
                                data-swiper-options="{&quot;loop&quot;: true, &quot;navigation&quot;: {&quot;prevEl&quot;: &quot;.btn-prev&quot;, &quot;nextEl&quot;: &quot;.btn-next&quot;}}">
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4"><img class="d-block mx-auto"
                                            src="assets/img/shop/products/02.png" width="226" alt="Product"></div>
                                </a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button"><i class="ai-chevron-left fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i></button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button"><i class="ai-chevron-right fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i></button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0"><a href="shop-single.html">Dispenser for soap</a></h3>
                        </div>
                        <div class="d-flex align-items-center"><span class="me-2">$16.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip"
                                data-bs-template="&lt;div class=&quot;tooltip fs-xs&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;tooltip-inner bg-light text-muted p-0&quot;&gt;&lt;/div&gt;&lt;/div&gt;"
                                data-bs-placement="left" title="Add to cart"><a class="nav-link fs-lg py-2 px-1"
                                    href="#"><i class="ai-cart"></i></a></div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4"><span
                                class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button"><i class="ai-trash fs-xl text-danger"></i></button>
                            <div class="swiper swiper-nav-onhover"
                                data-swiper-options="{&quot;loop&quot;: true, &quot;navigation&quot;: {&quot;prevEl&quot;: &quot;.btn-prev&quot;, &quot;nextEl&quot;: &quot;.btn-next&quot;}}">
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4"><img class="d-block mx-auto"
                                            src="assets/img/shop/products/01.png" width="226" alt="Product"></div>
                                </a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button"><i class="ai-chevron-left fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i></button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button"><i class="ai-chevron-right fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i></button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0"><a href="shop-single.html">Loft style lamp</a></h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Dark gray" checked
                                        id="color1-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-1"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #576071;"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Light gray"
                                        id="color1-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-2"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #d5d4d3;"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Blue" id="color1-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-3"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center"><span class="me-2">$21.00</span>
                            <del class="fs-sm text-muted">$35.00</del>
                            <div class="nav ms-auto" data-bs-toggle="tooltip"
                                data-bs-template="&lt;div class=&quot;tooltip fs-xs&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;tooltip-inner bg-light text-muted p-0&quot;&gt;&lt;/div&gt;&lt;/div&gt;"
                                data-bs-placement="left" title="Add to cart"><a class="nav-link fs-lg py-2 px-1"
                                    href="#"><i class="ai-cart"></i></a></div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button"><i class="ai-trash fs-xl text-danger"></i></button>
                            <div class="swiper swiper-nav-onhover"
                                data-swiper-options="{&quot;loop&quot;: true, &quot;navigation&quot;: {&quot;prevEl&quot;: &quot;.btn-prev&quot;, &quot;nextEl&quot;: &quot;.btn-next&quot;}}">
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4"><img class="d-block mx-auto"
                                            src="assets/img/shop/products/03.png" width="226" alt="Product"></div>
                                </a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button"><i class="ai-chevron-left fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i></button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button"><i class="ai-chevron-right fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i></button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0"><a href="shop-single.html">Glossy round vase</a></h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Light gray" checked
                                        id="color2-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color2-1"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #d5d4d3;"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Dark gray"
                                        id="color2-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color2-2"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #576071;"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Blue"
                                        id="color2-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color2-3"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center"><span class="me-2">$15.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip"
                                data-bs-template="&lt;div class=&quot;tooltip fs-xs&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;tooltip-inner bg-light text-muted p-0&quot;&gt;&lt;/div&gt;&lt;/div&gt;"
                                data-bs-placement="left" title="Add to cart"><a class="nav-link fs-lg py-2 px-1"
                                    href="#"><i class="ai-cart"></i></a></div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4"><span
                                class="badge bg-gray text-nav position-absolute top-0 start-0 mt-3 ms-3">Out of
                                stock</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button"><i class="ai-trash fs-xl text-danger"></i></button>
                            <div class="swiper swiper-nav-onhover"
                                data-swiper-options="{&quot;loop&quot;: true, &quot;navigation&quot;: {&quot;prevEl&quot;: &quot;.btn-prev&quot;, &quot;nextEl&quot;: &quot;.btn-next&quot;}}">
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4"><img class="d-block mx-auto"
                                            src="assets/img/shop/products/06.png" width="226" alt="Product"></div>
                                </a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button"><i class="ai-chevron-left fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i></button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button"><i class="ai-chevron-right fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i></button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0"><a href="shop-single.html">Living room table</a></h3>
                        </div>
                        <div class="d-flex align-items-center pt-1"><span class="me-2">$46.00</span></div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button"><i class="ai-trash fs-xl text-danger"></i></button>
                            <div class="swiper swiper-nav-onhover"
                                data-swiper-options="{&quot;loop&quot;: true, &quot;navigation&quot;: {&quot;prevEl&quot;: &quot;.btn-prev&quot;, &quot;nextEl&quot;: &quot;.btn-next&quot;}}">
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4"><img class="d-block mx-auto"
                                            src="assets/img/shop/products/04.png" width="226" alt="Product"></div>
                                </a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button"><i class="ai-chevron-left fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i></button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button"><i class="ai-chevron-right fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i></button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0"><a href="shop-single.html">Ceramic flower pot</a></h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color3" value="Gray concrete" checked
                                        id="color3-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color3-1"><span
                                            class="d-block bg-size-cover bg-position-center rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #c0c0c0; background-image: url(assets/img/shop/pattern/marble.jpg);"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color3" value="Beige"
                                        id="color3-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color3-2"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #d9c9a1;"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color3" value="Blue"
                                        id="color3-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color3-3"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center"><span class="me-2">$19.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip"
                                data-bs-template="&lt;div class=&quot;tooltip fs-xs&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;tooltip-inner bg-light text-muted p-0&quot;&gt;&lt;/div&gt;&lt;/div&gt;"
                                data-bs-placement="left" title="Add to cart"><a class="nav-link fs-lg py-2 px-1"
                                    href="#"><i class="ai-cart"></i></a></div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4"><span
                                class="badge bg-faded-primary text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button"><i class="ai-trash fs-xl text-danger"></i></button>
                            <div class="swiper swiper-nav-onhover"
                                data-swiper-options="{&quot;loop&quot;: true, &quot;navigation&quot;: {&quot;prevEl&quot;: &quot;.btn-prev&quot;, &quot;nextEl&quot;: &quot;.btn-next&quot;}}">
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4"><img class="d-block mx-auto"
                                            src="assets/img/shop/products/05.png" width="226" alt="Product"></div>
                                </a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button"><i class="ai-chevron-left fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i></button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button"><i class="ai-chevron-right fs-xl d-dark-mode-none"></i><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i></button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0"><a href="shop-single.html">Pendant lamp</a></h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color4" value="Gray" checked
                                        id="color4-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color4-1"><span class="d-block rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #bab8b7;"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color4" value="Woody brown"
                                        id="color4-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color4-2"><span
                                            class="d-block bg-size-cover bg-position-center rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #c0c0c0; background-image: url(assets/img/shop/pattern/wood.jpg);"></span></label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color4" value="Gray marble"
                                        id="color4-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color4-3"><span
                                            class="d-block bg-size-cover bg-position-center rounded-circle"
                                            style="width: .625rem; height: .625rem; background-color: #c0c0c0; background-image: url(assets/img/shop/pattern/marble.jpg);"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center"><span class="me-2">$22.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip"
                                data-bs-template="&lt;div class=&quot;tooltip fs-xs&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;tooltip-inner bg-light text-muted p-0&quot;&gt;&lt;/div&gt;&lt;/div&gt;"
                                data-bs-placement="left" title="Add to cart"><a class="nav-link fs-lg py-2 px-1"
                                    href="#"><i class="ai-cart"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
