<nav class="navbar py-4 navbar-expand-lg navbar-light bg-light sticky-top" id="headerHv">
  <div class="container">
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="/"><strong>HI VALEEQA</strong></a>
      <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navList">
              <li class="nav-item me-lg-5">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item me-lg-5">
                  <a class="nav-link" href="shop">Shop</a>
              </li>
              <li class="nav-item me-lg-5">
                  <a class="nav-link" href="#new-product">New</a>
              </li>
              <li class="nav-item me-lg-5">
                  <a class="nav-link" href="#">Contact</a>
              </li>

              {{-- This is for Mobile --}}
              @if(session('loggedIn') !== null && session('loggedIn'))
              <li class="nav-item d-lg-none me-lg-5">
                  <div class="dropdown">
                      <a href="#" class="nav-link dropdown-toggle" role="button" id="userManageMobile" data-bs-toggle="dropdown" aria-expanded="false">user</a>

                      <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="userManageMobile">
                          <li><span class="dropdown-item-text">Hai, user</span></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#"><i class='bx bx-user-circle me-2'></i> Akun</a></li>
                          <li><a class="dropdown-item" href="#"><i class='bx bx-heart me-2'></i> Wishlist</a></li>
                          <li><a class="dropdown-item" href="{{ url('logout') }}"><i class='bx bx-log-out me-2'></i> Keluar</a></li>
                      </ul>
                  </div>
              </li>
              @else
              <li class="nav-item d-lg-none me-lg-5">
                  <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login" role="button">Masuk</a>
              </li>
              <li class="nav-item d-lg-none me-lg-5">
                  <a class="nav-link" href="{{ url('register') }}">Daftar</a>
              </li>
              @endif

          </ul>
      </div>

      {{-- This is for desktop --}}
      <div class="btn-group ms-lg-5 me-lg-5 d-none d-lg-flex">
          @if(session('loggedIn') !== null && session('loggedIn'))
            <div class="dropdown">
                <a href="#" class="text-pink dropdown-toggle" role="button" id="userManage" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-user bx-sm"></i></a>

                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="userManage">
                    <li><span class="dropdown-item-text">Hai, user</span></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class='bx bx-user-circle me-2'></i> Akun</a></li>
                    <li><a class="dropdown-item" href="#"><i class='bx bx-heart me-2'></i> Wishlist</a></li>
                    <li><a class="dropdown-item" href="{{ url('logout') }}"><i class='bx bx-log-out me-2'></i> Keluar</a></li>
                </ul>
            </div>
          @else
            <button class="btn btn-pink" data-bs-toggle="modal" data-bs-target="#login">Masuk</button>
            <a href="{{ url('register') }}" class="btn btn-pink">Daftar</a>
          @endif
      </div>

      <a href="#" class="text-pink"><i class="bx bx-shopping-bag bx-sm"></i></a>
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
                  <input type="text" class="form-control" id="userEmail" name="userEmail" placeholder="Email/Username">
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
