<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

<section class="container py-3">
    <h1 class="mb-1">Keresés</h1>
</section>

<section id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title"><?php printf( __( 'Keresés: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php global $product; ?>
            <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                <?php echo woocommerce_get_product_thumbnail(); ?>
                <h2 class="product-name"><?php echo get_the_title(); ?></h2>
                <p class="product-price"><?php $product->get_price(); ?></p>
            </a>

        <?php endwhile; ?>

    <?php else : ?>

        <h1>A keresés nem hozott eredményt :(</h1>

    <?php endif; ?>

    </div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_footer(); ?>