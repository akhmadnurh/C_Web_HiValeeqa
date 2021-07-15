@extends('user/layout.template')

@section('content')

    <section class="transaction my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')

                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">
                            @include('user/transaction.tab')

                            {{-- Kosong --}}
                            {{-- @include('user/transaction.empty') --}}

                            {{-- Berisi --}}
                            <div id="orderItem">
                                @foreach($payments['transactions'] as $key =>$transaction)
                                    <ul class="list-group border-radius-1 mb-4">
                                        <li class="list-group-item bg-light p-4">#{{ $transaction->transaction_id }}</li>
                                        <?php $total = 0 ?>
                                        @foreach($payments['details'][$key] as $detail)
                                            <li class="list-group-item">
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <img src="{{ asset('img/produk').'/'.$detail->image }}"
                                                                 alt="Yumna Dress">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="detail"
                                                           class="text-pink"><strong>{{ $detail->product_name }}</strong></a>
                                                        <h5 class="text-muted"><strong>Rp {{ number_format($detail->price, 2, ',', '.' ) }}</strong></h5>
                                                    </div>
                                                    <div class="col-3">
                                                        <div>Jumlah: {{ $detail->count }}</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex justify-content-center align-items-center fw-bold">
                                                            Rp {{ number_format($detail->price * $detail->count, 2, ',', '.' ) }}
                                                            <?php $total += ($detail->price * $detail->count) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                        <li class="list-group-item bg-pink-light d-flex flex-column p-4">
                                            <h5 class="mb-3 text-end">Total: Rp {{ number_format($total, 2, ',', '.')}}</h5>
                                            <div class="text-end">
                                                <a href="{{ url('transaction/detail').'/'.$transaction->transaction_id }}"
                                                   class="btn btn-outline-pink">Rincian Pesanan</a>
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
