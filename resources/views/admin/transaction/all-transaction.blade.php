@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Semua Transaksi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                    <div class="breadcrumb-item">Semua Transaksi</div>
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
                                                <th scope="col">Nama Pembeli</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Hp</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($payments as $key => $payment)
                                            <tr>
                                                <td>{{ ++$key }}.</td>
                                                <td>{{ $payment->transaction_id }}</td>
                                                <td>{{ $payment->name }}</td>
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
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        @if($payment->status== 1)
                                                             <span class="badge badge-light">Menunggu Bayar</span>
                                                        @elseif($payment->status == 2)
                                                             <span class="badge badge-warning">Menunggu Pengiriman</span>
                                                        @elseif($payment->status == 3)
                                                             <span class="badge badge-primary">Proses Pengiriman</span>
                                                        @elseif($payment->status == 4)
                                                            <span class="badge badge-success">Selesai</span>
                                                        @elseif($payment->status == 5)
                                                             <span class="badge badge-danger">Dibatalkan</span>
                                                        {{-- <span class="badge badge-secondary">Menunggu Konfirmasi</span> --}}
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('adm/detail-transaction').'/'.$payment->transaction_id }}"
                                                       class="btn btn-dark mb-2">Detail</a>
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
