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
// //toggle menu opening
// var mobileMenuToggle = document.querySelector('#mobileMenuToggler');
// var mobileMenuClose = document.querySelector('#mobileMenuClose');
// var navbar = document.querySelector('#navbar');

// mobileMenuToggle.addEventListener('click', function() {
//     navbar.classList.add('opened');
// });
// mobileMenuClose.addEventListener('click', function() {
//     navbar.classList.remove('opened');
// });

// //show/hide navbar on scroll back
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//     var currentScrollPos = window.pageYOffset;
//     if (prevScrollpos > currentScrollPos) {
//         document.getElementById("navbar").style.top = "0";
//     } else {
//         document.getElementById("navbar").style.top = "-9rem";
//     }
//     prevScrollpos = currentScrollPos;
// }
//toggle menu opening
var mobileMenuToggle = document.querySelector('#mobileMenuToggler');
var mobileMenuClose = document.querySelector('#mobileMenuClose');
var desktopMenuToggle = document.querySelector('#desktopMenuToggler');
var desktopMenuClose = document.querySelector('#desktopMenuClose');
var navbar = document.querySelector('#navbar');

mobileMenuToggle.addEventListener('click', function() {
    navbar.classList.add('opened');
});
mobileMenuClose.addEventListener('click', function() {
    navbar.classList.remove('opened');
});
desktopMenuToggle.addEventListener('click', function() {
    navbar.classList.add('opened');
});
desktopMenuClose.addEventListener('click', function() {
    navbar.classList.remove('opened');
});

//show/hide navbar on scroll back
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//     var currentScrollPos = window.pageYOffset;
//     if (prevScrollpos > currentScrollPos) {
//         document.getElementById("header").style.top = "0";
//     } else {
//         document.getElementById("header").style.top = "-9rem";
//     }
//     prevScrollpos = currentScrollPos;
// }