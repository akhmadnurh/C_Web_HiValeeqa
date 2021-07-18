@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            {{-- Pendapatan, Penjualan, Order --}}
            <div class="row">

                {{-- Order Statistik --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">Order Statistik
                                {{--                                <div class="dropdown d-inline">--}}
                                {{--                                    <a class="font-weight-600 dropdown-toggle"--}}
                                {{--                                       data-toggle="dropdown"--}}
                                {{--                                       href="#"--}}
                                {{--                                       id="orders-month">July</a>--}}
                                {{--                                    <ul class="dropdown-menu dropdown-menu-sm">--}}
                                {{--                                        <li class="dropdown-title">Select Month</li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">January</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">February</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">March</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">April</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">May</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">June</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item active">July</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">August</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">September</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">October</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">November</a></li>--}}
                                {{--                                        <li><a href="#"--}}
                                {{--                                               class="dropdown-item">December</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="card-stats-items">
                                {{-- Dikemas = Menunggu Pengiriman --}}
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">{{ $dashboard['orders'][0] }}</div>
                                    <div class="card-stats-item-label">Dikemas</div>
                                </div>
                                {{-- Dikirim = Proses Pengiriman --}}
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">{{ $dashboard['orders'][1] }}</div>
                                    <div class="card-stats-item-label">Dikirim</div>
                                </div>
                                {{-- Selesai --}}
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">{{ $dashboard['orders'][2] }}</div>
                                    <div class="card-stats-item-label">Selesai</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-archive"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pesanan</h4>
                            </div>
                            <div class="card-body">
                                {{ $dashboard['orders'][3] }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Total Pendapatan --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="balance-chart"
                                    height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Pendapatan</h4>
                            </div>
                            <div class="card-body">
                                Rp {{ number_format($dashboard['income'], 0, '', '.') }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Total Penjualan --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="sales-chart"
                                    height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Transaksi</h4>
                            </div>
                            <div class="card-body">
                                {{ $dashboard['orders'][4] }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- table --}}
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><i class="fas fa-clipboard-list mr-1"
                                   style="font-size: 1rem"></i> Transaksi Terakhir</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Beli</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Whatsapp</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                    @foreach($dashboard['transactions'] as $key => $transaction)
                                        <tr>
                                            <td>{{ ++$key }}.</td>
                                            <td>{{ $transaction->transaction_date }}</td>
                                            <td>{{ $transaction->name }}</td>
                                            <td><span>{{ $transaction->address }}, </span><br>
                                                <span>Desa {{ $transaction->village }}, </span><br>
                                                <span>Kecamatan {{ $transaction->district }}, </span><br>
                                                <span>{{ $transaction->city }}, </span><br>
                                                <span>Provinsi {{ $transaction->province }}, </span><br>
                                                <span>{{ $transaction->postal_code }}</span><br></td>
                                            <td>{{ $transaction->whatsapp }}</td>
                                            <td>Rp {{ number_format($transaction->total, 0, '', '.') }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    @if ($transaction->status == 1)
                                                        <span class="badge badge-light">Menunggu Bayar</span>
                                                    @elseif($transaction->status == 2)
                                                        <span class="badge badge-warning">Menunggu Pengiriman</span>
                                                    @elseif($transaction->status == 3)
                                                        <span class="badge badge-primary">Proses Pengiriman</span>
                                                    @elseif($transaction->status == 4)
                                                        <span class="badge badge-success">Selesai</span>
                                                    @elseif($transaction->status == 5)
                                                        <span class="badge badge-danger">Dibatalkan</span>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <a href="{{ url('adm/all-transaction') }}"
                                   class="btn btn-outline-primary">Selengkapnya <i
                                       class="fas fa-chevron-right ml-2"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection
