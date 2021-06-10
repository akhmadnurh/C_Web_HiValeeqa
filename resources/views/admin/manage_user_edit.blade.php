@extends('admin/layout.template')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit User</h1>
            {{-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div> --}}
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                    <form class="needs-validation" novalidate="" action="{{ url('edit-user') }}" method="post" enctype="multipart/form-data">
                      <div class="card-body">
                          <!-- id user -->
                          <input type="hidden" class="form-control" required="" name="id" value="{{ $user->id_user }}">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" required="" name="nama" value="{{ $user->nama }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" placeholder="example@email.com" class="form-control" required="" name="email" value="{{ $user->email }}">
                          </div>
                        </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Username</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" required="" name="username" data-name="username" value="{{ $user->username }}">
                                  <div class="invalid-feedback">
                                      What's your name?
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Password</label>
                              <div class="col-sm-9">
                                  <input type="password" class="form-control" required="" name="password" data-name="password">
                                  <div class="invalid-feedback">
                                      What's your name?
                                  </div>
                              </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select id="jk" class="form-control" name="gender">
                                <option value="#">-- Pilih Jenis Kelamin --</option>
                                <option value="P" <?php echo $user->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                <option value="L" <?php echo $user->gender == 'L' ? 'selected' : '' ?>>Laki</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3 col-form-label">No. WA</div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        +62
                                      </div>
                                    </div>
                                    <input type="text" class="form-control phone-number" name="wa" value="{{ $user->nomor_wa }}">
                                  </div>
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <div class="col-sm-3 col-form-label">Upload Foto</div>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <div class="input-group">--}}
{{--                                    <div class="custom-file">--}}
{{--                                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">--}}
{{--                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>--}}
{{--                                    </div>--}}
{{--                                  </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group mb-0 row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" required="" name="alamat">{{ $user->alamat }}</textarea>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
