<div class="col-lg-2">

    {{-- Username --}}
    <div class="d-flex flex-row">
        <div class="me-2">
            <div class="img-user-side">
                <img src="{{ asset('img/users/default.png')}}" alt="username">
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="fw-bold">Username</div>
            <a href="#" class="text-secondary d-flex align-items-center">
                <i class='bx bxs-pencil me-1' ></i>
                <span>Ubah Profile</span>
            </a>
        </div>
    </div>
    {{-- username end --}}

    <hr class="bg-secondary">

    <ul class="list-unstyled" id="sidebarMyAcc">

        {{-- Akun saya --}}
        <li>
            <a href="#myAccount" class="d-flex align-items-center fw-600" data-bs-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="myAccount">
                <i class='bx bxs-user bx-sm me-2'></i>
                Akun Saya
            </a>
        </li>
        <div class="collapse" id="myAccount">
            <ul class="list-unstyled ms-5">
                <li><a href="/profile">Profil</a></li>
                <li><a href="/address">Alamat</a></li>
                <li><a href="/change-password">Ubah Password</a></li>
            </ul>
        </div>
        {{-- akun saya end --}}

        {{-- history transaksi --}}
        <li>
            <a href="/transaction" class="d-flex align-items-center fw-600">
                <i class='bx bxs-receipt bx-sm me-2'></i>
                Transaksi Saya
            </a>
        </li>
        
        {{-- wishlist --}}
        <li>
            <a href="/wishlist" class="d-flex align-items-center fw-600">
                <i class='bx bxs-heart bx-sm me-2'></i>
                Wishlist
            </a>
        </li>
        {{-- wishlist end --}}

    </ul>

</div>

<script>
    const currentLink = window.location.href;
    const sidebarLink = document.querySelectorAll('#sidebarMyAcc li a');
    const myAccountLink = document.querySelectorAll('#myAccount ul li a');
    const myAccount = document.querySelector('#myAccount');

    for (const i of sidebarLink) {
        if (i.href == currentLink) {
            i.classList.add("active");
        }
    }

    for (const i of myAccountLink) {
        if (i.href == currentLink) {
            myAccount.classList.add('show')
        }
    }
</script>