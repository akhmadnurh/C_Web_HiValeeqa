<template>
<div class="sticky-top">
    <nav class="navbar py-4 navbar-expand-lg navbar-light bg-light sticky-top" id="headerHv">
    <div class="container">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <router-link class="navbar-brand" to="/"><strong>HI VALEEQA</strong></router-link>
        <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navList">
                <li class="nav-item me-lg-5">
                    <router-link class="nav-link" exact to="/">Home</router-link>
                </li>
                <li class="nav-item me-lg-5">
                    <router-link class="nav-link" to="/shop">Shop</router-link>
                </li>
                <li class="nav-item me-lg-5">
                    <a class="nav-link" href="#new-product">New</a>
                </li>
                <li class="nav-item me-lg-5">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <!-- For mobile -->
                <li class="nav-item d-lg-none me-lg-5">
                    <router-link class="nav-link" to="/login">Masuk</router-link>
                </li>
                <li class="nav-item d-lg-none me-lg-5">
                    <router-link class="nav-link" to="/register">Daftar</router-link>
                </li>

            </ul>
        </div>

        <!-- For desktop -->
        <div class="btn-group ms-lg-5 me-lg-5 d-none d-lg-flex">
            <router-link to="/login" class="btn btn-pink">Masuk</router-link>
            <router-link to="/register" class="btn btn-pink">Daftar</router-link>
        </div>

        <a href="#" class="text-pink"><i class="bx bx-shopping-bag bx-sm"></i></a>
    </div>
    </nav>
</div>

</template>

