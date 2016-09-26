
<div <?php post_class('row'); ?>>
	<div class="content-page content-page-eventos mksystem-content-bg">
		<div class="content-page-marco">
			<div class="col-md-4">
				<p>jmaturrano</p>
			</div>
			<div class="col-md-8">
		<?php 
			$query = new WP_Query( array( 'category_name' => 'eventos', 'posts_per_page' => -1) );
			if ($query->have_posts()) :
				$item = 1;
				while ($query->have_posts()) : $query->the_post();
					if ( has_post_thumbnail() ) {
						?>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<a href="<?= get_permalink($post->ID); ?>" class="mksystem-img-thumbnail text-center">
								<?php
									the_post_thumbnail('medium', array('class'=>'img-thumbnail'));
								?>
								<span><?= get_the_title(); ?></span>
							</a>
						</div>
						<?php
						if($item == 3){
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
			</div><!--.col-md-8-->
			<div class="clearfix"></div><!--.clearfix-->
			<hr>
			<div class="col-md-12 text-justify">
				<?php the_content(); ?>
			</div>
		</div><!--.content-page-marco-->
	</div><!--.content-page-->
</div><!--.row-->
    
 


