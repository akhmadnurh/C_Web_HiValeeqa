@extends('admin/layout.template')

@section('content')
    
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Tambah Produk</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="#" class="needs-validation" novalidate="">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Upload Gambar 1</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="productImg1">
                                                    <label class="custom-file-label" for="productImg1">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="productName">Nama Produk</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="productName" id="productName">
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="productStock">Stok</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" required="" name="productStock" id="productStock">
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="productMaterial">Bahan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="productMaterial" id="productMaterial">
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="productColor">Warna</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required="" name="productColor" id="productColor">
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="productPrice">Harga</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        Rp
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" required="" name="productPrice" id="productPrice">
                                            </div>
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="productCategory">Kategori</label>
                                        <div class="col-sm-9">
                                            <select name="productCategory" id="productCategory" class="custom-select" required>
                                                <option value="">Pilih Kategori</option>
                                                <option value="Chayra Abaya">Chayra Abaya</option>
                                                <option value="Yumna Dress">Yumna Dress</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="productDesc">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <textarea cols="5" class="form-control" required="" name="productDesc" id="productDesc"></textarea>
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-secondary btn-lg mr-2" href="/adm/product">Batal</a>
                                        <button class="btn btn-primary btn-lg" type="submit">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


@endsection