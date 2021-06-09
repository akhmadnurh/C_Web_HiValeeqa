<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand text-pink logo h2 mb-0 align-self-center" href="#">
            Hi Valeeqa
        </a>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                    @if(session('loggedIn') !== null && session('loggedIn'))
                            <a href="{{ url('logout') }}" class="btn btn-pink">Logout</a>

                    @else
                        <!-- Login and Register -->
                            <a href="#" class="btn btn-outline-pink me-2" data-bs-toggle="modal" data-bs-target="#masukModal">Masuk</a>
                            <a href="#" class="btn btn-pink">Daftar</a>
                            <!-- Login and Register end -->
                    @endif

            <!-- User has logged in -->
                    <!-- <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a> -->
                    <!-- User has logged in end -->


            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->

<!-- Modal Search -->
<div class="modal fade" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0 d-inline">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-pink text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Modal Search End -->

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
