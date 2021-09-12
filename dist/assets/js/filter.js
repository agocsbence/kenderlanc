var filter = document.querySelector('#productFilter');
var toggle = document.querySelector('#toggleFilter');

toggle.addEventListener('click', function() {
    filter.classList.toggle('opened');
});