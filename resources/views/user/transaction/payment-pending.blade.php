@extends('user/layout.template')

@section('content')

    <section class="transaction my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')

                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">
                            @include('user/transaction.tab')

                            {{-- Kosong --}}
                            {{-- @include('user/transaction.empty') --}}

                            {{-- Berisi --}}
                            <div id="orderItem">
                                <ul class="list-group border-radius-1 mb-4">
                                    <li class="list-group-item bg-light p-4">#1</li>
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
                                                <div>Jumlah: 2</div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-center align-items-center fw-bold">
                                                    Rp 280.000
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
                                                <div>Jumlah: 2</div>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-center align-items-center fw-bold">
                                                    Rp 280.000
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item bg-pink-light d-flex flex-column p-4">
                                        <h5 class="mb-3 text-end">Total: Rp 560.000</h5>
                                        <div class="text-end">
                                            <button class="btn btn-danger me-2">Batalkan</button>
                                            <a href="#"
                                               class="btn btn-outline-pink">Rincian Pesanan</a>
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
