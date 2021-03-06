<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
        <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
        <?php $descripcion_larga = str_replace(' ', '+', get_theme_mod('blogdescription_large')); ?>
        <meta property="og:description" content="<?= $descripcion_larga; ?>" />
        <?php
            if(get_theme_mod('blogimageshare', '') != ''){
              $img_share = get_theme_mod('blogimageshare');
            }else{
              $img_share = get_template_directory_child().'/inc/img/logo_blanco_293x252.png';
            }
        ?>
        <meta property="og:image" content="<?= $img_share; ?>" />

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php 
        wp_head();
        ?>        
    </head>
    <body <?php body_class(); ?> id="<?php if (simple_business_wp_get_option('home-slug')=='') {echo "home";} else {echo esc_attr(simple_business_wp_get_option('home-slug'));} ?>">
        <header>
            <?php 
            get_template_part( 'parts/header', 'content'); 
            ?>
            <div class="social-icons-mobile text-center">
                <?php mksystem_social_links(); ?>
            </div>
        </header>

          
            
