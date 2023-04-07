@extends('layouts.app')

@section('content')
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <div class="d-flex align-items-center mb-4">
            <h1 class="h2 mb-0">My Campaign</h1>
        </div>
        <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
            <div class="card-body pb-4">
                
                <div class="accordion accordion-alt accordion-orders" id="orders">
                    
                    @foreach($campaigns as $campaign)
                    {{$campaign}}
                    {{$campaign->attachments}}
                    <div class="accordion-item border-top mb-0">
                        <div class="accordion-header"><a
                                class="accordion-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed"
                                href="#order{{$loop->iteration}}" data-bs-toggle="collapse" aria-expanded="false" aria-controls="order{{$loop->iteration}}">
                                <div class="d-flex justify-content-between w-100" style="max-width: 440px;">
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted">#78A6431D409</div><span
                                            class="badge bg-faded-info text-info fs-xs">In progress</span>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="d-none d-sm-block fs-sm text-muted mb-2">Order date</div>
                                        <div class="d-sm-none fs-sm text-muted mb-2">Date</div>
                                        <div class="fs-sm fw-medium text-dark">-</div>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-muted mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">-</div>
                                    </div>
                                </div>
                                <div class="accordion-button-img d-none d-sm-flex ms-auto">
                                    <div class="mx-1"><img src="assets/img/account/orders/01.png" width="48"
                                            alt="Product"></div>
                                </div>
                            </a></div>
                        <div class="accordion-collapse collapse" id="order{{$loop->iteration}}" data-bs-parent="#orders">
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
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
