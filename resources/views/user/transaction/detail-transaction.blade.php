@extends('user/layout.template')

@section('content')

    <section class="billing mt-4 mb-5 pb-5">
        <div class="container">
            <div class="bg-warning bg-gradient border-radius-1 p-3 my-3">
                <h5 class="text-light d-flex align-items-center mb-0">
                    <i class='bx bx-message-square-error bx-sm me-2'></i> Harap konfirmasi pembayaran dengan menghubungi admin setelah melakukan pembayaran.
                </h5>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    {{-- Invoices --}}
                    <div class="card border-radius-1 mb-3">
                        <div class="card-header bg-transparent fw-bold">
                            TRANSAKSI
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless mb-4">
                                <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col" class="text-center">Jumlah</th>
                                    <th scope="col">Total Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $subTotal = 0 ?>
                                @foreach($products as $key => $product)
                                    <?php $subTotal += ($product->count * $product->price) ?>
                                    <tr>
                                        <td>{{ ++$key }}.</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>Rp {{ number_format($product->price, 2, ',', '.') }}</td>
                                        <td class="text-center">{{ $product->count }}</td>
                                        <td>Rp {{ number_format($product->count * $product->price, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td class="w-75 text-end">Total:</td>
                                    <td class="w-25 fw-bold">Rp {{ number_format($subTotal, 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td class="w-75 text-end">Ongkos Pengiriman:</td>
                                    <td class="w-25 fw-bold">Rp {{ number_format(20000, 2, ',', '.') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-transparent d-flex justify-content-end">
                            <h4>Grand Total: Rp {{ number_format($subTotal + 20000, 2, ',', '.') }}</h4>
                        </div>
                    </div>
                    {{-- Invoices End --}}

                    {{-- Bank Transfer --}}
                    <div class="card border-radius-1 mb-3">
                        <div class="card-header bg-transparent fw-bold d-flex justify-content-between align-items-center">
                            <span>Bank Transfer</span>
                            <i class='bx bx-credit-card'></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                <span>
                                    <div class="fw-bolder text-secondary">BNI (Akhmad Nur Hidayatulloh)</div>
                                    <div class="fw-bolder">
                                        8901882882
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-bni.svg')}}" alt="Bank BNI" class="img-fluid" style="height: 1.25rem">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                <span>
                                    <div class="fw-bolder text-secondary">BRI (Akhmad Nur Hidayatulloh)</div>
                                    <div class="fw-bolder">
                                        14117289100928
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-bri.svg')}}" alt="Bank BRI" class="img-fluid" style="height: 1.25rem">
                            </li>
                        </ul>
                    </div>
                    {{-- Bank Transfer end --}}

                    {{-- E Wallet Transfer --}}
                    <div class="card border-radius-1 mb-3">
                        <div class="card-header bg-transparent fw-bold d-flex justify-content-between align-items-center">
                            <span>E Wallet</span>
                            <i class='bx bx-mobile-alt' ></i>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                <span>
                                    <div class="fw-bolder text-secondary">Gopay (Akhmad Nur Hidayatulloh)</div>
                                    <div class="fw-bolder">
                                        08123456789
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-gopay.svg')}}" alt="Gopay" class="img-fluid" style="height: 1.25rem">
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                <span>
                                    <div class="fw-bolder text-secondary">LinkAja (Akhmad Nur Hidayatulloh)</div>
                                    <div class="fw-bolder">
                                        08123456789
                                    </div>
                                </span>
                                <img src="{{ asset('img/logo-linkaja.svg')}}" alt="LinkAja" class="img-fluid" style="height: 2rem">
                            </li>
                        </ul>
                    </div>
                    {{-- E Wallet Transfer end --}}

                </div>

                <div class="col-lg-6">
                    <div class="card border-radius-1 p-3">
                        <div class="card-body">
                            <h4 class="card-title mb-2">
                                Konfirmasi Pembayaran
                            </h4>
                            <div class="hv-garis mb-4"></div>
                            <form action="{{ url('checkout') }}" method="post" onsubmit="return confirm('Apakah anda yakin?')">
                                <div class="mb-3">
                                    <label for="bankName" class="form-label">Bank Anda</label>
                                    <input type="text" class="form-control" id="bankName" name="bankName" readonly value="{{ $bank->bank }}">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama (Sesuai Rekening)</label>
                                    <input type="text" class="form-control" id="name"  name="name" readonly value="{{ $bank->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="accountNumber" class="form-label">Nomor Rekening</label>
                                    <input type="text" class="form-control" id="accountNumber" name="accountNumber" readonly value="{{ $bank->account }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div> <!-- Row End -->
        </div> <!-- container end -->
    </section>

@endsection

@section('script')
    <script>
        transferDate();

        function transferDate() {
            Date.prototype.toDateInputValue = (function() {
                var local = new Date(this);
                local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
                return local.toJSON().slice(0,10);
            });
            document.getElementById('trfDate').value = new Date().toDateInputValue();
        }
    </script>
@endsection
