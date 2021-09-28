<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

<section class="container py-3">
    <h1 class="page-title mb-1"><?php printf( __( 'Keresés: %s', 'kenderlanc' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</section>

<section id="primary" class="content-area">
    <div id="content" class="site-content grid grid-4" role="main">

    <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                <?php echo woocommerce_get_product_thumbnail(); ?>
                <h2 class="product-name"><?php echo get_the_title(); ?></h2>
            </a>

        <?php endwhile; ?>

    <?php else : ?>

        <h1>A keresés nem hozott eredményt :(</h1>

    <?php endif; ?>

    </div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_footer(); ?>