var mobileMenuToggle = document.querySelector('#mobileMenuToggler');
var mobileMenuClose = document.querySelector('#mobileMenuClose');
var navbar = document.querySelector('#navbar');

mobileMenuToggle.addEventListener('click', function() {
    navbar.classList.add('opened');
});
mobileMenuClose.addEventListener('click', function() {
    navbar.classList.remove('opened');
});