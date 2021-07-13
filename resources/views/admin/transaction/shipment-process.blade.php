@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Proses Pengiriman</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                    <div class="breadcrumb-item">Proses Pengiriman</div>
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
                                                <th scope="col">Kode Kirim</th>
                                                <th scope="col">Nama Pembeli</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($payments as $key => $payment)
                                            <tr>
                                                <td>{{ ++$key }}.</td>
                                                <td>{{ $payment->transaction_id }}</td>
                                                <td>{{ $payment->transaction_date }}</td>
                                                <td>{{ $payment->shipping_start }}</td>
                                                <td>{{ $payment->receipt_number }}</td>
                                                <td>{{ $payment->name }}</td>
                                                <td>
                                                    <span>{{ $payment->address }}, </span><br>
                                                    <span>Desa {{ $payment->village }}, </span><br>
                                                    <span>Kecamatan {{ $payment->district }}, </span><br>
                                                    <span>{{ $payment->city }}, </span><br>
                                                    <span>Provinsi {{ $payment->address }}, </span><br>
                                                    <span>{{ $payment->postal_code }}</span><br>
                                                </td>
                                                <td>Rp {{ number_format($payment->total, 0, '', '.') }}</td>
                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <a href="{{ url('transaction-finish').'/'.$payment->transaction_id }}"
                                                           class="btn btn-info mb-2">Selesai</a>
                                                        <a href="{{ url('cancel-transaction').'/'.$payment->transaction_id }}"
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

@endsection
