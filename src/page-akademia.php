<?php

/* Template Name: Akadémia */

get_header(); ?>

<section class="container py-3">
    <h1 class="mb-1">Akadémia</h1>
    <div class="filter-wrapper mb-2" id="productFilter">
        <div class="filter-header" id="toggleFilter">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/filter.svg" alt="Szűrés">
        </div>

        <?php $tags = get_tags(array( 'hide_empty' => false ));?>

        <form action="">
            <div class="filter-content">
                <?php 
                foreach ($tags as $tag) { ?>
                    <div class="filter">
                        <label for="<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></label>
                        <input type="checkbox" name="<?php echo $tag->slug; ?>" id="" value="<?php echo $tag->slug; ?>">
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
    <div class="accordion-wrapper">

        <!-- loop here -->
        <?php
        
        $loop = new WP_Query( array( 'post_type' => 'akademia_cikkek' ) );
        
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
            $id = get_the_ID();
            $tags = wp_get_post_tags($id);?>
                <div class="accordion
                    <?php //add specified classes for filtering
                    echo 'akademia-id-'.$id.' ';
                    foreach ( $tags as $tag ) {
                        echo $tag->slug.' ';
                    } 
                    ?>">
                    <div class="accordion-header">
                        <h1><?php the_title(); ?></h1>
                        <div class="accordion-arrow">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/accordion.svg" alt="Megtekint">
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php 
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <!-- end of loop -->
    </div>
</section>

<script src="<?php bloginfo('template_url') ?>/assets/js/filter.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/accordion.js"></script>

<?php get_footer();