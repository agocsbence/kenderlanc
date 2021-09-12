<?php
/*

Template Name: Main Page

*/

get_header();

// include get_theme_file_path( '/includes/landing-slider.php' );
?>

<section id="home-hero">
	<div class="container">
		<h1>Magyar ipari kender a hétköznapokra.</h1>
		<div class="grid grid--home-tiles">
			<a href="" class="grid-tile big-tile title-top bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/szolgaltatasok.png');">
				<h2>Szolgáltatások</h2>
			</a>
			<a href="" class="grid-tile bg--color bg--color-orange">
				<h2>Tudástár</h2>
			</a>
			<a href="" class="grid-tile bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/nepszeru_termekek.png');">
				<h2>Népszerű Termékek</h2>
			</a>
			<a href="" id="grid-extra" class="grid-tile big-tile text-dark">
				<img src="<?php bloginfo('template_url') ?>/assets/img/extra_tartalmak.svg" alt="Extra tartalmak">
				<h2>Extra tartalmak</h2>
			</a>
			<a href="" class="grid-tile bg--image" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/partnereink.png');">
				<h2>Partnereink</h2>
			</a>
			<a href="" class="grid-tile bg--color bg--color-green">
				<h2>Lexikon</h2>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
