<?php

/**
 * Template Name: Pagina Presidenta
 *
 * This is the template that displays full width page without sidebar
 *
 * @package Mksystem
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
	    if (have_posts()) {

	        while (have_posts()) {
	            the_post();
	            get_template_part( 'parts/content', 'page-presidenta');
	        }
	    } else {
	            get_template_part( 'parts/error', 'no_results');
	    }
    	?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
