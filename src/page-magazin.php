<?php

/* Template Name: Magazin */

get_header(); ?>

<div class="container">
    <h1 class="mb-2"><?php the_title(); ?></h1>
    <div class="grid grid--home-tiles">
        <a href="" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/featured.png');">
            <div class="content">
                <div class="content-inside">
                    <h2>Kiemelt cikk</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/tudastar" class="grid-tile bg--color bg--color-green1">
            <div class="content">
                <div class="content-inside">
                    <h2>Tudástár</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>/lexikon" class="grid-tile bg--color bg--color-orange">
            <div class="content">
                <div class="content-inside">
                    <h2>Ipari Kender Lexikon</h2>
                </div>
            </div>
        </a>
        <a href="<?php echo get_home_url(); ?>" class="grid-tile bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/kender.png');">
            <div class="content">
                <div class="content-inside">
                    <h2>Cikkek</h2>
                </div>
            </div>
        </a>
    </div>
</div>

<?php get_footer();