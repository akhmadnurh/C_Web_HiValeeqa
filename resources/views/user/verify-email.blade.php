@extends('user/layout.template')

@section('content')
    <section class="verify-email" style="height: 70vh;">
        <div class="container my-5" style="width: 50%;">
            <div class="card border border-3 border-radius-1 border-light">
                <div class="card-body p-4">
                    <h3 class="card-title">Verifikasi Email</h3>
                    <div class="hv-garis mt-3 mb-5"></div>
                    <p class="card-text">
                        Masukkan kode verifikasi yang telah dikirim ke <strong>user@email.com</strong>
                    </p>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control w-50" placeholder="Kode">
                        </div>
                        <div class="mb-3">
                            <a href="#" class="text-pink">Kirim ulang?</a>
                        </div>
                        <button class="btn-pink btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection