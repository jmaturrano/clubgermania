<?php
$sidebar_select = get_post_meta($post->ID, 'sidebar_select', true);
if ($sidebar_select == 'right') {
    $sidebar_select_aside_classes = '';
    $sidebar_select_content_classes = '';
} else {
    $sidebar_select_aside_classes = 'col-sm-pull-8';
    $sidebar_select_content_classes = 'col-sm-push-4';
}
if (empty($sidebar_select) || ($sidebar_select == 'none')) {
?>
    <div <?php post_class('row'); ?>>
        <div class="content-page-historia mksystem-content-bg">
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
                <div class="col-md-12 text-justify">
                    <?php the_content(); ?>
                </div>
                <div class="clearfix"></div><!--.clearfix-->
                <hr>
                <div class="col-md-6 taxonomies_tags">
                    <?php get_template_part( 'parts/tax_tags'); ?>
                </div>
                <div class="clearfix"></div><!--.clearfix-->
                <hr>
                <?php get_template_part( 'parts/single_post_nav'); ?>
                <div class="clearfix"></div><!--.clearfix-->
            </div><!--.content-page-marco-->
        </div><!--.content-page-historia-->
    </div><!--.row-->
<?php 
} else {
    exit();
?>
    <div <?php post_class('main_content content row content_squeeze jmaturrano2'); ?>>

        <div class="col-sm-8 <?php echo $sidebar_select_content_classes; ?>">
            <h2 class="page_title"><?php get_template_part( 'parts/title', 'page'); ?></h2>
            <?php
            if (get_post_meta($post->ID, 'toggle_featured', true) == "show") {
                get_template_part( 'parts/image', '1168_526');
            }
            ?>
            <div class="row single_meta">
                <div class="col-sm-8">
                    <p> 
                    <?php 
                    _e('Posted by ', 'simple-business-wp');  
                    the_author_posts_link(); 
                    _e(' on ', 'simple-business-wp');
                    the_time(get_option( 'date_format' ));
                    ?></p>
                </div>
                <div class="col-sm-4">
                    <?php if (comments_open()) { ?><p class="text-right"><a href="<?php the_permalink(); ?>#comments" ><?php comments_number( 'No comments', 'One comment', '% comments' ); ?></a></p><?php } ?>
                </div>
            </div>
            <?php        
            the_content();
            simple_business_wp_clear();
            get_template_part( 'parts/wp_link_pages');
            get_template_part( 'parts/tax_tags');
            comments_template();
            get_template_part( 'parts/single_post_nav');
            ?>
        </div>
        <div class="col-sm-4 <?php echo $sidebar_select_aside_classes; ?>">
            <?php
            get_sidebar();
            ?>
        </div>        
    </div>
<?php
}
?>

                    

                        
              
 
  
