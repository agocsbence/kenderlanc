<?php get_header(); ?>

<section class="container py-3">
    <h1 class="mb-1">Keresés</h1>
</section>

<?php if(isset($_GET['post_type'])) {
    $type = $_GET['post_type'];
    var_dump($type);
    if($type == 'post') {
        echo '<h1>Bejegyzések a találatban</h1>';
    } elseif($type == 'product') {
        // load_template(TEMPLATEPATH . '/knowledge-search.php'); ?>
        <div class="container grid grid-4">
            <h1>Termékek</h1>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php global $product; ?>
                <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                    <?php echo woocommerce_get_product_thumbnail(); ?>
                    <h2 class="product-name"><?php echo get_the_title(); ?></h2>
                    <p class="product-price"><?php $product->get_price(); ?></p>
                </a>
            <?php endwhile; ?>
        </div>    
    <? } else { ?>
        <div class="container grid grid-4">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php global $product; ?>
                <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                    <?php echo woocommerce_get_product_thumbnail(); ?>
                    <h2 class="product-name"><?php echo get_the_title(); ?></h2>
                    <p class="product-price"><?php $product->get_price(); ?></p>
                </a>
            <?php endwhile; ?>
        </div>
    <?php }
} else { ?>
	<div class="container grid grid-4">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php global $product; ?>
            <a href="<?php echo get_permalink(); ?>" class="product-tile mb-1">
                <?php echo woocommerce_get_product_thumbnail(); ?>
                <h2 class="product-name"><?php echo get_the_title(); ?></h2>
                <p class="product-price"><?php $product->get_price(); ?></p>
            </a>
        <?php endwhile; ?>
    </div>
<?php } ?>

<?php get_footer(); ?>
