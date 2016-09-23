
<div <?php post_class('row'); ?>>
	<div class="content-page content-page-historia mksystem-content-bg">
		<div class="content-page-marco">
		<?php 
			$query = new WP_Query( array( 'cat' => 'historia_club', 'posts_per_page' => -1) );
			if ($query->have_posts()) :
				$item = 1;
				while ($query->have_posts()) : $query->the_post();
					if ( has_post_thumbnail() ) {
						?>
						<div class="col-md-2 col-sm-3 col-xs-4">
							<a href="<?= get_permalink($post->ID); ?>" class="mksystem-img-thumbnail text-center">
								<?php
									the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail'));
								?>
								<span><?= get_the_title(); ?></span>
							</a>
						</div>
						<?php
						if($item == 6){
						?>
						<div class="clearfix"></div><!--.clearfix-->
						<?php
							$item = 0;
						}//end if
						$item++;
	                }//end if
	            endwhile;
	        endif;
		?>
			<div class="clearfix"></div><!--.clearfix-->
			<hr>
			<div class="col-md-12 text-justify">
				<?php the_content(); ?>
			</div>
		</div><!--.content-page-marco-->
	</div><!--.content-page-->
</div><!--.row-->
    
 


