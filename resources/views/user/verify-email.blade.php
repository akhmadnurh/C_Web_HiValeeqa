@extends('user/layout.template')

@section('content')
    <style>
        @media screen and (min-width: 992px) {
            #verifyContainer {
                width: 50%
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            #verifyContainer {
                width: 75%
            }
        }

        @media screen and (max-width: 767px) {
            #verifyContainer {
                width: 100%
            }
        }

    </style>
    <section class="verify-email"
             style="height: 70vh;">
        <div class="container my-5"
             id="verifyContainer">
            <div class="card border border-3 border-radius-1 border-light">
                <div class="card-body p-4">
                    <h3 class="card-title">Verifikasi Email</h3>
                    <div class="hv-garis mt-3 mb-5"></div>
                    <p class="card-text">
                        Masukkan kode verifikasi yang telah dikirim.
                    </p>
                    <form action="{{ url('verify-email') }}"
                          method="post">
                        @if (session()->has('status'))
                            <div class="alert {{ session('status') == 'success' ? 'alert-success' : 'alert-danger' }}">
                                {{ session('msg') }}</div>
                            {{ session()->forget(['status', 'msg']) }}
                        @endif
                        <div class="mb-3">
                            <input type="text"
                                   class="form-control w-50"
                                   placeholder="Kode"
                                   name="token"
                                   required>
                        </div>
                        <button class="btn-pink btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
