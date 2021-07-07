@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Management Kategori</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Admin</a></div>
                    <div class="breadcrumb-item">Management Kategori</div>
                </div>
            </div>

            <div class="section-body">
                <div class="d-flex justify-content-start mb-3">
                    <a class="btn btn-lg btn-primary" href="{{ url('/adm/category/add') }}"><i class="fas fa-plus mr-1"></i> Tambah Kategori</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-stripe" id="table-1">
                                        <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Kategori</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category as $key => $cat)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $cat->category_name }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ url('/adm/category/edit').'/'.$cat->category_id }}"
                                                           class="btn btn-info mr-2">Edit</a>
                                                        <a href="{{ url('/adm/category/delete').'/'.$cat->category_id }}"
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
