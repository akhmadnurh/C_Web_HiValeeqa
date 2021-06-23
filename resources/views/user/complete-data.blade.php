@extends('user/layout.template')

@section('content')
    
    <section class="complete-data">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh">
            <div class="card border border-2 border-light border-radius-1 my-5" style="min-width: 50vw">
                <div class="card-body">
                    <h3 class="card-title text-center mb-5">Lengkapi Data Diri</h3>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" id="fullname" disabled value="User" class="form-control w-75">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control w-75" disabled value="user@email.com">
                        </div>
                        <label for="nohp" class="form-label">Nomor Hp</label>
                        <div class="input-group w-50 mb-3">
                            <span class="input-group-text" id="noHp">+62</span>
                            <input type="text" id="nohp" class="form-control" placeholder="81xxxxxxxxx" aria-label="Username" aria-describedby="noHp">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select name="gender" id="gender" class="form-select w-50">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <select name="provinsi" id="provinsi" class="form-select w-50">
                                <option selected>Pilih Provinsi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kabupaten" class="form-label">Kabupaten</label>
                            <select name="kabupaten" id="kabupaten" class="form-select w-50">
                                <option selected>Pilih Kabupaten</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan" class="form-select w-50">
                                <option selected>Pilih Kecamatan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="desa" class="form-label">Desa</label>
                            <select name="desa" id="desa" class="form-select w-50">
                                <option selected>Pilih Desa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                            <textarea name="alamatLengkap" id="alamatLengkap" class="form-control" rows="3" placeholder="Misal: Jl. Mastrip 5 No. 7, Depan Mie Ayam Pak To"></textarea>
                        </div>
                        <button class="btn-pink btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection