<template>
  <div>
      <navbar></navbar>
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
                                <img src="assets/img/abayaweb1.png" class="img-fluid" alt="Chayra Abaya">
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
                                <img src="assets/img/abayaweb1.png" class="img-fluid" alt="Yumna Dress">
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
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <router-link to="/detail">
                    <div class="card border-0" style="height: 30rem;">
                        <div class="img-cart" style="overflow: hidden;">
                            <img src="assets/img/produk/yumna2.png" alt="aa" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-center text-uppercase text-pink-dark">Yumna Dress</h6>
                            <p class="card-text text-center text-muted">
                                Rp 190.000</p>
                        </div>
                    </div>
                </router-link>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5 pt-5">
            <button class="btn-outline-dark btn btn-lg">Lebih Banyak <i class='bx bx-arrow-back bx-rotate-180'></i>
            </button>
        </div>
    </section>
    <newfooter></newfooter>
  </div>
</template>

<script>
import Shop from '../views/Shop.vue'

export default {
    components: {
        Shop
    }
}
</script>