@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Management Admin</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Admin</a></div>
            <div class="breadcrumb-item">Management Admin</div>
          </div>
        </div>

        <div class="section-body">
          <div class="d-flex justify-content-start mb-3">
            <a class="btn btn-lg btn-primary" href="/adm/admin-management/tambah"><i class="fas fa-user-plus mr-1"></i> Tambah Admin</a>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th class="text-center">
                            No.
                          </th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Jenis Kelamin</th>
                          <th>No. WA</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Agnes Monica</td>
                          <td>agnes@email.com</td>
                          <td>Perempuan</td>
                          <td>6281233567098</td>
                          <td>Jember</td>
                          <td><a href="/adm/admin-management/edit" class="btn btn-info">Edit</a></td>
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