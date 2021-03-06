
<div <?php post_class('row'); ?>>
    <div class="content-page content-page-presidenta mksystem-content-bg">
        <div class="content-page-marco">
            <div class="col-md-5 col-sm-5 col-xs-5 text-right">
                <?php
                if (get_post_meta($post->ID, 'toggle_featured', true) == "show") {
                    ?>
                    <div class="unique-image">
                        <div class="mksystem-triangulo">
                        </div>
                        <a class="mksystem-img-thumbnail" href="javascript:;">
                        <?php
                            //get_template_part( 'parts/image', '1168_526');
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail img-responsive sub_banner'));
                            }
                        ?>
                        </a>
                    </div>
                <?php
                }//end if
                ?>
            </div><!--.col-md-12-->
            <div class="col-md-7 col-sm-7 col-xs-7">
                <?php 
                    $post_meta = get_post_meta($post->ID);
                    $meta_nombre    = isset($post_meta['nombre'][0])?$post_meta['nombre'][0]:'Complete el campo <strong>nombre</strong>';
                    $meta_cargo     = isset($post_meta['cargo'][0])?$post_meta['cargo'][0]:'Complete el campo <strong>cargo</strong>';
                    $meta_periodo   = isset($post_meta['periodo'][0])?$post_meta['periodo'][0]:'Complete el campo <strong>período</strong>';
                ?>
                <div class="block-title-page text-center">
                    <div class="border-title-page"></div>
                    <h3><?= $meta_nombre; ?></h3>
                    <h5><?= $meta_cargo; ?></h5>
                    <h5><?= $meta_periodo; ?></h5>
                </div>
                <div class="text-justify" style="margin-top: 20px;">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="clearfix"></div><!--.clearfix-->
        </div><!--.content-page-marco-->
    </div><!--.content-page-->
</div><!--.row-->


