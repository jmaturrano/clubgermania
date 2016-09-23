<div class="content-middle">
    <div class=""><!--.container-->
        <div class=""><!--.row-->
            <div class=""><!--.col-md-12-->

                <div class="mksystem-icons text-center">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url('/ubicanos')); ?>">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                <span class="tex-ico">UBÍCANOS</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/directivos')); ?>">
                                <span class=" glyphicon glyphicon-user"></span>
                                <span class="tex-ico">SOCIOS</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/?s=')); ?>">
                                <span class=" glyphicon glyphicon-search"></span>
                                <span class="tex-ico">BUSCAR</span>
                            </a>
                        </li>
                    </ul>
                </div><!--.mksystem-icons-->
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
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
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
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_2'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_3'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_4'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_5'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_6'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>
                        </div><!--carousel-inner-->

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

            </div><!--.col-md-12-->
        </div><!--.row-->
    </div><!--.container-->
</div><!--content-middle-->


