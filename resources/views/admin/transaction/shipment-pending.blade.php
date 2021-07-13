@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Menunggu Pengiriman</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/adm/') }}">Admin</a></div>
                    <div class="breadcrumb-item">Menunggu Pengiriman</div>
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
                                                    <td>{{ $payment->name }}</td>
                                                    <td>
                                                        <span>{{ $payment->address }}, </span><br>
                                                        <span>Desa {{ $payment->village }}, </span><br>
                                                        <span>Kecamatan {{ $payment->district }}, </span><br>
                                                        <span>{{ $payment->city }}, </span><br>
                                                        <span>Provinsi {{ $payment->address }}, </span><br>
                                                        <span>{{ $payment->postal_code }}</span><br>
                                                    </td>
                                                    <td>{{ $payment->whatsapp }}</td>
                                                    <td>Rp {{ number_format($payment->total, 0, '', '.') }}</td>
                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <a href="{{ url('#addReceiptNumber') . $payment->transaction_id }}"
                                                               class="btn btn-info mb-2"
                                                               role="button"
                                                               data-toggle="modal">Masukkan Kode Kirim</a>
                                                            <a href="{{ url('adm/detail-transaction').'/'.$payment->transaction_id }}"
                                                               class="btn btn-dark mb-2">Detail</a>
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

    <!-- Modal Masukkan Resi -->
    @foreach ($payments as $key => $payment)
        <div class="modal fade"
             id="addReceiptNumber{{ $payment->transaction_id }}"
             tabindex="-1"
             role="dialog"
             aria-labelledby="addReceiptNumber{{ $payment->transaction_id }}Label"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="addReceiptNumber{{ $payment->transaction_id }}Label">
                            Masukkan No. Resi #{{ $payment->transaction_id }}
                        </h5>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="deliverDate">Tanggal Kirim</label>
                                <input type="date"
                                       name="deliverDate"
                                       id="deliverDate"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="receiptNumber">No. Resi</label>
                                <input type="text"
                                       id="receiptNumber"
                                       name="receiptNumber"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#"
                               class="btn btn-primary ml-1">Simpan</a>
                            <button type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal Masukkan Resi End -->

@endsection
