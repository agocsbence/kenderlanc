<?php get_header(); ?>

<div class="container">
    <h1 class="mb-2"><?php the_title(); ?></h1>
    <div class="grid grid-2 grid-gap-2">
        <div class="text-block">
            <?php the_content(); ?>
        </div>
        <div class="text-block form-block">
            <?php $form = get_field('form'); ?>
            <?php echo do_shortcode($form); ?>
        </div>
    </div>
</div>

<?php get_footer();