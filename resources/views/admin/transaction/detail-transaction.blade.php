@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Detail Transaksi</h1>
            </div>

            <div class="section-body">

                <div class="d-flex justify-content-start mb-3">
                    <button class="btn btn-lg btn-primary"
                            onclick="goBack()"><i class="fas fa-chevron-left mr-1"></i> Kembali</button>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-4">#1</h3> <!-- Nomor Faktur -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="width: 10%">Nama</td>
                                                <td style="width: 3%">:</td>
                                                <td>User</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%">Alamat</td>
                                                <td style="width: 3%">:</td>
                                                <td>....</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%">No Hp</td>
                                                <td style="width: 3%">:</td>
                                                <td>08123456789</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Barang</th>
                                                <th>Harga</th>
                                                <th class="text-center">Jumlah</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- item --}}
                                            <tr>
                                                <td>1.</td>
                                                <td>Yumna Dress</td>
                                                <td>Rp 120.000</td>
                                                <td class="text-center">2</td>
                                                <td>Rp 240.000</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Yumna Dress</td>
                                                <td>Rp 120.000</td>
                                                <td class="text-center">2</td>
                                                <td>Rp 240.000</td>
                                            </tr>

                                            {{-- ongkos dan total --}}
                                            <tr>
                                                <td colspan="4"
                                                    class="text-right">Sub Total:</td>
                                                <td>Rp 480.000</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"
                                                    class="text-right">Ongkir:</td>
                                                <td>Rp 20.000</td>
                                            </tr>
                                            <tr class="h6">
                                                <td colspan="4"
                                                    class="text-right">Grand Total:</td>
                                                <td><strong>Rp 500.000</strong></td>
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
