@extends('user/layout.template')

@section('content')
    
    <section class="invoices my-4">
        <div class="container">
            <div class="bg-danger bg-gradient border-radius-1 p-3 my-3">
                <h5 class="text-light d-flex align-items-center mb-0">
                    <i class='bx bx-message-square-error bx-sm me-2'></i> Silahkan lakukan transfer sebelum Anda melakukan konfirmasi.
                </h5>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-radius-1">
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
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </section>

@endsection