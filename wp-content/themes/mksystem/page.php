<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Mksystem
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<div id="primary" class="content-area container">

		<?php
		// Start the loop.
	    if (have_posts()) {
	        while (have_posts()) {
	            the_post();
	            get_template_part( 'parts/content', 'page');
	        }
	    } else {
	            get_template_part( 'parts/error', 'no_results');
	    }
    	?>
   
		</div><!-- .content-area -->
	</main><!-- .site-main -->

<?php get_footer(); ?>
