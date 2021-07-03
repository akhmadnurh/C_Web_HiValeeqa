@extends('user/layout.template')

@section('content')
    
    <section class="profile my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')
    
                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">

                            <h3>Profil</h3>
                            <div class="hv-garis mb-4"></div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <form action="#">
                                        <div class="row mb-3">
                                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="username" id="username" value="username" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" id="name" value="User Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="email" id="email" value="user@email.com" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nohp" class="col-sm-3 col-form-label">Nomor Hp</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nohp" id="nohp" value="+6285331343890" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3"><span>Jenis Kelamin</span></div>
                                            <div class="col-sm-9">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" name="gender" id="male" class="form-check-input">
                                                    <label for="male" class="form-check-label">Laki - Laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" name="gender" id="female" class="form-check-input" checked>
                                                    <label for="female" class="form-check-label">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <label for="birthdate" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="birthdate" id="birthdate" class="form-control">
                                            </div>
                                        </div>
                                        <button class="btn btn-pink" type="submit">Simpan</button>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    cob
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection