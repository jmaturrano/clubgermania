<div class="content-middle">
    <div class="">
        <!--<div data-interval="5000" data-ride="carousel" class="carousel slide carousel-fade" id="slideshow">-->
        <div data-ride="carousel" class="carousel slide carousel-fade" id="slideshow">

                <!-- Indicators -->
                <div class="carousel-indicators-block">
                    <div class="container">
                        <div class="row">
                            <ol class="carousel-indicators text-right">
                                <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                                <?php if(get_theme_mod('slider_mksystem_2','')!=''){ ?>
                                    <li data-target="#slideshow" data-slide-to="1"></li>
                                <?php } ?>
                                <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
                                    <li data-target="#slideshow" data-slide-to="2"></li>
                                <?php } ?>
                                <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
                                    <li data-target="#slideshow" data-slide-to="3"></li>
                                <?php } ?>
                                <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
                                    <li data-target="#slideshow" data-slide-to="4"></li>
                                <?php } ?>
                                <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
                                    <li data-target="#slideshow" data-slide-to="5"></li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <?php if(get_theme_mod('slider_mksystem_1','')!=''){ ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo get_theme_mod('slider_mksystem_1'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                            </a>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                        <?php } ?>
                    </div>

                    <?php if(get_theme_mod('slider_mksystem_2','')!=''){ ?>
                    <div class="item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_theme_mod('slider_mksystem_2'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                        </a>
                    </div>
                    <?php } ?>

                    <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
                    <div class="item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_theme_mod('slider_mksystem_3'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                        </a>
                    </div>
                    <?php } ?>

                    <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
                    <div class="item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_theme_mod('slider_mksystem_4'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                        </a>
                    </div>
                    <?php } ?>

                    <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
                    <div class="item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_theme_mod('slider_mksystem_5'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                        </a>
                    </div>
                    <?php } ?>

                    <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
                    <div class="item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_theme_mod('slider_mksystem_6'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                        </a>
                    </div>
                    <?php } ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
                    <span class="fa fa-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
                    <span class="fa fa-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div><!--.carousel.slide-->
    </div>
</div><!--content-middle-->


