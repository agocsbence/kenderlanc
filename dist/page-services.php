<?php

/* Template Name: Szolgáltatások */

get_header(); ?>

<div class="container">
    <h1 class="mb-2">Szolgáltatások</h1>
    <div class="grid grid--home-tiles">
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/vetomag-termesztes" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/vetomag.png');">
            <h2>Vetőmag termesztés</h2>
        </a>
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/jogsegely" id="jogsegely" class="grid-tile bg--color bg--color-red">
            <h2>Jogsegély</h2>
        </a>
        <a href="/termekek" class="grid-tile bg--color bg--color-green">
            <h2>Magtól a termékig</h2>
        </a>
        <a href="" class="grid-tile bg--color bg--color-green1">
            <h2>Oktatás</h2>
        </a>
        <a href="" class="grid-tile bg--color bg--color-orange">
            <h2>Forgalmazás</h2>
        </a>
        <a href="" class="grid-tile bg--color bg--color-green">
            <h2>Rendezvény</h2>
        </a>
    </div>
</div>

<?php get_footer();