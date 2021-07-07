@extends('admin/layout.template')

@section('content')

    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Edit Kategori</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="{{ url('/adm/category/edit').'/'.$category->category_id  }}" class="needs-validation"
                                  novalidate="" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="categoryName">Nama Kategori</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required=""
                                                   value="{{ $category->category_name }}" name="categoryName" id="categoryName">
                                            <div class="invalid-feedback">
                                                Tidak Boleh Kosong
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-secondary btn-lg mr-2" href="{{ url('/adm/category') }}">Batal</a>
                                        <button class="btn btn-primary btn-lg" type="submit">Edit</button>
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
