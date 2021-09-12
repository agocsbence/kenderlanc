<?php get_header(); setPostViews(get_the_ID()); $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_display_name) : get_userdata(intval($author)); ?>

<div class="single-post-page-header-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>

<main class="grid grid-2-1 container single-post-content">
	<div class="post-content current-post-content">
		<div class="">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<!-- #post-wrapper (Ajax Load More target div) -->
			<div class="post-wrapper" id="post">	
			
				<div class="article-header">
					<h1><?php the_title();?></h1>
					<?php $author = get_the_author_meta( 'ID' ); ?>
					<div class="flex horizontal space-between v-bottom">
						<div class="meta">
							<div class="avatar">
								<img src="<?php print get_avatar_url($author, ['size' => '150']); ?>" alt="">
							</div>
							<div class="text-meta">
								<span class="date"><?php echo get_the_date(); ?></span>
								<span class="author"><?php the_author_posts_link(); ?></span>
								<span class="category"><?php echo the_category(' '); ?></span>
							</div>
						</div>
						<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
					</div>
				</div>
				
				<div class="adzone adzone-300 adzone-sticky mobile-only">
					<div id="igazino_cikk_mobil_sticky"></div>
				</div>
				
				<div class="article-content">
            
					<div id="single-content">
						<?php the_content();?> 
					</div>

					<?php if ( get_the_ID() === 6069 ) {
						//do not insert ad zones
						echo 'It is 6096';
					} else { ?>
						<div class="adzone adzone-300 mobile-only">
							<div id="igazino_cikk_mobil_4"></div>
						</div>
						<div class="adzone adzone-640 desktop-only">
							<div id="igazino_cikk_pc_640_2_cikk_alatt"></div>
						</div>

						<!-- <script type="application/bannerData" id="adData">

							{
								"url" : "<?php // echo $_SERVER["REQUEST_URI"] ?>",
								"uid" : "<?php // echo get_the_ID(); ?>",
								"pageType" : "article",
								"keywords" : [""],
								"category" : "<?php // the_category(' '); ?>",
								"adult" : 0,
								"gSens" : 0,
								"extraData" : []
							}

						</script>
						<script type="text/javascript" src="https://bbcdn.go.cz.bbelements.com/creatives/cdn12653/b10/132/95/b1013295/extra/adme-core-async-general.min.js"></script> -->
					<?php } ?>
				</div>
				
			</div>
			<!-- End #post-wrapper -->

			<script async src="//related.hu/js/v2/widget.js"></script>
			<div class="rltdwidget" data-widget-id="1139286"></div>


			<div class="flex horizontal space-between v-top" style="margin-top: 2rem;">
				<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
				<div class="post-author" id="postAuthor">
					<div class="meta">
						<p class="author"><?php the_author_posts_link(); ?></p>
						<!-- <p class="date"><?php //echo get_the_date(); ?></p> -->
					</div>
					<div class="avatar">
						<img src="<?php print get_avatar_url($author, ['size' => '150']); ?>" alt="">
					</div>
				</div>
			</div>

			<script type="text/javascript">
			//WATCH FOR READING
			var time = 0;
			window.setInterval(() => { //count seconds
				time++;
				if (time == 30) { //time is 30sec
					fbq('track', 'startRead');
				}
			}, 1000);	
			
			var observer = new IntersectionObserver(function(entries) {
				if(entries[0].isIntersecting === true)
					if (time >= 30) { //element is visible and time is over 30sec
						fbq('track', 'finishRead');
					}
			}, { threshold: [1] });

			observer.observe(document.querySelector("#postAuthor")); //observe #postAuthor element if is on screen
			</script>

			<div class="related-posts">
			<?php
				wp_reset_postdata();
				$related_query = new WP_Query(array(
					'post_type' => 'post',
					'category__in' => wp_get_post_categories(get_the_ID()),
					'post__not_in' => array(get_the_ID()),
					'posts_per_page' => 3,
					'orderby' => 'date',
				));
			?>
				<?php if ($related_query->have_posts()) { ?>

					<div class="related-posts-grid grid grid-3">
						<?php while ($related_query->have_posts()) { ?>
							<?php $related_query->the_post(); 
							include get_theme_file_path( '/includes/article.php' );
						} ?>
					</div>

				<?php wp_reset_postdata(); ?>

				<?php } ?>

			</div>
			<!-- <div id="advertBar">
				<div style="background: tomato; padding: 60px 20px"><h1>Hirdetési zóna<h1></div>
			</div> -->

			<hr style="margin-bottom: 4rem;">
			
			<?php 
			// Ajax Load More shortcode
			// echo do_shortcode('[ajax_load_more container_type="div" single_post="true" single_post_id="'.get_the_ID().'" single_post_order="latest" single_post_target="#post" post_type="post" posts_per_page="1" button_label="Következő cikk" button_loading_label="Folyamatban..." button_done_label="Nincs több cikk :)" no_results_text="Sorry, nothing found in this query" pause_override="true"  scroll_distance="50%"]'); ?>
			
			<?php endwhile; endif; ?>
        
		</div>
	</div>
	
	<?php get_sidebar(); ?>

</main>

<?php get_footer();
