
<div <?php post_class('row'); ?>>
    <div class="content-page content-page-ubicanos mksystem-content-bg">
        <div class="content-page-marco">

                <div class="col-md-12">
                    <div class="contact-title h1"><?= get_the_title(); ?></div>
                    <br>
                    <div class="text-justify">
                        <?php the_content(); ?>
                    </div>
                    <br>
                    <iframe width="100%" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=<?= str_replace(' ', '+', get_theme_mod('social_direccion')); ?>&amp;z=<?= get_theme_mod('social_mapzoom'); ?>&amp;output=embed"></iframe>
                </div> 

            <div class="clearfix"></div><!--.clearfix-->
        </div><!--.content-page-marco-->
    </div><!--.content-page-->
</div><!--.row-->


