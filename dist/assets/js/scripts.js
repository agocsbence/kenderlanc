var accordionToggle = document.getElementsByClassName('accordion-header');
var i;

for (i = 0; i < accordionToggle.length; i++) {
    accordionToggle[i].addEventListener('click', function() {
        this.classList.toggle('opened');
    });
}
var filter = document.querySelector('#productFilter');
var toggle = document.querySelector('#toggleFilter');

toggle.addEventListener('click', function() {
    filter.classList.toggle('opened');
});
var mobileMenuToggle = document.querySelector('#mobileMenuToggler');
var mobileMenuClose = document.querySelector('#mobileMenuClose');
var navbar = document.querySelector('#navbar');

mobileMenuToggle.addEventListener('click', function() {
    navbar.classList.add('opened');
});
mobileMenuClose.addEventListener('click', function() {
    navbar.classList.remove('opened');
});