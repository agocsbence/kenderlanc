<?php
add_theme_support( 'post-thumbnails' );

// REGISTER MENU AREAS
function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu', 'kenderlanc' ));
}
add_action( 'init', 'register_header_menu' );
function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu', 'kenderlanc' ));
}
add_action( 'init', 'register_footer_menu' );

// COUNT POST VIEWS
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

//WOOCOMMERCE
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title');
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5 );