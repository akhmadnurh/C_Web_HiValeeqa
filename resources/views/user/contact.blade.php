@extends('user/layout.template')

@section('content')
    <section class="title bg-pink-light">
        <div class="container p-5">
            <h2 class="text-center">Contact</h2>
        </div>
    </section>

    <section class="main-content my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="d-flex flex-column">
                        <h3 class="display-2 pe-4 mb-2">Kirim Pesan, Kritik atau Saran</h3>
                        <div class="p-5">
                            <img src="{{ asset('assets/img/contact-us.svg')}}" alt="Contact Us" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card border-radius-1 p-3">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                  <label for="name" class="form-label">Nama</label>
                                  <input type="text" class="form-control" id="name" placeholder="Nama Pengirim">
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@email.com">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Pesan ditulis disini..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-pink">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection