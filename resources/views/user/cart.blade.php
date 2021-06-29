@extends('user/layout.template')

@section('content')

    <section class="title bg-pink-light">
        <div class="container py-5">
            <h2>Cart</h2>
            <div class="hv-garis-pink mt-3"></div>
        </div>
    </section>

    <section class="cart my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8" id="cartItem">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="Yumna Dress">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted"><strong>Yumna Dress</strong></h5>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-pink"><strong>-</strong></button>
                                        <span class="item-qty mx-1">12</span>
                                        <button class="btn btn-pink"><strong>+</strong></button>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted"><strong>Rp 190.000</strong></h5>
                                </div>
                                <div class="col-1">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="#" class="text-pink">
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
                                        <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="Yumna Dress">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted"><strong>Yumna Dress</strong></h5>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-pink"><strong>-</strong></button>
                                        <span class="item-qty mx-1">12</span>
                                        <button class="btn btn-pink"><strong>+</strong></button>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <h5 class="text-muted"><strong>Rp 190.000</strong></h5>
                                </div>
                                <div class="col-1">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="#" class="text-pink">
                                            <i class='bx bx-sm bx-trash-alt'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="card border-radius-1 border border-2 border-light p-3 mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class='bx bx-map' ></i> Alamat Pengiriman: <br> 
                                    Banyuwangi, Jawa Timur
                                </div>
                                <button class="btn btn-outline-pink">Ubah</button>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 border-radius-1 border-0 bg-light" id="cartSummary">
                        <div class="card-body">
                            <h3 class="card-title text-secondary">Summary</h3>
                            <ul class="list-group border-0 bg-transparent mt-4">
                                <li class="d-flex list-group-item justify-content-between border-0 bg-transparent">
                                    <span class="h6">Total:</span>
                                    <span class="h6">Rp 280.000</span>
                                </li>
                                <li class="d-flex list-group-item justify-content-between border-0 bg-transparent">
                                    <span class="h6">
                                        Ongkos Pengiriman: <br>
                                    </span>
                                    <span class="h6">Rp 20.000</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between border-top border-1 pt-3 mt-3">
                                <h4>Grand Total:</h4>
                                <h4>Rp 300.000</h4>
                            </div>
                            <div class="d-grid mt-5">
                                <a href="/invoices" class="btn btn-pink">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection