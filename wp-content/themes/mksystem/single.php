<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Mksystem
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<div id="primary" class="content-area container">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'parts/content', 'single' ); ?>
		<?php endwhile; // end of the loop. ?>
   
		</div><!-- .content-area -->
	</main><!-- .site-main -->

<?php get_footer(); ?>
