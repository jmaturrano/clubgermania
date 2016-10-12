
<div <?php post_class('row'); ?>>
    <div class="content-page content-page-directivos mksystem-content-bg">
        <div class="content-page-marco">
            <div class="col-md-12">
                <div class="block-title-complex">
                    <div class="mksystem-triangulo"></div>
                    <div class="block-title-page text-center">
                        <h3>CONSEJO DIRECTIVO</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"><br></div><!--.clearfix-->

        <?php 
            $query = new WP_Query( array( 'category_name' => 'consejo_directivo', 'posts_per_page' => -1, 'orderby' => 'menu_order') );
            if ($query->have_posts()) :
                $item = 1;
                while ($query->have_posts()) : $query->the_post();
                    if ( has_post_thumbnail() ) {
                        $post_meta = get_post_meta($post->ID);
                        $meta_nombre    = isset($post_meta['nombre'][0])?$post_meta['nombre'][0]:'Complete el campo <strong>nombre</strong>';
                        ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <!--<a href="<?= get_permalink($post->ID); ?>" class="mksystem-img-thumbnail text-center">-->
                            <a href="javascript:;" class="mksystem-img-thumbnail text-center">
                                <?php
                                    the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail'));
                                ?>
                                <span class="directivo-cargo"><?= get_the_title(); ?></span>
                                <span class="directivo-nombre"><?= $meta_nombre; ?></span>
                            </a>
                        </div>
                        <?php
                        if($item == 4){
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
            <div class="clearfix"><br></div><!--.clearfix-->



            <div class="col-md-12">
                <div class="block-title-complex">
                    <div class="mksystem-triangulo"></div>
                    <div class="block-title-page text-center">
                        <h3>JUNTA CALIFICADORA</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"><br></div><!--.clearfix-->

        <?php 
            $query = new WP_Query( array( 'category_name' => 'junta_calificadora', 'posts_per_page' => -1) );
            if ($query->have_posts()) :
                $item = 1;
                while ($query->have_posts()) : $query->the_post();
                    if ( has_post_thumbnail() ) {
                        ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <a href="<?= get_permalink($post->ID); ?>" class="mksystem-img-thumbnail text-center">
                                <?php
                                    the_post_thumbnail('thumbnail', array('class'=>'img-thumbnail'));
                                ?>
                                <span class="directivo-nombre"><?= get_the_title(); ?></span>
                            </a>
                        </div>
                        <?php
                        if($item == 4){
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
            <div class="clearfix"><br></div><!--.clearfix-->


        </div><!--.content-page-marco-->
    </div><!--.content-page-->
</div><!--.row-->


