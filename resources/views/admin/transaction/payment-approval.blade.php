@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Konfirmasi Pembayaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                    <div class="breadcrumb-item">Konfirmasi Pembayaran</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-stripe"
                                           id="table-1">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">No. Faktur</th>
                                                <th scope="col">Tgl Beli</th>
                                                <th scope="col">Transfer dari-</th>
                                                <th scope="col">Transfer ke-</th>
                                                <th scope="col">Nama Pembeli</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Hp</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>108923902</td>
                                                <td>07/11/2021</td>
                                                <td>BRI</td>
                                                <td>BNI</td>
                                                <td>Akhmad Nur</td>
                                                <td>
                                                    <span>Jl. Ahmad Yani No. 3,</span><br>
                                                    <span>Desa Sambimulyo,</span><br>
                                                    <span>Kecamatan Siliragung,</span><br>
                                                    <span>Kabupaten Banyuwangi,</span><br>
                                                    <span>Jawa Timur</span><br>
                                                </td>
                                                <td>08123456789</td>
                                                <td>Rp 400.000</td>
                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="btn btn-info mb-2">Konfirmasi</a>
                                                        <a href="#"
                                                           class="btn btn-danger">Batalkan</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection
