@extends('user/layout.template')

@section('content')
    
    <section class="address my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')
    
                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">
                            <h3>Alamat</h3>
                            <div class="hv-garis mb-4"></div>

                            <form action="#">
                                <div class="row mb-3">
                                    <label for="province" class="col-form-label col-sm-2">Provinsi</label>
                                    <div class="col-sm-10 col-lg-7">
                                        <select name="province" id="province" class="form-select">
                                            <option value="" selected>Pilih Provinsi</option>
                                            <option value="Jawa Barat">Jawa Barat</option>
                                            <option value="Jawa Timur">Jawa Timur</option>
                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="regency" class="col-form-label col-sm-2">Kabupaten</label>
                                    <div class="col-sm-10 col-lg-7">
                                        <select name="regency" id="regency" class="form-select">
                                            <option value="" selected>Pilih Kabupaten</option>
                                            <option value="Jember">Jember</option>
                                            <option value="Banyuwangi">Banyuwangi</option>
                                            <option value="Lumajang">Lumajang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="districts" class="col-form-label col-sm-2">Kecamatan</label>
                                    <div class="col-sm-10 col-lg-7">
                                        <input type="text" class="form-control" placeholder="Pilih Kecamatan" id="districts" name="districts" list="datalistDistricts">
                                        <datalist id="datalistDistricts">
                                            <option value="Bangorejo">Bangorejo</option>
                                            <option value="Siliragung">Siliragung</option>
                                            <option value="Rogojampi">Rogojampi</option>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="village" class="col-form-label col-sm-2">Kelurahan</label>
                                    <div class="col-sm-10 col-lg-7">
                                        <input type="text" class="form-control" placeholder="Pilih Kelurahan" id="village" name="village" list="datalistVillages">
                                        <datalist id="datalistVillages">
                                            <option value="Sambimulyo">Sambimulyo</option>
                                            <option value="Kesilir">Kesilir</option>
                                            <option value="Bulurejo">Bulurejo</option>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="addressDetail" class="col-form-label col-sm-2">Alamat Lengkap</label>
                                    <div class="col-sm-10 col-lg-7">
                                        <textarea class="form-control" name="addressDetail" id="addressDetail" cols="30" rows="10" placeholder="Nama Jalan, RT/RW, dll."></textarea>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <label for="zipCode" class="col-form-label col-sm-2">Kode Pos</label>
                                    <div class="col-sm-10 col-lg-3">
                                        <input type="text" class="form-control" name="zipCode" id="zipCode" placeholder="Kode Pos">
                                    </div>
                                </div>
                                <button class="btn btn-pink">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection