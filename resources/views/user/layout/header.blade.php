<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul> 
      </div>
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
  </nav>
<!-- Close Header -->

<!-- Modal Login -->
<div class="modal fade" id="masukModal" tabindex="-1" aria-labelledby="masukModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="masukModalLabel">Masuk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('login') }}" method="POST">
                <div class="mb-3">
                  <label for="userEmail" class="form-label">Email/Username</label>
                  <input type="text" class="form-control" id="userEmail" name="userEmail">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="showPass">
                  <label class="form-check-label" for="showPass">Show Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
        </div>
        <div class="modal-footer justify-content-center">
            Belum punya akun? <a href="#">Daftar</a>
        </div>
      </div>
    </div>
  </div>
