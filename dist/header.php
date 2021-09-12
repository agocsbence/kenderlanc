<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <?php wp_head(); ?>
    
    <title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/assets/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url') ?>/assets/icon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url') ?>/assets/icon/safari-pinned-tab.svg" color="#f2f2f2">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url') ?>/assets/icon/mstile-144x144.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
</head>

<body <?php body_class(); ?>>

    <header class="grid header-grid" id="header">
        <div class="header-logo">
            <img src="<?php get_template_directory() ?>/assets/img/logo.svg" alt="Kenderlánc">
        </div>
        <div class="header-icons">
            <div class="header-icon"><img src="<?php get_template_directory() ?>/assets/img/icons/profile.svg" alt="Profil"></div>
            <div class="header-icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/cart.svg" alt="Kosár"></div>
            <div class="header-icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/heart.svg" alt="Kedvencek"></div>
            <div id="mobileMenuToggler" class="header-icon mobile-only menu-toggler"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/menu.svg" alt="Menü"></div>
        </div>
        <div id="desktopMenuToggler" class="header-menu desktop-only menu-toggler">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/menu.svg" alt="Menü">
        </div>
        <div class="header-search">
            <input type="text" name="s" id="searchInput">
        </div>
    </header>
    <div class="navbar" id="navbar">
        <div class="nav-header grid header-grid">
            <div class="header-logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Kenderlánc"></a>
            </div>
            <div class="header-icons">
                <div id="mobileMenuClose" class="header-icon mobile-only menu-toggler"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/close.svg" alt="Bezár"></div>
            </div>
        </div>
        <nav>
            <a href="" class="nav-item">Termékek</a>
            <a href="" class="nav-item">Szolgáltatások</a>
            <a href="" class="nav-item">Magazin</a>
        </nav>
        <div class="sub-menu">
            <a href="">Partnerek</a>
            <a href="">Rólunk</a>
            <a href="">Kapcsolat</a>
            <a href="">Nagyker</a>
            <a href="">Ügyfélszolgálat</a>
        </div>
    </div>
    <main>