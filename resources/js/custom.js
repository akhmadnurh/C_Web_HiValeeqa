// Ini JS Custom

// Navbar
window.onscroll = function () {
    const nav = document.getElementById('headerHv');
    if (this.scrollY >= 200) {
        nav.classList.add('scroll-header');
        nav.classList.remove('bg-light');
    } else {
        nav.classList.add('bg-light');
        nav.classList.remove('scroll-heder');
    }
}