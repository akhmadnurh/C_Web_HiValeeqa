@extends('user/layout.template')

@section('content')

    <div class="bg-light p-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">
                        Kualitas Terbaik
                    </h1>
                    <p class="fs-4 my-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, repellendus sunt? Expedita atque esse obcaecati ullam, a explicabo autem voluptates consequuntur sit harum perspiciatis non, modi quos eos voluptatem in.
                    </p>
                    <button class="btn btn-pink btn-lg">Explore Now</button>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('img/hv-jumbotron.png')}}" alt="Hi Valeeqa Jumbotron" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <section class="category container py-5 my-5">
        <div class="mx-auto hv-garis mb-3"></div>
        <h2 class="text-center mb-5"><strong>Kategori</strong></h2>
        <div class="row mx-4">
            <div class="col-md-6">
                <div class="card bg-pink-light border-0 w-75 mx-auto mx-md-0 mb-3 mb-md-0 ms-md-auto" style="border-radius: .8rem">
                    <div class="card-body m-3">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Chayra Abaya</h4>

                                <p class="card-text">Pilihan Gamis Terbaik</p>

                                <div class="d-flex mt-5">
                                    <button class=" justify-content-center align-items-center btn btn-outline-pink mt-5">Explore Now <i class='bx bx-arrow-back bx-rotate-180'></i></button>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/abayaweb1.png')}}" class="img-fluid" alt="Chayra Abaya">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-pink-light border-0 w-75 mx-auto mx-md-0 me-md-auto" style="border-radius: .8rem">
                    <div class="card-body m-3">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Yumna Dress</h4>

                                <p class="card-text">Pilihan Gamis Terbaik</p>

                                <div class="d-flex mt-5">
                                    <button class=" justify-content-center align-items-center btn btn-outline-pink mt-5">Explore Now <i class='bx bx-arrow-back bx-rotate-180'></i></button>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/abayaweb1.png')}}" class="img-fluid" alt="Yumna Dress">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="selingan my-5 pt-5">
        <div class="selingan-bg">
            <h1 class="selingan-title">Tabungan</h1>
            <p class="selingan-desc">HI VALEEQA punya fitur tabungan yang bisa kamu pakai untuk beli gamis seperti
                menabung.</p>
            <button class="btn btn-pink btn-lg">Cobain Yuk!</button>
        </div>
    </section>

    <section class="product container py-5 my-5" id="new-product">
        <div class="hv-garis mb-3 mx-auto"></div>
        <h2 class="mb-5 text-center">Produk Terbaru</h2>
        <div class="row mb-5">
            @foreach($product as $item)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                    <a href="{{ url('/detail')."/".$item->product_id }}">
                        <div class="card border-0" style="height: 30rem;">
                            <div class="img-cart" style="overflow: hidden;">
                                <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-center text-uppercase text-pink-dark">{{ $item->product_name }}</h6>
                                <p class="card-text text-center text-muted">
                                    Rp {{ number_format($item->price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5 pt-5">
            <button class="btn-outline-dark btn btn-lg">Lebih Banyak <i class='bx bx-arrow-back bx-rotate-180'></i>
            </button>
        </div>
    </section>

@endsection
