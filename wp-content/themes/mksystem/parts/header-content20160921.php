<div class="main-header">
    
    <div class="logo-shop">
        <div class="text-right">
            <!--
            <a href="http://www.clubgermania.pe/web/">
                <img height="" width="" src="http://www.clubgermania.pe/web/wp-content/uploads/2016/09/logo_293x252.png" alt="Club Germania">
            </a>
            -->
            <?php if(get_theme_mod('Logo_mksystem','')!=''){ ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('Logo_mksystem'); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
            <?php } else { ?>
            <span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
            <?php } ?>
        </div>
    </div><!--.logo-shop-->

    <!--border-diagonal-->
    <div class="logo-shop" style="height: 100%; z-index: 20; width: auto; display: block; background: transparent none repeat scroll 0% 0%; left: 43.5%;">
        <div class="border-left" style="display: inline-block; height: 100%; border-right: 25px solid rgb(255, 255, 255); border-top: 193px solid rgb(25, 165, 201); vertical-align: top;"><p>&nbsp;</p></div>
        <div class="border-right" style="display: inline-block; height: 100%; border-left: 25px solid rgb(255, 255, 255); vertical-align: top; margin-left: -4px; border-bottom: 193px solid transparent;"><p>&nbsp;</p></div>
    </div>
    <!--border-diagonal-->

    <div class="header-line header-line-1">
        <p>&nbsp;</p>
    </div>
    <div class="header-line header-line-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
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
                </div>
            </div>
        </div>
    </div>
    <div class="header-line header-line-3">
        <p>&nbsp;</p>
    </div>
    <div class="header-line header-line-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <?php get_template_part( 'parts/header', 'menu'); ?>
                </div>
            </div>
        </div>
    </div>

</div><!--.main-header-->