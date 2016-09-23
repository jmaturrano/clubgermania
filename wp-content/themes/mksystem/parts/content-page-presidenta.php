
<div <?php post_class('row'); ?>>
    <div class="content-page content-page-presidenta mksystem-content-bg">
        <div class="content-page-marco">
            <div class="col-md-12">
                <h2 class="page_title text-center"><?php get_template_part( 'parts/title', 'page'); ?></h2>
                <?php
                if (get_post_meta($post->ID, 'toggle_featured', true) == "show") {
                    get_template_part( 'parts/image', '1168_526');
                }//end if
                ?>
            </div><!--.col-md-12-->
            <div class="clearfix"></div><!--.clearfix-->
            <hr>
            <div class="col-md-12 text-justify">
                <?php the_content(); ?>
            </div>
            <div class="clearfix"></div><!--.clearfix-->
        </div><!--.content-page-marco-->
    </div><!--.content-page-->
</div><!--.row-->


