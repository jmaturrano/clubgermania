<div class="content-middle">
    <div class="row">
        <div class="col-md-12">
            <div class="mksystem-icons text-center">
                <ul>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-map-marker"></span>
                            <span class="tex-ico">UBICANOS</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <span class=" glyphicon glyphicon-user"></span>
                            <span class="tex-ico">SOCIOS</span>
                    </a>
                    </li>
                    <li><a href="#">
                            <span class=" glyphicon glyphicon-search"></span>
                             <span class="tex-ico">BUSCAR</span>
                    </a>
                    </li>
                    </ul>
            </div>
            <div data-interval="5000" data-ride="carousel" class="carousel slide" id="slideshow">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                    <li data-target="#slideshow" data-slide-to="1"></li>
                    <li data-target="#slideshow" data-slide-to="2"></li>
                    <li data-target="#slideshow" data-slide-to="3"></li>
                    <li data-target="#slideshow" data-slide-to="4"></li>
                    <li data-target="#slideshow" data-slide-to="5"></li>    
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <?php if(get_theme_mod('slider_mksystem_1','')!=''){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('slider_mksystem_1'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                        <?php } ?>
                    </div>
                    <div class="item">
                        <?php if(get_theme_mod('slider_mksystem_2','')!=''){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('slider_mksystem_2'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                        <?php } ?>
                    </div>
                    <div class="item">
                        <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('slider_mksystem_3'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                        <?php } ?>
                    </div>
                    <div class="item">
                        <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('slider_mksystem_4'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                        <?php } ?>
                    </div>
                    <div class="item">
                        <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('slider_mksystem_5'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                        <?php } ?>
                    </div>
                    <div class="item">
                        <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('slider_mksystem_6'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                        <?php } ?>
                    </div>

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
            </div>
        </div>    
    </div>
</div>


