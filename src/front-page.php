<?php
/*

Template Name: Main Page

*/

get_header();

// include get_theme_file_path( '/includes/landing-slider.php' );
?>

<section id="home-hero">
	<div class="container">
		<h1 class="mb-2">Ha kendered van, mindened van!</h1>
		<div class="grid grid--home-tiles">
			<a href="<?php echo get_home_url(); ?>/termekek" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/nepszeru_termekek.png');">
				<div class="content">
					<div class="content-inside">
						<h2>Termékek</h2>
					</div>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/akademia" class="grid-tile bg--color bg--color-orange">
				<div class="content">
					<div class="content-inside">
						<h2>Tudástár</h2>
					</div>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/szolgaltatasok" class="grid-tile bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/szolgaltatasok.png');">
				<div class="content">
					<div class="content-inside">
						<h2>Szolgáltatások</h2>
					</div>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/magazin" id="grid-extra" class="grid-tile big-tile bg--color-green1 mobile-only">
				<div class="content">
					<div class="content-inside">
						<h2>Magazin</h2>
					</div>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/partnerek" class="grid-tile bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/partnereink.png');">
				<div class="content">
					<div class="content-inside">
						<h2>Partnerek</h2>
					</div>
				</div>
			</a>
			<a href="<?php echo get_home_url(); ?>/lexikon" class="grid-tile bg--color bg--color-green">
				<div class="content">
					<div class="content-inside">
						<h2>Lexikon</h2>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
