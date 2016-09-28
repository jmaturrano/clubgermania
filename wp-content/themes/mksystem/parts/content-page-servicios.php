

<?php
global $items_slider;
?>

<?php if($items_slider): $class_servicios = 'class_servicios'; else: $class_servicios = ''; endif; ?>

<div <?php post_class('row '.$class_servicios); ?> style="">
    <div class="content-page content-page-servicios mksystem-content-bg" style="<?php if($items_slider): echo 'padding: 50px 150px'; endif; ?>">
    	<div style="position: relative; z-index: 100;">
	        <div class="content-page-marco" style="<?php if($items_slider): echo ''; endif; ?>">
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
	        	<br>
	        </div>
    	</div>
    </div><!--.content-page-->
</div><!--.row-->



 


