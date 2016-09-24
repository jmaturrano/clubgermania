<?php

/**
 * Template Name: Pagina servicios
 *
 * This is the template that displays full width page without sidebar
 *
 * @package Mksystem
 */

get_header(); ?>


<?php

	get_template_part( 'parts/frontpage','slider-serviciosfull');
?>

	<main class="site-main" role="main">
		<div id="primary" class="content-area container">

		<?php
		// Start the loop.
	    if (have_posts()) {

	        while (have_posts()) {
	            the_post();
	            get_template_part( 'parts/content', 'page-servicios');
	        }
	    } else {
	            get_template_part( 'parts/error', 'no_results');
	    }
    	?>
   
		</div><!-- .content-area -->
	</main><!-- .site-main -->

<?php get_footer(); ?>