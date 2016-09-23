<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="logo-shop">
                    <div class="col-md-offset-6">
                        <?php if(get_theme_mod('Logo_mksystem','')!=''){ ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('Logo_mksystem'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                        <?php } else { ?>
                        <span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                        <?php } ?>
                    </div><!--.col-md-6-->
                </div><!--.logo-shop-->

                <!--border-diagonal-->
                <div class="logo-shop logo-shop-border">
                    <div class="border-left"><p>&nbsp;</p></div>
                    <div class="border-right"><p>&nbsp;</p></div>
                </div>
                <!--border-diagonal-->

                <div class="header-line header-line-1">
                    <p>&nbsp;</p>
                </div><!--.header-line-->
                <div class="header-line header-line-2">
                            <div class="col-md-offset-6">
                                <p class="text-right">
                                    <a class="bandera" href="javascript:;">
                                        <img src="<?php echo get_template_directory_child(); ?>/inc/img/bandera.jpg" />
                                    </a>
                                    <a href="tel: 01522-4570.">
                                        <i class="fa fa-phone icono" style="margin-top: 1px;"></i>
                                    </a>
                                    <a target="_blank" href="https://www.facebook.com/CLUB-GERMANIA-265651020124574/?fref=ts">
                                        <i class="icono fa fa-facebook-official"></i>
                                    </a>
                                    <a href="mailto:ejemplo@email.com"><i class="icono fa fa-envelope fa-social"></i></a>
                                </p>
                            </div><!--.col-md-6-->
                </div><!--.header-line-->
                <div class="header-line header-line-3">
                    <p>&nbsp;</p>
                </div><!--.header-line-->
                <div class="header-line header-line-4">
                            <div class="col-md-offset-6">
                                <?php get_template_part( 'parts/header', 'menu'); ?>
                            </div><!--.col-md-6-->
                </div><!--.header-line-->

            </div><!--.col-md-12-->
        </div><!--.row-->
    </div><!--.container-->
</div><!--.main-header-->