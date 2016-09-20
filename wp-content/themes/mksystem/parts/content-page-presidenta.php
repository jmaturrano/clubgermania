<?php

?>

<div <?php post_class('main_content content row content_squeeze'); ?>>
    <div class="contenido-azul">
        <div class="col-md-4 col-sm-4 col-xs-12 ">
       

            <?php 
            ?>
                <h2 class="page_title"><?php get_template_part( 'parts/title', 'page'); ?></h2>
            <?php


            //Imagen destacada
            if (get_post_meta($post->ID, 'toggle_featured', true) == "show") {
            
                get_template_part( 'parts/image', '1168_526');
            }
            
            ?>
        </div>
        
        <div class="col-md-8 col-sm-8 col-xs-12">
         <?php 
          the_content();
        ?>     
        </div>

        <div class="clearfix"></div>

    </div><!--contenido-azul-->
</div><!--content-->
    
 


