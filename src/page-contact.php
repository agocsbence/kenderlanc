<?php
/* Template Name: Kapcsolat */
get_header();
?>

<section class="container py-3 single-text-content">
    <h1 class="mb-1"><?php the_title(); ?></h1>
    <div class="grid grid-2 grid-gap-2">
        <div class="text-block">
            <?php the_field('bal_hasab'); ?>
        </div>
        <div class="text-block">
            <?php the_field('jobb_hasab'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>