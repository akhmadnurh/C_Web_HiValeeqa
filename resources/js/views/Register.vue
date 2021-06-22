<template>
    <div class="bg-light">
        <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="card bg-white border border-white px-5 py-5" style="border-radius: 2rem">
                <div class="card-body">
                    <div class="row">
                        <div class="d-none d-lg-inline col-lg-7">
                            <img src="assets/img/window-shop.svg" alt="Daftar Akun" class="img-fluid w-75">
                        </div>
                        <div class="col-12 col-lg-5">
                            <h6 class="text-uppercase d-flex align-items-center">
                                <img src="assets/img/hi-valeeqa.png" class="float-left me-2" alt="Hi Valeeqa"
                                    style="height: 1rem">
                                Hi Valeeqa
                            </h6>
                            <h2 class="my-4 text-pink">Welcome to Family</h2>
                            <form action="#" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        aria-describedby="emailHelp"
                                        placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                        placeholder="Konfirmasi Password">
                                </div>
                                <button type="submit" class="btn btn-pink btn-lg me-3">Daftar</button>
                            </form>
                            <router-link to="/" class="btn btn-light btn-lg mt-2">Back to Home</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>