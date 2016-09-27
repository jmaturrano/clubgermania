<?php

/**
 *
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<div id="primary" class="content-area container">

		<?php
			get_template_part( 'parts/error','404' );
    	?>
   
		</div><!-- .content-area -->
	</main><!-- .site-main -->

<?php get_footer(); ?>