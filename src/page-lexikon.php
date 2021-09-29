<?php

/* Template Name: Lexikon */

get_header(); ?>

<div class="container">
    <h1 class="mb-2">Ipari Kender Lexikon</h1>
    <div class="lexikon-wrapper">
        <div class="lexikon-alphabet">
            <div class="alphabet-letters">
                <a href="#a">A</a>
                <a href="#b">B</a>
                <a href="#c">C</a>
                <a href="#d">D</a>
                <a href="#e">E</a>
                <a href="#f">F</a>
                <a href="#g">G</a>
            </div>
        </div>
        <div class="lexikon">
            <div class="letter">
                <h2 id="a">A</h2>
                
                <?php $query = new WP_Query( 'cat=28' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="b">B</h2>

                <?php $query = new WP_Query( 'cat=29' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="c">C</h2>
                
                <?php $query = new WP_Query( 'cat=30' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="d">D</h2>
                
                <?php $query = new WP_Query( 'cat=31' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="e">E</h2>
                
                <?php $query = new WP_Query( 'cat=32' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="f">F</h2>
                
                <?php $query = new WP_Query( 'cat=33' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();