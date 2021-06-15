<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba </title>

    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    
    <nav class="navbar py-4 navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="#"><strong>HI VALEEQA</strong></a>
            <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-lg-5">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-lg-5">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item me-lg-5">
                        <a class="nav-link" href="#">New</a>
                    </li>
                    <li class="nav-item me-lg-5">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="btn-group ms-lg-5 me-lg-5 d-none d-lg-flex">
                <button class="btn btn-pink">Masuk</button>
                <button class="btn btn-pink">Daftar</button>
            </div>

            <box-icon name="shopping-bag" color="var(--hv-pink)"></box-icon>
        </div>
    </nav>
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://dummyimage.com/1200x600/000/fff.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://dummyimage.com/1200x600/000/fff.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://dummyimage.com/1200x600/000/fff.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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
            <p class="selingan-desc">HI VALEEQA punya fitur tabungan yang bisa kamu pakai untuk beli gamis seperti menabung.</p>
            <button class="btn btn-pink btn-lg">Cobain Yuk!</button>
        </div>
    </section>

    <section class="product container py-5 my-5">
        <div class="hv-garis mb-3 mx-auto"></div>
        <h2 class="mb-5 text-center">Produk Terbaru</h2>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card bg-light" style="border-color: var(--bs-light); height: 30rem; border-radius: 1rem;">
                    <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="card-img-top" style="overflow: hidden; border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                    <div class="card-body">
                        <h6 class="card-title">Yumna Dress</h6>
                        <p class="card-text">Rp150.000,00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card bg-light" style="border-color: var(--bs-light); height: 30rem; border-radius: 1rem;">
                    <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="card-img-top" style="overflow: hidden; border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                    <div class="card-body">
                        <h6 class="card-title">Yumna Dress</h6>
                        <p class="card-text">Rp150.000,00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card bg-light" style="border-color: var(--bs-light); height: 30rem; border-radius: 1rem;">
                    <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="card-img-top" style="overflow: hidden; border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                    <div class="card-body">
                        <h6 class="card-title">Yumna Dress</h6>
                        <p class="card-text">Rp150.000,00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card bg-light" style="border-color: var(--bs-light); height: 30rem; border-radius: 1rem;">
                    <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="card-img-top" style="overflow: hidden; border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                    <div class="card-body">
                        <h6 class="card-title">Yumna Dress</h6>
                        <p class="card-text">Rp150.000,00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="card bg-light" style="border-color: var(--bs-light); height: 30rem; border-radius: 1rem;">
                    <img src="{{ asset('assets/img/produk/yumna2.png')}}" alt="aa" class="card-img-top" style="overflow: hidden; border-top-left-radius: 1rem;border-top-right-radius: 1rem;">
                    <div class="card-body">
                        <h6 class="card-title">Yumna Dress</h6>
                        <p class="card-text">Rp150.000,00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button class="bg-dark bg-gradient text-light btn btn-lg">Lebih Banyak</button>
        </div>
    </section>

    <section class="footer bg-dark py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h1 class="text-light mb-3">HI VALEEQA</h1>
                    <ul class="list-unstyled text-white">
                        <li>aaaaaa</li>
                        <li>aaaaaa</li>
                        <li>aaaaaa</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4">
                    <h2 class="text-light mb-3">Produk</h2>
                    <ul class="list-unstyled text-white">
                        <li>aaaaaa</li>
                        <li>aaaaaa</li>
                        <li>aaaaaa</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4">
                    <h2 class="text-light mb-3">Layanan</h2>
                    <ul class="list-unstyled text-white">
                        <li>aaaaaa</li>
                        <li>aaaaaa</li>
                        <li>aaaaaa</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; <?= Date('Y') ?> Hi Valeeqa
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>