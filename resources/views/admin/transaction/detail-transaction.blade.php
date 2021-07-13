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
                            onclick="goBack()"><i class="fas fa-chevron-left mr-1"></i> Kembali
                    </button>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-4">#{{ $id }}</h3> <!-- Nomor Faktur -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td style="width: 10%">Nama</td>
                                            <td style="width: 3%">:</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%">Alamat</td>
                                            <td style="width: 3%">:</td>
                                            <td>{{ $user->address }}, Desa {{ $user->village }},
                                                Kecamatan {{ $user->district }}, {{ $user->city }},
                                                Provinsi {{ $user->province  }}, {{ $user->postal_code }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%">No Hp</td>
                                            <td style="width: 3%">:</td>
                                            <td>{{ $user->whatsapp }}</td>
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
                                        <?php
                                        $subtotal = 0;
                                        ?>
                                        @foreach($products as $key => $product)
                                            <tr>
                                                <td>{{ ++$key }}.</td>
                                                <td><a href="{{ url('detail').'/'.$product->product_id }}">{{ $product->product_name }}</a></td>
                                                <td>Rp {{ number_format($product->price, 0, '', '.') }}</td>
                                                <td class="text-center">{{ $product->count }}</td>
                                                <td>
                                                    Rp {{ number_format((intval($product->price) * $product->count), 0, '', '.') }}</td>
                                            </tr>
                                            <?php
                                            $subtotal += intval($product->price) * $product->count

                                            ?>
                                        @endforeach
                                        {{-- ongkos dan total --}}
                                        <tr>
                                            <td colspan="4"
                                                class="text-right">Sub Total:
                                            </td>
                                            <td>Rp {{ number_format($subtotal, 0, '', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"
                                                class="text-right">Ongkir:
                                            </td>
                                            <td>Rp 20.000</td>
                                        </tr>
                                        <tr class="h6">
                                            <td colspan="4"
                                                class="text-right">Grand Total:
                                            </td>
                                            <td><strong>Rp {{ number_format($subtotal+20000, 0, '', '.') }}</strong>
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
