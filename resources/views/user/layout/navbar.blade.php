<nav class="navbar py-4 navbar-expand-lg navbar-light bg-light sticky-top" id="headerHv">
  <div class="container">
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand" href="#"><strong>HI VALEEQA</strong></a>
      <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item me-lg-5">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item me-lg-5">
                  <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item me-lg-5">
                  <a class="nav-link" href="#">New</a>
              </li>
              <li class="nav-item me-lg-5">
                  <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item d-lg-none me-lg-5">
                  <a class="nav-link" href="#">Masuk</a>
              </li>
              <li class="nav-item d-lg-none me-lg-5">
                  <a class="nav-link" href="#">Daftar</a>
              </li>
          </ul>
      </div>

      <div class="btn-group ms-lg-5 me-lg-5 d-none d-lg-flex">
          <button class="btn btn-pink" data-bs-toggle="modal" data-bs-target="#login">Masuk</button>
          <button class="btn btn-pink">Daftar</button>
      </div>

      <box-icon name="shopping-bag" color="var(--hv-pink)"></box-icon>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-2" style="border-radius: 2rem;">
        <div class="modal-header border-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h3 class="modal-title mb-4" id="loginLabel">Masuk</h3>
            <form action="{{ url('login') }}" method="POST">
                <div class="mb-3">
                  <label for="userEmail" class="form-label">Email/Username</label>
                  <input type="text" class="form-control" id="userEmail" name="userEmail" placeholder="Masukkan Email/Username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="********">
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="showPass">
                          <label class="form-check-label" for="showPass">Show Password</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-end">
                            <a href="#" class="text-decoration-none text-pink">Lupa Password?</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-pink btn-lg">Masuk</button>

                </div>
            </form>
        </div>
        <div class="modal-footer justify-content-center border-0">
          Belum punya akun? <a href="#" class="text-decoration-none text-pink">Daftar</a>
        </div>
      </div>
    </div>
</div>