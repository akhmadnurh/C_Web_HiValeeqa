@extends('user/layout.template')

@section('content')

    <section class="wishlist my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')

                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">

                            <h3>Wishlist</h3>
                            <div class="hv-garis mb-5"></div>

                            <div id="wishlistItem">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('uLGsbv6d.png/yumna2.png') }}"
                                                         alt="Yumna Dress">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <a href="detail"
                                                   class="text-pink"><strong>Yumna Dress</strong></a>
                                                <h5 class="text-muted"><strong>Rp 190.000</strong></h5>
                                            </div>
                                            <div class="col-3">
                                                <div class="fw-bold">Stok: 12</div>
                                            </div>
                                            <div class="col-3">
                                                <a href="#"
                                                   class="btn btn-pink">Add to Cart</a>
                                            </div>
                                            <div class="col-1">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="#"
                                                       class="text-pink">
                                                        <i class='bx bx-sm bx-trash-alt'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('uLGsbv6d.png/yumna2.png') }}"
                                                         alt="Yumna Dress">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <a href="detail"
                                                   class="text-pink"><strong>Yumna Dress</strong></a>
                                                <h5 class="text-muted"><strong>Rp 190.000</strong></h5>
                                            </div>
                                            <div class="col-3">
                                                <div class="fw-bold">Stok: 12</div>
                                            </div>
                                            <div class="col-3">
                                                <a href="#"
                                                   class="btn btn-pink">Add to Cart</a>
                                            </div>
                                            <div class="col-1">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="#"
                                                       class="text-pink">
                                                        <i class='bx bx-sm bx-trash-alt'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
