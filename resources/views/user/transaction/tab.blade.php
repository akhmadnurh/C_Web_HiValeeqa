<section class="tabTrans mb-5">
    <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link"
               href="{{ url('/transaction/payment-pending') }}">Belum Bayar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="{{ url('/transaction/shipment-pending') }}">Dikemas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="{{  url('/transaction/shipment-process') }}">Dikirim</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="{{ url('/transaction/order-completed') }}">Selesai</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               href="{{ url('/transaction/order-canceled') }}">Gagal</a>
        </li>
    </ul>
</section>

<script>
    const currentLinkTab = window.location.href;
    const tabLink = document.querySelectorAll('li.nav-item a');

    for (const i of tabLink) {
        if (i.href == currentLinkTab) {
            i.classList.add("active");
        }
    }
</script>
