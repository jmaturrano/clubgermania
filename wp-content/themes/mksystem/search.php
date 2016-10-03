<?php
/**
 * Template Name: Pagina Search
 *
 * @package Mksystem
 */

get_header(); ?>


	<main id="main" class="site-main" role="main">
		<div id="primary" class="content-area container">

				<?php if ( have_posts() ) : ?>

				<?php 

					if($_GET['search_text'] && !empty($_GET['search_text'])){
						$text = $_GET['search_text'];
					}

				?>
				<div <?php post_class('row'); ?>>
				    <div class="content-page content-search mksystem-content-bg">
				        <div class="content-page-marco">

				        	<div class="col-md-12">
								<h2 class="page_title"><?php the_title(); ?></h2>
				        	</div>
							
							<div class="col-md-12">
								<form action="<?php echo esc_url( home_url( '/buscar' ) ); ?>" method="get">
									<input type="text" name="search_text" value="<?= isset($text)?$text:''; ?>" placeholder="Buscar...">
									<button type="submit" name="">Buscar</button>
									<br><br>
								</form>
							</div>


							<?php
								if(isset($text)):
									$args = array(
											'post_type' 	=> 'page',
											'post_per_page' => -1,
											's' 			=> $text,
											//'meta_key' 		=> $text
										);
									$query = new WP_Query($args);

									if($query->posts):
										foreach ($query->posts as $post):
											get_template_part( 'parts/content', 'search' );
										endforeach;
										wp_reset_query();
									endif;
								endif;
							?>

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
