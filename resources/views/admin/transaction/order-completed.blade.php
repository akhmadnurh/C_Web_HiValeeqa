@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Pesanan Selesai</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                    <div class="breadcrumb-item">Pesanan Selesai</div>
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
                                                <th scope="col">Tgl Kirim</th>
                                                <th scope="col">Nama Pembeli</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Tgl Diterima</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>108923902</td>
                                                <td>07/11/2021</td>
                                                <td>08/11/2021</td>
                                                <td>Akhmad Nur</td>
                                                <td>
                                                    <span>Jl. Ahmad Yani No. 3,</span><br>
                                                    <span>Desa Sambimulyo,</span><br>
                                                    <span>Kecamatan Siliragung,</span><br>
                                                    <span>Kabupaten Banyuwangi,</span><br>
                                                    <span>Jawa Timur</span><br>
                                                </td>
                                                <td>Rp 400.000</td>
                                                <td>11/11/2021</td>
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
