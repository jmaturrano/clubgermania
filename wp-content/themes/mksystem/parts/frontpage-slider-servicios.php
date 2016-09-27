
<?php 
    global $items_slider;
    $post_slug = $post->post_name;
    if(isset($post_slug) && $post_slug != ''){
        $query = new WP_Query( array( 'category_name' => $post_slug, 'posts_per_page' => -1) );
        if ($query->have_posts()) :

            while ($query->have_posts()) : $query->the_post();
                if ( has_post_thumbnail() ) {
                    $items_slider = true;
                }
            endwhile;
            if($items_slider):
?>
<div class="content-middle"  id="main">
    <div class="container"><!--.container-->
        <div class="row"><!--.row-->
            <div class="" style="position: relative;"><!--.col-md-12-->
                <div data-ride="carousel" class="carousel slide carousel-fade" id="slideshow_servicios">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    <?php
                        $item = 0;
                        while ($query->have_posts()) : $query->the_post();
                            if ( has_post_thumbnail() ) {
                    ?>
                                <div class="item <?php if($item == 0){ echo 'active'; } ?>">
                                    <div class="carousel-background">
                                        <div class="carousel-marco">
                                          <p>&nbsp;</p>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <?php the_post_thumbnail('full', array('class'=>'')); ?>
                                    </a>
                                </div>

                    <?php
                                $item++;
                            }//end if
                        endwhile;
                    ?>
                    </div><!--carousel-inner-->


                    <!-- Indicators -->
                    <div class="carousel-indicators-block">
                        <div class="container">
                            <div class="row">
                                <ol class="carousel-indicators text-right">
                                    <?php if($item > 0): ?>

                                    <?php for ($i=0; $i < $item; $i++) { ?>
                                        <li data-target="#slideshow_servicios" data-slide-to="<?= $i; ?>" class="<?php if($i == 0){ echo 'active'; }?>"></li>
                                    <?php }//end for ?>
                                    <?php endif; ?>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#slideshow_servicios" role="button" data-slide="prev">
                        <span class="fa fa-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#slideshow_servicios" role="button" data-slide="next">
                        <span class="fa fa-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div><!--.carousel.slide-->
            </div><!--.col-md-12-->
        </div><!--.row-->
    </div><!--.container-->
</div><!--content-middle-->

    <?php
            endif;
        endif;
    }
?>


