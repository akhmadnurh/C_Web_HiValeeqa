// Ini JS Custom
activeNavLink();
newProductLink();

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
function newProductLink() {
    const newProduct = document.getElementById('newProductLink');
    const baseUrl = window.location.origin;
    newProduct.addEventListener('click', function () {
        const currentLink = window.location.href;
        if (currentLink !== baseUrl) {
            window.location.replace(baseUrl + '/#new-product');
        }
    });    
}
