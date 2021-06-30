@extends('user/layout.template')

@section('content')
    
    <section class="title bg-pink-light">
        <div class="container py-5">
            <h2>Shop</h2>
            <div class="hv-garis-pink mt-3"></div>
        </div>
    </section>

    <section class="main-content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="mb-2">Filter</h5>
                    <div class="hv-garis mb-4"></div>
                    <form action="#" class="w-75">
                        <div class="mb-3">
                            <label for="orderby" class="form-control-label mb-2">Urutkan</label>
                            <select class="form-select">
                                <option value="orderNewest" selected>Urutkan Dari Yang Terbaru</option>
                                <option value="orderMinPrice">Urutkan Dari Harga Terendah</option>
                                <option value="orderMaxPrice">Urutkan Dari Harga Tertinggi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-control-label mb-2">Kisaran Harga</label>
                            <input type="number" placeholder="Minimal" class="form-control mb-3">
                            <input type="number" placeholder="Maximal" class="form-control mb-3">
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                            <div class="card border-0" style="height: 30rem;">
                                <a href="detail">
                                    <div class="img-cart" style="overflow: hidden;">
                                        <img src="{{ asset('img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="detail">
                                        <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                                        <p class="card-text text-center text-muted">Rp 150.000,00</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                            <div class="card border-0" style="height: 30rem;">
                                <a href="detail">
                                    <div class="img-cart" style="overflow: hidden;">
                                        <img src="{{ asset('img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="detail">
                                        <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                                        <p class="card-text text-center text-muted">Rp 150.000,00</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                            <div class="card border-0" style="height: 30rem;">
                                <a href="detail">
                                    <div class="img-cart" style="overflow: hidden;">
                                        <img src="{{ asset('img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="detail">
                                        <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                                        <p class="card-text text-center text-muted">Rp 150.000,00</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                            <div class="card border-0" style="height: 30rem;">
                                <a href="detail">
                                    <div class="img-cart" style="overflow: hidden;">
                                        <img src="{{ asset('img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="detail">
                                        <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                                        <p class="card-text text-center text-muted">Rp 150.000,00</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                            <div class="card border-0" style="height: 30rem;">
                                <a href="detail">
                                    <div class="img-cart" style="overflow: hidden;">
                                        <img src="{{ asset('img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="detail">
                                        <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                                        <p class="card-text text-center text-muted">Rp 150.000,00</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                            <div class="card border-0" style="height: 30rem;">
                                <a href="detail">
                                    <div class="img-cart" style="overflow: hidden;">
                                        <img src="{{ asset('img/produk/yumna2.png')}}" alt="aa" class="img-fluid">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="detail">
                                        <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                                        <p class="card-text text-center text-muted">Rp 150.000,00</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <section class="pagination my-5">
                            <nav aria-label="Pagination Shop">
                                <ul class="pagination">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                  </li>
                                  <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                            </nav>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </section>

    

@endsection