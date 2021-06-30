// Ini JS Custom
activeNavLink();
newProductLink();
transferDate();

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

// Billing
function transferDate() {
    Date.prototype.toDateInputValue = (function() {
        var local = new Date(this);
        local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
        return local.toJSON().slice(0,10);
    });
    document.getElementById('trfDate').value = new Date().toDateInputValue();
}