@extends('layout-auth')

@section('content')
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <div class="d-flex align-items-center mb-4">
            <h1 class="h2 mb-0">My Content</h1>
        </div>
        <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
            <div class="card-body pb-4">
                <!-- Orders accordion-->
                <div class="accordion accordion-alt accordion-orders" id="orders">
                    <!-- Order-->
                    <div class="accordion-item border-top mb-0">
                        <div class="accordion-header"><a
                                class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed"
                                href="#orderOne" data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderOne">
                                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted">#78A6431D409</div><span
                                            class="badge bg-faded-info text-info fs-xs">In progress</span>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date</div>
                                        <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                        <div class="fs-sm fw-medium text-dark">Jan 27, 2022</div>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$16.00</div>
                                    </div>
                                </div>
                                <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                    <div class="mx-1"><img src="assets/img/account/orders/01.png" width="48"
                                            alt="Product"></div>
                                </div>
                            </a></div>
                        <div class="accordion-collapse collapse" id="orderOne" data-bs-parent="#orders">
                            <div class="accordion-body">
                                <div class="table-responsive pt-1">
                                    <table class="table align-middle w-100" style="min-width: 450px;">
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center"><a
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                        href="shop-single.html"><img src="assets/img/shop/cart/01.png"
                                                            width="110" alt="Product"></a>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2"><a href="shop-single.html">Candle in
                                                                concrete bowl</a></h4>
                                                        <div class="text-muted fs-sm me-3">Color: <span
                                                                class='text-dark fw-medium'>Gray night</span></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Quantity</div>
                                                <div class="fs-sm fw-medium text-dark">1</div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Price</div>
                                                <div class="fs-sm fw-medium text-dark">$16</div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">$16</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="bg-secondary rounded-1 p-4 my-2">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                            <div class="fs-sm">Upon the delivery</div><a
                                                class="btn btn-link py-1 px-0 mt-2" href="#"><i
                                                    class="ai-time me-2 ms-n1"></i>Order history</a>
                                        </div>
                                        <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Delivery address:</div>
                                            <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto, Ontario, M3J
                                                3H9, Canada</div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 text-md-end">
                                            <button class="btn btn-sm btn-outline-primary w-100 w-md-auto" type="button"><i
                                                    class="ai-star me-2 ms-n1"></i>Leave a
                                                review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order-->
                    <div class="accordion-item border-top mb-0">
                        <div class="accordion-header"><a
                                class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed"
                                href="#orderTwo" data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderTwo">
                                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted">#47H76G09F33</div><span
                                            class="badge bg-faded-danger text-danger fs-xs">Canceled</span>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date</div>
                                        <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                        <div class="fs-sm fw-medium text-dark">Sep 14, 2022</div>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$59.00</div>
                                    </div>
                                </div>
                                <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                    <div class="mx-1"><img src="assets/img/account/orders/02.png" width="48"
                                            alt="Product"></div>
                                    <div class="mx-1"><img src="assets/img/account/orders/03.png" width="48"
                                            alt="Product"></div>
                                    <div class="mx-1"><img src="assets/img/account/orders/04.png" width="48"
                                            alt="Product"></div>
                                </div>
                            </a></div>
                        <div class="accordion-collapse collapse" id="orderTwo" data-bs-parent="#orders">
                            <div class="accordion-body">
                                <div class="table-responsive pt-1">
                                    <table class="table align-middle w-100" style="min-width: 450px;">
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center"><a
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                        href="shop-single.html"><img src="assets/img/shop/cart/04.png"
                                                            width="110" alt="Product"></a>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2"><a href="shop-single.html">Analogue
                                                                wall clock</a></h4>
                                                        <div class="text-muted fs-sm me-3">Color: <span
                                                                class='text-dark fw-medium'>Turquoise</span></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Quantity</div>
                                                <div class="fs-sm fw-medium text-dark">1</div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Price</div>
                                                <div class="fs-sm fw-medium text-dark">$25</div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">$25</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center"><a
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                        href="shop-single.html"><img src="assets/img/shop/cart/05.png"
                                                            width="110" alt="Product"></a>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2"><a href="shop-single.html">Glossy
                                                                round vase</a></h4>
                                                        <div class="text-muted fs-sm me-3">Color: <span
                                                                class='text-dark fw-medium'>White</span></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Quantity</div>
                                                <div class="fs-sm fw-medium text-dark">1</div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Price</div>
                                                <div class="fs-sm fw-medium text-dark">$15</div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">$15</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center"><a
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                        href="shop-single.html"><img src="assets/img/shop/cart/06.png"
                                                            width="110" alt="Product"></a>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2"><a href="shop-single.html">Ceramic
                                                                flower pot</a></h4>
                                                        <div class="text-muted fs-sm me-3">Color: <span
                                                                class='text-dark fw-medium'>Gray concrete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Quantity</div>
                                                <div class="fs-sm fw-medium text-dark">1</div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Price</div>
                                                <div class="fs-sm fw-medium text-dark">$19</div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">$19</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="bg-secondary rounded-1 p-4 my-2">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                            <div class="fs-sm">Upon the delivery</div><a
                                                class="btn btn-link py-1 px-0 mt-2" href="#"><i
                                                    class="ai-time me-2 ms-n1"></i>Order history</a>
                                        </div>
                                        <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Delivery address:</div>
                                            <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto, Ontario, M3J
                                                3H9, Canada</div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 text-md-end">
                                            <button class="btn btn-sm btn-outline-primary w-100 w-md-auto"
                                                type="button"><i class="ai-star me-2 ms-n1"></i>Leave a
                                                review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order-->
                    <div class="accordion-item border-top mb-0">
                        <div class="accordion-header"><a class="accordion-button fs-4 fw-normal text-decoration-none py-3"
                                href="#orderThree" data-bs-toggle="collapse" aria-expanded="true"
                                aria-controls="orderThree">
                                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted">#34VB5540K83</div><span
                                            class="badge bg-faded-primary text-primary fs-xs">Delivered</span>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date</div>
                                        <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                        <div class="fs-sm fw-medium text-dark">Jul 10, 2022</div>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$38.00</div>
                                    </div>
                                </div>
                                <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                    <div class="mx-1"><img src="assets/img/account/orders/01.png" width="48"
                                            alt="Product"></div>
                                    <div class="mx-1"><img src="assets/img/account/orders/05.png" width="48"
                                            alt="Product"></div>
                                </div>
                            </a></div>
                        <div class="accordion-collapse collapse show" id="orderThree" data-bs-parent="#orders">
                            <div class="accordion-body">
                                <div class="table-responsive pt-1">
                                    <table class="table align-middle w-100" style="min-width: 450px;">
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center"><a
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                        href="shop-single.html"><img src="assets/img/shop/cart/01.png"
                                                            width="110" alt="Product"></a>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2"><a href="shop-single.html">Candle in
                                                                concrete bowl</a></h4>
                                                        <div class="text-muted fs-sm me-3">Color: <span
                                                                class='text-dark fw-medium'>Gray night</span></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Quantity</div>
                                                <div class="fs-sm fw-medium text-dark">1</div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Price</div>
                                                <div class="fs-sm fw-medium text-dark">$16</div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">$16</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center"><a
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                        href="shop-single.html"><img src="assets/img/shop/cart/02.png"
                                                            width="110" alt="Product"></a>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2"><a href="shop-single.html">Exquisite
                                                                glass vase </a></h4>
                                                        <div class="text-muted fs-sm me-3">Color: <span
                                                                class='text-dark fw-medium'>Rose</span></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Quantity</div>
                                                <div class="fs-sm fw-medium text-dark">2</div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Price</div>
                                                <div class="fs-sm fw-medium text-dark">$11</div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">$22</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="bg-secondary rounded-1 p-4 my-2">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                            <div class="fs-sm">Upon the delivery</div><a
                                                class="btn btn-link py-1 px-0 mt-2" href="#"><i
                                                    class="ai-time me-2 ms-n1"></i>Order history</a>
                                        </div>
                                        <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Delivery address:</div>
                                            <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto, Ontario, M3J
                                                3H9, Canada</div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 text-md-end">
                                            <button class="btn btn-sm btn-outline-primary w-100 w-md-auto"
                                                type="button"><i class="ai-star me-2 ms-n1"></i>Leave a
                                                review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order-->
                    <div class="accordion-item border-top border-bottom mb-0">
                        <div class="accordion-header"><a
                                class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed"
                                href="#orderFour" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="orderFour">
                                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted">#502TR872W2</div><span
                                            class="badge bg-faded-primary text-primary fs-xs">Delivered</span>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date</div>
                                        <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                        <div class="fs-sm fw-medium text-dark">May 11, 2022</div>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">$17.00</div>
                                    </div>
                                </div>
                                <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                    <div class="mx-1"><img src="assets/img/account/orders/06.png" width="48"
                                            alt="Product"></div>
                                </div>
                            </a></div>
                        <div class="accordion-collapse collapse" id="orderFour" data-bs-parent="#orders">
                            <div class="accordion-body">
                                <div class="table-responsive pt-1">
                                    <table class="table align-middle w-100" style="min-width: 450px;">
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center"><a
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3"
                                                        href="shop-single.html"><img src="assets/img/shop/cart/07.png"
                                                            width="110" alt="Product"></a>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2"><a href="shop-single.html">Dispenser
                                                                for soap</a></h4>
                                                        <div class="text-muted fs-sm me-3">Color: <span
                                                                class='text-dark fw-medium'>White marble</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Quantity</div>
                                                <div class="fs-sm fw-medium text-dark">1</div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Price</div>
                                                <div class="fs-sm fw-medium text-dark">$17</div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-muted mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">$17</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="bg-secondary rounded-1 p-4 my-2">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-3 col-lg-4 mb-3 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Payment:</div>
                                            <div class="fs-sm">Upon the delivery</div><a
                                                class="btn btn-link py-1 px-0 mt-2" href="#"><i
                                                    class="ai-time me-2 ms-n1"></i>Order history</a>
                                        </div>
                                        <div class="col-sm-7 col-md-5 mb-4 mb-md-0">
                                            <div class="fs-sm fw-medium text-dark mb-1">Delivery address:</div>
                                            <div class="fs-sm">401 Magnetic Drive Unit 2,<br>Toronto, Ontario, M3J
                                                3H9, Canada</div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 text-md-end">
                                            <button class="btn btn-sm btn-outline-primary w-100 w-md-auto"
                                                type="button"><i class="ai-star me-2 ms-n1"></i>Leave a
                                                review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination-->
                <div class="d-sm-flex align-items-center pt-4 pt-sm-5">
                    <nav class="order-sm-2 ms-sm-auto mb-4 mb-sm-0" aria-label="Orders pagination">
                        <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item active" aria-current="page"><span class="page-link">1<span
                                        class="visually-hidden">(current)</span></span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                        </ul>
                    </nav>
                    <button class="btn btn-primary w-100 w-sm-auto order-sm-1 ms-sm-auto me-sm-n5" type="button">Load
                        more orders</button>
                </div>
            </div>
        </div>
    </div>
@endsection
