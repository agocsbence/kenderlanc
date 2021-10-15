<?php

/* Template Name: Szolgáltatások */

get_header(); ?>

<div class="container">
    <h1 class="mb-2"><?php the_title(); ?></h1>
    <div class="grid grid--home-tiles">
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/vetomag-termesztes" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/vetomag.png');">
            <div class="content">
                <div class="content-inside">
                    <h2>Vetőmag termesztés</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/jogsegely" id="jogsegely" class="grid-tile bg--color bg--color-red">
            <div class="content">
                <div class="content-inside">
                    <h2>Jogsegély</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/magtol-a-termekig" class="grid-tile bg--color bg--color-green">
            <div class="content">
                <div class="content-inside">
                    <h2>Magtól a termékig</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/oktatas" class="grid-tile bg--color bg--color-green1">
            <div class="content">
                <div class="content-inside">
                    <h2>Oktatás</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/forgalmazas" class="grid-tile bg--color bg--color-orange">
            <div class="content">
                <div class="content-inside">
                    <h2>Forgalmazás</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/szolgaltatas/rendezveny" class="grid-tile bg--color bg--color-green">
            <div class="content">
                <div class="content-inside">
                    <h2>Rendezvény</h2>
                </div>
            </div>
        </a>
    </div>
</div>

<?php get_footer();