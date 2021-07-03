@extends('user/layout.template')

@section('content')
    
    <section class="change-password my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')
    
                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">
                            <h3>Ubah Password</h3>
                            <div class="hv-garis mb-4"></div>
                            <form action="#">
                                <div class="row mb-3">
                                    <label for="passwordNow" class="col-sm-3 col-form-label">Password Saat Ini</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control w-75" id="passwordNow" name="passwordNow">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="newPassword" class="col-sm-3 col-form-label">Password Baru</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control w-75" id="newPassword" name="newPassword">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="newPasswordConfirm" class="col-sm-3 col-form-label">Ulangi Password Baru</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control w-75" id="newPasswordConfirm" name="newPasswordConfirm">
                                    </div>
                                </div>
                                <button class="btn btn-pink" type="submit">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection