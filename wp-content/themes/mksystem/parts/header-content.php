<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="border-header-hide">

                    <div class="block_absolute">
                        <div class="logo-shop">
                            <div class="col-md-offset-4 col-sm-offset-4">
                                <?php if(get_theme_mod('Logo_mksystem','')!=''){ ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('Logo_mksystem'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                                <?php } else { ?>
                                <span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                                <?php } ?>
                            </div><!--.col-md-4-->
                        </div><!--.logo-shop-->

                        <!--border-diagonal-->
                        <div class="logo-shop logo-shop-border">
                            <div class="border-left"></div>
                            <div class="border-right"></div>
                        </div>
                        <!--border-diagonal-->
                    </div>

                    <div class="header-line header-line-1">
                        <p>&nbsp;</p>
                    </div><!--.header-line-->
                    <div class="header-line header-line-2">
                                <div class="col-md-offset-6">
                                    <p class="text-right">
                                        <?php mksystem_social_links(); ?>
                                    </p>
                                </div><!--.col-md-6-->
                    </div><!--.header-line-->
                    <div class="header-line header-line-3">
                        <p>&nbsp;</p>
                    </div><!--.header-line-->
                    <div class="header-line header-line-4">
                                <div class="col-md-offset-6 col-sm-offset-5">
                                    <?php get_template_part( 'parts/header', 'menu'); ?>
                                </div><!--.col-md-6-->
                    </div><!--.header-line-->
                </div><!--.border-header-->
            </div><!--.-->
        </div><!--.row-->
    </div><!--.container-->
</div><!--.main-header-->