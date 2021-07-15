@extends('user/layout.template')

@section('content')

    <section class="title bg-pink-light">
        <div class="container py-5">
            <h2>Cart</h2>
            <div class="hv-garis-pink mt-3"></div>
        </div>
    </section>

    <section class="cart my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8" id="cartItem">
                    @if(session()->has('msg'))
                        <div class="alert alert-danger">{{ session()->get('msg') }}</div>
                    @endif
                    <ul class="list-group">
                        <?php $subTotal = 0 ?>
                        @foreach($products['products'] as $key => $product)
                            <?php $subTotal += $product->quantity * $product->price ?>
                            <li class="list-group-item">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('img/produk').'/'.$product->image }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <h5 class="text-muted"><strong><a
                                                        href="{{ url('detail').'/'.$product->product_id }}"
                                                        class="text-muted">{{ $product->product_name }}</a></strong>
                                        </h5>
                                        @if($products['available'][$key] == 0)
                                            <span class="text-danger">Stok produk kosong</span>
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ $products['available'][$key] == 0 ? '' : url('minus-item-cart').'/'.$product->product_id }}"
                                               class="btn btn-pink"><strong>-</strong></a>
                                            <span class="item-qty mx-1">{{ $product->quantity }}</span>
                                            <a href="{{ $products['available'][$key] == 0 ? '' : url('plus-item-cart').'/'.$product->product_id }}"
                                               class="btn btn-pink"><strong>+</strong></a>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <h5 class="text-muted">
                                            <strong>Rp {{ number_format($product->price * $product->quantity, 2, ',', '.') }}</strong>
                                        </h5>
                                    </div>
                                    <div class="col-1">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ url('remove-cart').'/'.$product->product_id }}"
                                               class="text-pink" onclick="return confirm('Apakah anda yakin?')">
                                                <i class='bx bx-sm bx-trash-alt'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="card border-radius-1 border border-2 border-light p-3 mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class='bx bx-map'></i> Alamat Pengiriman: <br>
                                    {{ $user->address }}, Desa {{ $user->village }}, Kecamatan {{ $user->district }}
                                    , {{ $user->city }}, Provinsi {{ $user->province }}, {{ $user->postal_code }}
                                </div>
                                <button class="btn btn-outline-pink" onclick="profile('{{ url('address') }}')">Ubah
                                </button>
                                <script>
                                    const profile = (url) => {
                                        location.href = url
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 border-radius-1 border-0 bg-light" id="cartSummary">
                        <div class="card-body">
                            <h3 class="card-title text-secondary">Summary</h3>
                            <ul class="list-group border-0 bg-transparent mt-4">
                                <li class="d-flex list-group-item justify-content-between border-0 bg-transparent">
                                    <span class="h6">Total:</span>
                                    <span class="h6">Rp {{ number_format($subTotal, 2, ',', '.') }}</span>
                                </li>
                                <li class="d-flex list-group-item justify-content-between border-0 bg-transparent">
                                    <span class="h6">
                                        Ongkos Pengiriman: <br>
                                    </span>
                                    <span class="h6">Rp {{ number_format(20000, 2, ',', '.') }}</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between border-top border-1 pt-3 mt-3">
                                <h4>Grand Total:</h4>
                                <h4>Rp {{ number_format($subTotal + 20000, 2, ',', '.') }}</h4>
                            </div>
                            <div class="d-grid mt-5">
                                <a href="{{ $products['checkout_status'] == 0 || $cart == 0 ? '' : url('checkout') }}"
                                   class="btn btn-pink">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
