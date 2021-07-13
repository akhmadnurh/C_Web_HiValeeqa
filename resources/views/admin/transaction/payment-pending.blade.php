@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Menunggu Pembayaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                    <div class="breadcrumb-item">Menunggu Pembayaran</div>
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
                                                <th scope="col">Nama Pembeli</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Hp</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $key => $payment)
                                                <tr>
                                                    <td>{{ ++$key }}.</td>
                                                    <td>{{ $payment->transaction_id }}</td>
                                                    <td>{{ $payment->transaction_date }}</td>
                                                    <td>{{ $payment->user_id }}</td>
                                                    <td>
                                                        <span>{{ $payment->address }}, </span><br>
                                                        <span>Desa {{ $payment->village }}, </span><br>
                                                        <span>Kecamatan {{ $payment->district }}, </span><br>
                                                        <span>{{ $payment->city }}, </span><br>
                                                        <span>Provinsi {{ $payment->province }}, </span><br>
                                                        <span>{{ $payment->postal_code }}</span><br>
                                                    </td>
                                                    <td>{{ $payment->whatsapp }}</td>
                                                    <td>Rp {{ number_format($payment->total, 0, '', '.') }}</td>
                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <a href="{{ url('confirm-payment') . '/' . $payment->transaction_id }}"
                                                               class="btn btn-info mb-2">Konfirmasi</a>
                                                            <a href="{{ url('#transactionDetail') . $payment->transaction_id }}"
                                                               class="btn btn-dark mb-2"
                                                               role="button"
                                                               data-toggle="modal">Detail</a>
                                                            <a href="{{ url('cancel-transaction') . '/' . $payment->transaction_id }}"
                                                               class="btn btn-danger">Batalkan</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
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

    <!-- Modal Detail -->
    @foreach ($payments as $key => $payment)
        <div class="modal fade"
             id="transactionDetail{{ $payment->transaction_id }}"
             tabindex="-1"
             role="dialog"
             aria-labelledby="transactionDetail{{ $payment->transaction_id }}Label"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="transactionDetail{{ $payment->transaction_id }}Label">
                            #{{ $payment->transaction_id }}
                        </h5>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Barang</th>
                                    <th class="text-center">Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- item --}}
                                <tr>
                                    <td>1.</td>
                                    <td>Yumna Dress</td>
                                    <td class="text-center">2</td>
                                    <td>Rp 240.000</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Yumna Dress</td>
                                    <td class="text-center">2</td>
                                    <td>Rp 240.000</td>
                                </tr>

                                {{-- ongkos dan total --}}
                                <tr>
                                    <td colspan="3"
                                        class="text-right">Sub Total:</td>
                                    <td>Rp 480.000</td>
                                </tr>
                                <tr>
                                    <td colspan="3"
                                        class="text-right">Ongkir:</td>
                                    <td>Rp 20.000</td>
                                </tr>
                                <tr class="h6">
                                    <td colspan="3"
                                        class="text-right">Grand Total:</td>
                                    <td>Rp 500.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal Detail End -->

@endsection
