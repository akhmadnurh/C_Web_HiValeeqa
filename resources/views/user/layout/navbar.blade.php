<nav class="navbar py-4 navbar-expand-lg navbar-light bg-light sticky-top"
     id="headerHv">
    <div class="container">
        <button class="navbar-toggler border-0"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand"
           href="{{ url('/') }}"><strong>HI VALEEQA</strong></a>
        <div class="collapse navbar-collapse sticky-top"
             id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"
                id="navList">
                <li class="nav-item me-lg-5">
                    <a class="nav-link"
                       href="{{ url('/') . '/' }}">Home</a>
                </li>
                <li class="nav-item me-lg-5">
                    <a class="nav-link"
                       href="{{ url('shop') }}">Shop</a>
                </li>
                <li class="nav-item me-lg-5">
                    <a class="nav-link"
                       href="{{ url('/') . '#new-product' }}"
                       id="newProductLink">New</a>
                </li>
                <li class="nav-item me-lg-5">
                    <a class="nav-link"
                       href="{{ url('about-us') }}">About Us</a>
                </li>

                {{-- This is for Mobile --}}
                @if (session('loggedIn') !== null && session('loggedIn'))
                    <li class="nav-item d-lg-none me-lg-5">
                        <div class="dropdown">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               role="button"
                               id="userManageMobile"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">{{ session()->get('name') }}</a>

                            <ul class="dropdown-menu dropdown-menu-lg-end mb-4 mb-lg-0"
                                aria-labelledby="userManageMobile">
                                <li><a class="dropdown-item"
                                       href="{{ url('profile') }}"><i class='bx bx-user-circle me-2'></i> Akun</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ url('transaction') }}"><i class='bx bx-receipt me-2'></i> Wishlist</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ url('wishlist') }}"><i class='bx bx-heart me-2'></i> Wishlist</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ url('logout') }}"><i class='bx bx-log-out me-2'></i> Keluar</a></li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="nav-item d-lg-none me-lg-5">
                        <a class="nav-link"
                           href="{{ url('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item d-lg-none me-lg-5">
                        <a class="nav-link"
                           href="{{ url('register') }}">Daftar</a>
                    </li>
                @endif

            </ul>
        </div>

        {{-- This is for desktop --}}
        <div class="btn-group ms-lg-5 me-lg-5 d-none d-lg-flex">
            @if (session('loggedIn') !== null && session('loggedIn'))
                <div class="dropdown">
                    <a href="#"
                       class="text-pink dropdown-toggle"
                       role="button"
                       id="userManage"
                       data-bs-toggle="dropdown"
                       aria-expanded="false"><i class="bx bx-user bx-sm"></i></a>

                    <ul class="dropdown-menu dropdown-menu-lg-end"
                        aria-labelledby="userManage">
                        <li><span class="dropdown-item-text">Hai, {{ session()->get('name') }}</span></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
                               href="{{ url('profile') }}"><i class='bx bx-user-circle me-2'></i> Akun Saya</a></li>
                        <li><a class="dropdown-item"
                               href="{{ url('transaction/payment-pending') }}"><i class='bx bx-receipt me-2'></i>
                                Transaksi Saya</a>
                        </li>
                        <li><a class="dropdown-item"
                               href="{{ url('wishlist') }}"><i class='bx bx-heart me-2'></i> Wishlist</a></li>
                        <li><a class="dropdown-item"
                               href="{{ url('logout') }}"><i class='bx bx-log-out me-2'></i> Keluar</a></li>
                    </ul>
                </div>
            @else
                <a class="btn btn-outline-pink"
                   href="{{ url('login') }}">Masuk</a>
                <a href="{{ url('register') }}"
                   class="btn btn-pink">Daftar</a>
            @endif
        </div>

        <a href="{{ session()->has('loggedIn') ? url('cart') : url('login') }}"
           class="text-pink position-relative">
            <i class="bx bx-shopping-bag bx-sm"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-pink"
                  id="cartBadges">
                {{ session()->has('loggedIn') ? $cart : 0 }}
            </span>
        </a>
    </div>
</nav>


<script>
    activeNavLink();

    // Navbar Link
    function activeNavLink() {
        const currentLink = window.location.href;
        const navLink = document.querySelectorAll('#navList li a');
        for (let i = 0; i < navLink.length; i++) {
            if (navLink[i].href === currentLink) {
                navLink[i].classList.add('active');
            }
        }
    }
</script>
