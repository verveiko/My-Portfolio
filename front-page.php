<?php
/**
 * Front Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
            <div class="about-me">
            <img src="https://verveiko.com/wp-content/uploads/2017/10/33875293806_49c0613806_o-e1507309291381.jpg" alt="Eugene Verveiko's Portfolio">
            <h1>Web Designer / Front End Developer</h1>
            <h3>I build great things for amazing clients!</h3></div>
            
            
            
            <div class="skills">
            
            <h1>Things I use</h1>
            <p>I love designing cohesive web and mobile interfaces that bring together simplicity, functionality and engaging user experiences.</p>
            <i class="devicon-html5-plain-wordmark"></i>
            <i class="devicon-css3-plain-wordmark"></i>
            <i class="devicon-sass-original"></i>
            <i class="devicon-jquery-plain-wordmark"></i>
            <i class="devicon-wordpress-plain-wordmark"></i>
            <i class="devicon-git-plain"></i>
            <i class="devicon-bootstrap-plain-wordmark"></i>
            <i class="devicon-gulp-plain"></i>
            <i class="devicon-php-plain"></i>
            </div>
            
            <div class="work">
            <h1>Current Projects</h1>
            <div class="projects">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('projects', 'option') ):

                // loop through the rows of data
                while ( have_rows('projects', 'option') ) : the_row();
                ?>

                    <div class="piece">
                    <h2><?php the_sub_field('title'); ?></h2>
                    <img src="<?php the_sub_field('image'); ?>">
                    <p><?php  the_sub_field('text'); ?></p>
                    <a target="_blank" href="<?php the_sub_field('code_url'); ?>">GitHub Code</a>
                    <a target="_blank" href="<?php the_sub_field('live_url'); ?>">Live</a>
                    </div>
                    
                <?php
                endwhile;

            else :

                // no rows found

            endif;

            ?>
            </div>
            
            
            </div>
        
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
