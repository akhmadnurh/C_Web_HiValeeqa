@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Management Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                    <div class="breadcrumb-item">Management Product</div>
                </div>
            </div>

            <div class="section-body">

                <div class="d-flex justify-content-start mb-3">
                    <a class="btn btn-lg btn-primary" href="/adm/product/add"><i class="fas fa-user-plus mr-1"></i> Tambah Produk</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-stripe" id="table-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 4.5%;">No.</th>
                                                <th style="width: 13.5%;">Nama Produk</th>
                                                <th style="width: 9%;">Stok</th>
                                                <th style="width: 9%;">Bahan</th>
                                                <th style="width: 9%;">Warna</th>
                                                <th style="width: 13.5%;">Harga</th>
                                                <th style="width: 22.5%;">Deskripsi</th>
                                                <th style="width: 18%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Yumna Dress</td>
                                                <td>120</td>
                                                <td>Katun</td>
                                                <td>Pink</td>
                                                <td>Rp 120.000</td>
                                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi placeat facilis nostrum et tempore porro totam in, sunt optio repellat vel perferendis quod blanditiis omnis molestias hic quibusdam, id corporis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque at quos accusamus quis, quia exercitationem modi perspiciatis vitae minima corrupti magnam excepturi repudiandae placeat molestiae unde vel dolorem ut ipsam!</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/adm/product/edit" class="btn btn-info mr-2">Edit</a>
                                                        <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection
