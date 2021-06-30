@extends('user/layout.template')

@section('content')
    
    <section class="billing my-4">
        <div class="container">
            <div class="bg-danger bg-gradient border-radius-1 p-3 my-3">
                <h5 class="text-light d-flex align-items-center mb-0">
                    <i class='bx bx-message-square-error bx-sm me-2'></i> Silahkan lakukan transfer sebelum Anda melakukan konfirmasi.
                </h5>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-radius-1 mb-3">
                        <div class="card-header bg-transparent fw-bold">
                            #KODE_TRANSAKSI
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col" class="text-center">Jumlah</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Yumna Dress 2</td>
                                        <td class="text-center">2</td>
                                        <td>Rp 190.000</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Yumna Dress 2</td>
                                        <td class="text-center">2</td>
                                        <td>Rp 190.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Bank Transfer --}}
                    <div class="card border-radius-1 mb-3">
                        <div class="card-header bg-transparent fw-bold d-flex justify-content-between align-items-center">
                            <span>Bank Transfer</span>
                            <i class='bx bx-credit-card'></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>
                                    <div class="fw-bolder text-secondary">BNI (Akhmad Nur Hidayatullah)</div>
                                    <div class="fw-bolder">
                                        8901882882
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-bni.svg')}}" alt="Bank BNI" class="img-fluid" style="height: 1.25rem">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                <span>
                                    <div class="fw-bolder text-secondary">BRI (Akhmad Nur Hidayatullah)</div>
                                    <div class="fw-bolder">
                                        14117289100928
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-bri.svg')}}" alt="Bank BRI" class="img-fluid" style="height: 1.25rem">
                            </li>
                        </ul>
                    </div>
                    {{-- E Wallet Transfer --}}
                    <div class="card border-radius-1 mb-3">
                        <div class="card-header bg-transparent fw-bold d-flex justify-content-between align-items-center">
                            <span>E Wallet</span>
                            <i class='bx bx-mobile-alt' ></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>
                                    <div class="fw-bolder text-secondary">Gopay (Akhmad Nur Hidayatullah)</div>
                                    <div class="fw-bolder">
                                        08123456789
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-gopay.svg')}}" alt="Gopay" class="img-fluid" style="height: 1.25rem">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                <span>
                                    <div class="fw-bolder text-secondary">LinkAja (Akhmad Nur Hidayatullah)</div>
                                    <div class="fw-bolder">
                                        08123456789
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-linkaja.svg')}}" alt="LinkAja" class="img-fluid" style="height: 2rem">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-radius-1 p-3">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                Konfirmasi Pembayaran
                            </h4>
                            <div class="hv-garis mb-4"></div>
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="userBank" class="form-label">Bank Anda</label>
                                    <input type="text" class="form-control" id="userBank">
                                </div>
                                <div class="mb-3">
                                    <label for="adminBank" class="form-label">Bank Tujuan</label>
                                    <select id="adminBank" class="form-select">
                                        <option selected>Pilih Bank</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BRI">BRI</option>
                                        <option value="Gopay">Gopay</option>
                                        <option value="LinkAja">LinkAja</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="trfDate" class="form-label">Tanggal Transfer</label>
                                    <input type="date" id="trfDate" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="trfNominal" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="trfNominal" value="300.000">
                                </div>
                                <button class="btn btn-pink" type="submit">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection