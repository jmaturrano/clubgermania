<?php
get_template_part( 'parts/frontpage','slider-servicios');
?>

<div <?php post_class('main_content content row content_squeeze'); ?>>
    <div class="contenido-azul col-md-8 mk-servicios ">
 
        <div class="col-md-12 text-center">
         <?php 
          the_content();
        ?>     
        </div>

        <div class="clearfix"></div>

    </div><!--contenido-azul-->
</div><!--content-->
    
 


