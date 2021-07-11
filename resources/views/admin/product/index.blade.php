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
                    <a class="btn btn-lg btn-primary" href="/adm/product/add"><i class="fas fa-plus mr-1"></i> Tambah Produk</a>
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
                                                <th style="width: 9%;">Gambar</th>
                                                <th style="width: 13.5%;">Nama Produk</th>
                                                <th style="width: 9%;">Stok</th>
                                                <th style="width: 9%;">Bahan</th>
                                                <th style="width: 9%;">Warna</th>
                                                <th style="width: 13.5%;">Harga</th>
                                                <th style="width: 22.5%;">Deskripsi</th>
                                                <th style="width: 9%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key => $product)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td><img src="{{ asset('img/produk/yumna2.png')}}" alt="nama produk"
                                                         class="img-fluid"></td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>{{ $product->material }}</td>
                                                <td>{{ $product->color }}</td>
                                                <td>Rp {{ number_format($product->price, 0, '', '.')   }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ url('/adm/product/edit').'/'.$product->product_id }}"
                                                           class="btn btn-info mr-2">Edit</a>
                                                        <a href="{{ url('/adm/product/delete').'/'.$product->product_id }}"
                                                           class="btn btn-danger"
                                                           onclick="return confirm('Are you sure?')">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
