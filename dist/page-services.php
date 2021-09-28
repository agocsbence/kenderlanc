<?php

/* Template Name: Szolgáltatások */

get_header(); ?>

<div class="grid grid--home-tiles">
    <a href="" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/szolgaltatasok.png');">
        <h2>Vetőmag termesztés</h2>
    </a>
    <a href="" id="jogsegely" class="grid-tile bg--color bg--color-red">
        <h2>Jogsegély</h2>
    </a>
    <a href="/termekek" class="grid-tile bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/nepszeru_termekek.png');">
        <h2>Magtól a termékig</h2>
    </a>
    <a href="" class="grid-tile bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/partnereink.png');">
        <h2>Oktatás</h2>
    </a>
    <a href="" class="grid-tile bg--color bg--color-green">
        <h2>Forgalmazás</h2>
    </a>
    <a href="" class="grid-tile bg--color bg--color-orange">
        <h2>Rendezvény</h2>
    </a>
</div>

<?php get_footer();