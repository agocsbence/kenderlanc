<?php

/* Template Name: Szolgáltatások */

get_header(); ?>
<?php
    wp_reset_postdata();
    $services_query = new WP_Query(array(
        'post_type' => 'szolgaltatas',
    ));
?>
    <?php if ($services_query->have_posts()) { ?>

        <div class="services-grid grid grid-3">
            <?php while ($services_query->have_posts()) { ?>
                <?php $services_query->the_post(); 
                the_title();
            } ?>
        </div>

    <?php wp_reset_postdata(); ?>

    <?php } ?>

<?php get_footer();