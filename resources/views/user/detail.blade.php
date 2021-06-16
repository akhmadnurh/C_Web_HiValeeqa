@extends('user/layout.template')

@section('content')

    <section class="breadcrumb bg-pink-light mb-5">
        <div class="container py-5">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-pink">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-pink">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
            <div class="hv-garis-pink"></div>
        </div>
    </section>

    <section class="main-content py-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="Yumna Dress" style="height: 32rem">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 text-uppercase text-pink-dark">Yumna Dress</h1>
                    <h5 class="text-dark my-3">Rp 150.000,00</h5>
                    <p class="text-muted">Stok: 120</p>
                    <div class="d-grid gap-2 w-75">
                        <button class="btn btn-pink btn-lg" type="button"><i class='bx bx-plus' ></i> Add to Cart</button>
                        <button class="btn btn-outline-pink btn-lg" type="button"><i class='bx bxs-heart' ></i> Wishlist</button>
                    </div>
                    <h5 class="mt-5">Deskripsi</h5>
                    <p class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum veniam facilis itaque nihil nemo? Ex hic sed magni illum esse voluptatem omnis sapiente quos, nostrum facere tempora impedit eligendi aliquid! Lorem ipsum dolor sit amet consectetur adipisicing elit. At incidunt, commodi non fugiat id est delectus culpa dignissimos laboriosam corporis quisquam, provident quo ea! Repellendus beatae harum veniam officia voluptate.
                    </p>
                    <h5 class="mt-5">Informasi Tambahan</h5>
                    <p class="lead">
                        <div class="row">
                            <dt class="col-sm-3">Warna</dt>
                            <dd class="col-sm-9">Pink</dd>
                            <dt class="col-sm-3">Ukuran</dt>
                            <dd class="col-sm-9">M / L / XL </dd>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="relate bg-light py-5">
        <div class="container py-5">
            <div class="hv-garis mb-3 mx-auto"></div>
            <h2 class="mb-5 text-center">Produk Terkait</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border border-white" style="height: 30rem;border-radius: 1rem;">
                        <div class="img-cart" style="overflow: hidden;border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                            <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                            <p class="card-text text-center">Rp 150.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border border-white" style="height: 30rem;border-radius: 1rem;">
                        <div class="img-cart" style="overflow: hidden;border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                            <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                            <p class="card-text text-center">Rp 150.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border border-white" style="height: 30rem;border-radius: 1rem;">
                        <div class="img-cart" style="overflow: hidden;border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                            <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                            <p class="card-text text-center">Rp 150.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border border-white" style="height: 30rem;border-radius: 1rem;">
                        <div class="img-cart" style="overflow: hidden;border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                            <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                            <p class="card-text text-center">Rp 150.000,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection