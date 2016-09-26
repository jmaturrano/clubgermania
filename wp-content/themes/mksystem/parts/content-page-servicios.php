

<?php
global $items_slider;
?>

<div <?php post_class('row'); ?>>
    <div class="content-page content-page-servicios mksystem-content-bg" style="<?php if($items_slider): echo 'padding: 50px 150px'; endif; ?>">
    	<div style="position: relative;">
	        <div class="content-page-marco" style="<?php if($items_slider): echo 'position: absolute; z-index: 100; top: -150px'; endif; ?>">
	            <div class="col-md-12">
	                <div class="text-justify" style="<?php if($items_slider): echo 'margin-top: 20px'; endif; ?>">
	                    <?php 
	                    	the_content();
	                    ?>
	                </div>
	            </div>
	            <div class="clearfix"></div><!--.clearfix-->
	        </div><!--.content-page-marco-->
	        <div class="clearfix">
	        	<?php 
	        		if($items_slider): 
	        			$variant = get_the_content();
	        			$lines = strlen($variant)/350;
	        			// echo "->".$lines."-".$variant."<-";
	        			$lines = ceil($lines);
	        			// echo "->".$lines."<-";
	        			if($lines > 1){
	        				for ($i=1; $i < $lines; $i++) { 
	        					echo '<br><br><br>';
	        				}//end for
	        			}//end if
	        		endif;
	        	?>
	        </div>
    	</div>
    </div><!--.content-page-->
</div><!--.row-->



 


