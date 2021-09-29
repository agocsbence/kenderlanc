<?php

/* Template Name: Akadémia */

get_header(); ?>

<section class="container py-3">
    <h1 class="mb-1">Akadémia</h1>
    <div class="filter-wrapper mb-2" id="productFilter">
        <div class="filter-header" id="toggleFilter">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/filter.svg" alt="Szűrés">
        </div>
        <form action="">
            <div class="filter-content">
                <div class="filter">
                    <label for="item-1">Item 1</label>
                    <input type="checkbox" name="item-1" id="" value="item-1">
                </div>
                <div class="filter">
                    <label for="item-1">Item 1</label>
                    <input type="checkbox" name="item-1" id="" value="item-1">
                </div>
                <div class="filter">
                    <label for="item-1">Item 1</label>
                    <input type="checkbox" name="item-1" id="" value="item-1">
                </div>
                <div class="filter">
                    <label for="item-1">Item 1</label>
                    <input type="checkbox" name="item-1" id="" value="item-1">
                </div>
            </div>
        </form>
    </div>
    <div class="accordion-wrapper">

        <!-- loop here -->
        <h2>tagek:</h2>
        <?php
        $args = array(
            'type' => get_post_type(),
            'orderby' => 'name',
            'order' => 'ASC'
        );
        $tags = get_tags($args);
        
        foreach($tags as $tag) { 
            var_dump($tag->name);
        }
        
        echo "<hr>";
        
        $loop = new WP_Query( array( 'post_type' => 'akademia_cikkek', 'tag' => 'current', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="pindex">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div class="pimage">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                    <?php } ?>
                    <div class="ptitle">
                        <h2><?php echo get_the_title(); ?></h2>
                    </div>
                </div>
            <?php endwhile;
            if (  $loop->max_num_pages > 1 ) : ?>
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
                    <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
                </div>
            <?php endif;
        endif;
        wp_reset_postdata();
    ?>

        <div class="accordion">
            <div class="accordion-header">
                <h1>Életvirág szappan</h1>
                <div class="accordion-arrow">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/icons/accordion.svg" alt="Megtekint">
                </div>
            </div>
            <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam!</p>
                <p><strong>vilhemp.com</strong></p>
            </div>
        </div>

        <!-- end of loop -->

        <div class="accordion">
            <div class="accordion-header">
                <h1>Életvirág szappan</h1>
                <div class="accordion-arrow">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/icons/accordion.svg" alt="Megtekint">
                </div>
            </div>
            <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam!</p>
                <p><strong>vilhemp.com</strong></p>
            </div>
        </div>
        <div class="accordion">
            <div class="accordion-header">
                <h1>Életvirág szappan</h1>
                <div class="accordion-arrow">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/icons/accordion.svg" alt="Megtekint">
                </div>
            </div>
            <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nobis excepturi, et beatae omnis, eligendi aliquid, neque obcaecati aliquam est blanditiis molestiae atque nihil quos quod error quisquam voluptas eius nam!</p>
                <p><strong>vilhemp.com</strong></p>
            </div>
        </div>
    </div>
</section>

<script src="<?php bloginfo('template_url') ?>/assets/js/filter.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/accordion.js"></script>

<?php get_footer();