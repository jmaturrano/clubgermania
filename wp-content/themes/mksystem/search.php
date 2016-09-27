<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package mksystem
 */

get_header(); ?>


	<main id="main" class="site-main" role="main">
		<div id="primary" class="content-area container">

				<?php if ( have_posts() ) : ?>

				<div <?php post_class('row'); ?>>
				    <div class="content-page content-search mksystem-content-bg">
				        <div class="content-page-marco">
				            <div class="col-md-12">
								<div class="col-md-6 search-custom">
									<?php get_search_form(); ?>
								</div>
							</div><!--.col-md-12-->

							<div class="clearfix"></div><!--.clearfix-->
							
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'parts/content', 'search' ); ?>
							<?php endwhile; ?>

				            <div class="clearfix"></div><!--.clearfix-->
				        </div><!--.content-page-marco-->
				    </div><!--.content-page-->
				</div><!--.row-->

				<?php else : ?>

					<?php get_template_part( 'parts/error', 'no_results'); ?>

				<?php endif; ?>

		</div><!-- .content-area -->
	</main><!-- .site-main -->

<?php get_footer(); ?>
