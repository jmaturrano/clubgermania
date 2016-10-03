
<div <?php post_class('row'); ?>>
	<div class="content-page content-page-eventos mksystem-content-bg">
		<div class="content-page-marco">
			<div class="col-md-4 col-sm-4 hidden-xs text-center">
                <div class="unique-image mksystem-slider-eventos">

				<?php 
					$query = new WP_Query( array( 'category_name' => 'eventos', 'posts_per_page' => -1) );
					if ($query->have_posts()) :
						$item = 1;
						while ($query->have_posts()) : $query->the_post();
							if ( has_post_thumbnail() && $item <= 3) {
								if($item === 1){
									$class_item = 'item-1';
								}
								if($item === 2){
									$class_item = 'item-2';
								}
								if($item === 3){
									$class_item = 'item-3';
								}
								?>
								<a href="<?= get_permalink($post->ID); ?>" class="mksystem-img-thumbnail text-center <?= $class_item; ?>">
									<?php
										the_post_thumbnail('medium', array('class'=>'img-thumbnail'));
									?>
								</a>
								<?php
								$item++;
			                }//end if
			            endwhile;
			        endif;
				?>

                </div>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
		<?php 
			$query = new WP_Query( array( 'category_name' => 'eventos', 'posts_per_page' => -1) );
			if ($query->have_posts()) :
				$item = 1;
				while ($query->have_posts()) : $query->the_post();
					if ( has_post_thumbnail() ) {
						?>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<a href="<?= get_permalink($post->ID); ?>" class="mksystem-img-thumbnail text-center">
								<?php
									the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail'));
								?>
								<span class="hidden-sm hidden-xs"><?= get_the_title(); ?></span>
							</a>
						</div>
						<?php
						if($item == 3){
						?>
						<div class="clearfix hidden-sm hidden-xs"></div><!--.clearfix-->
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


<script>
	jQuery(document).ready(function(){
		setInterval('cambiar_imagenes()', 9000);
	});

	function cambiar_imagenes(){
		// console.log('change');
		var item = 1;
		var slider_href_1 	= '';
		var slider_img_1	= '';
		var slider_href_2 	= '';
		var slider_img_2	= '';
		var slider_href_3 	= '';
		var slider_img_3	= '';
		jQuery('.mksystem-slider-eventos').find('a').each(function(){
			if(item === 3){
				slider_href_1 	= jQuery(this).attr('href');
				slider_img_1 	= jQuery(this).find('img').attr('src');
			}
			if(item === 1){
				slider_href_2 	= jQuery(this).attr('href');
				slider_img_2 	= jQuery(this).find('img').attr('src');
			}
			if(item === 2){
				slider_href_3 	= jQuery(this).attr('href');
				slider_img_3 	= jQuery(this).find('img').attr('src');
			}
			item++;
		});

		jQuery('.mksystem-slider-eventos').find('.item-1').find('img').fadeOut('slow');
		setTimeout(function(){
			jQuery('.mksystem-slider-eventos').find('.item-1').attr('href', slider_href_1);
			jQuery('.mksystem-slider-eventos').find('.item-1').find('img').attr('src', slider_img_1);
			jQuery('.mksystem-slider-eventos').find('.item-1').find('img').attr('srcset', slider_img_1);
			jQuery('.mksystem-slider-eventos').find('.item-1').find('img').fadeIn('slow');
		}, 500);

		jQuery('.mksystem-slider-eventos').find('.item-2').find('img').fadeOut('slow');
		setTimeout(function(){
			jQuery('.mksystem-slider-eventos').find('.item-2').attr('href', slider_href_2);
			jQuery('.mksystem-slider-eventos').find('.item-2').find('img').attr('src', slider_img_2);
			jQuery('.mksystem-slider-eventos').find('.item-2').find('img').attr('srcset', slider_img_2);
			jQuery('.mksystem-slider-eventos').find('.item-2').find('img').fadeIn('slow');
		}, 500);

		jQuery('.mksystem-slider-eventos').find('.item-3').find('img').fadeOut('slow');
		setTimeout(function(){
			jQuery('.mksystem-slider-eventos').find('.item-3').attr('href', slider_href_3);
			jQuery('.mksystem-slider-eventos').find('.item-3').find('img').attr('src', slider_img_3);
			jQuery('.mksystem-slider-eventos').find('.item-3').find('img').attr('srcset', slider_img_3);
			jQuery('.mksystem-slider-eventos').find('.item-3').find('img').fadeIn('slow');
		}, 500);
	}
</script>
 


