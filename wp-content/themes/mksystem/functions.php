<?php

function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('business', '', $directory_template).'mksystem';
  return $directory_child;
}

function mksystem_customizer_register( $wp_customize ) {


  //color de Tema
  $wp_customize->add_setting('color_mksystem_theme',array(
    'default' => '#7cafd6',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
    'label'        => __( 'Color del tema <style>#accordion-section-setup, #accordion-section-general, #accordion-panel-banner_settings, #accordion-section-fp-social, #accordion-section-fp-action1, #accordion-section-fp-featured, #accordion-section-fp-about, #accordion-section-fp-action2, #accordion-section-fp-team, #accordion-section-fp-team,#customize-control-background_color, #widgets-right>div.wp-full-overlay-sidebar-content>a.button.button-primary.button-nimbus, #accordion-section-fp-news,#accordion-section-fp-contact, #accordion-section-blog-settings, #accordion-panel-widgets, #accordion-section-static_front_page{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'colors',
    'settings'   => 'color_mksystem_theme',
  )));
  //color de Cabecera

  /*
  $wp_customize->add_section('mksystem_header',array(
    'title' => __('Color Cabecera', 'mksystem'),
    'priority' => 100
  ));
    $wp_customize->add_setting('mksystem_header_1',array(
    'default' => '#1aa4c8',
    'transport' => 'refresh'
  ));
    $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'mksystem_header_1', array(
    'label'        => __( 'Color 1 <style>#accordion-section-fp-news,#accordion-section-fp-contact, #accordion-section-blog-settings{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'mksystem_header',
    'settings'   => 'mksystem_header_1',
  )));
  */
 
    $wp_customize->add_setting('mksystem_header_2',array(
      'default' => '#a3c7e2',
      'transport' => 'refresh'
    ));
      $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_header_2', array(
      'label'        => __( 'Degradado 1', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_header_2',
    )));

    $wp_customize->add_setting('mksystem_header_3',array(
      'default' => '#d7e7f3',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_header_3', array(
      'label'        => __( 'Degradado 2', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_header_3',
    )));

    $wp_customize->add_setting('mksystem_color_text_menu',array(
      'default' => '#fff',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_color_text_menu', array(
      'label'        => __( 'Color texto menu', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_color_text_menu',
    )));

    $wp_customize->add_setting('mksystem_color_text_menu_hover',array(
      'default' => '#fff',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_color_text_menu_hover', array(
      'label'        => __( 'Color texto menu hover', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_color_text_menu_hover',
    )));

    $wp_customize->add_setting('mksystem_color_text_options_hover',array(
      'default' => '#000',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_color_text_options_hover', array(
      'label'        => __( 'Color texto opciones hover', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_color_text_options_hover',
    )));

    $wp_customize->add_setting('mksystem_color_text_content_title',array(
      'default' => '#fff',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_color_text_content_title', array(
      'label'        => __( 'Color texto título contenido', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_color_text_content_title',
    )));

    $wp_customize->add_setting('mksystem_color_text_content_description',array(
      'default' => '#000',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_color_text_content_description', array(
      'label'        => __( 'Color texto contenido', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_color_text_content_description',
    )));
   
    $wp_customize->add_setting('mksystem_color_bg_pages',array(
      'default' => '#d7eaf5',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(
      new WP_Customize_Color_Control( $wp_customize, 'mksystem_color_bg_pages', array(
      'label'        => __( 'Color fondo páginas', 'mksystem' ),
      'section'    => 'colors',
      'settings'   => 'mksystem_color_bg_pages',
    )));

  // customizer logo

  $wp_customize->add_section('mksystem_logo',array(
            'title' => __('Logo', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('Logo_mksystem',array(
    'default' => get_template_directory_child().'/inc/img/logo_293x252.png'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Logo_mksystem' , array(
    'label' => __('Imagen Logo (Tamaño recomendado 293x252px)' , 'mksystem'),
    'section' => 'mksystem_logo',
    'settings' => 'Logo_mksystem',
  )));

    // customizer slider

  $wp_customize->add_section(
        'mksystem_slider',
        array(
            'title' => __('Slider', 'mksystem'),
            'description'=> __('Tamaño de imagen recomendado: 1900x900', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('slider_mksystem_1',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_1' , array(
    'label' => __('Imagen slider 1' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_1'
  )));

  $wp_customize->add_setting('slider_mksystem_2',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_2' , array(
    'label' => __('Imagen slider 2' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_2'
  )));

  $wp_customize->add_setting('slider_mksystem_3',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_3' , array(
    'label' => __('Imagen slider 3' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_3'
  )));

  $wp_customize->add_setting('slider_mksystem_4',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_4' , array(
    'label' => __('Imagen slider 4' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_4'
  )));

  $wp_customize->add_setting('slider_mksystem_5',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_5' , array(
    'label' => __('Imagen slider 5' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_5'
  )));

  $wp_customize->add_setting('slider_mksystem_6',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/slider2.jpg'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_mksystem_6' , array(
    'label' => __('Imagen slider 6' , 'mksystem'),
    'section' => 'mksystem_slider',
    'settings' => 'slider_mksystem_6'
  )));



  $wp_customize->add_section('mksystem_social_links',array(
    'title' => __('Social links', 'mksystem'),
    'priority' => 100
  ));
  $wp_customize->add_setting('social_phone',array(
    'default' => __('123-45678','mksystem')
  ));
  $wp_customize->add_control('social_phone',array(
    'label' => __('Teléfono','mksystem'),
    'section' => 'mksystem_social_links',
    'setting' => 'social_phone',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('social_facebook',array(
    'default' => __('http://facebook.com','mksystem')
  ));
  $wp_customize->add_control('social_facebook',array(
    'label' => __('Facebook','mksystem'),
    'section' => 'mksystem_social_links',
    'setting' => 'social_facebook',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('social_twitter',array(
    'default' => __('http://twitter.com','mksystem')
  ));
  $wp_customize->add_control('social_twitter',array(
    'label' => __('Twitter','mksystem'),
    'section' => 'mksystem_social_links',
    'setting' => 'social_twitter',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('social_instagram',array(
    'default' => __('http://instagram.com','mksystem')
  ));
  $wp_customize->add_control('social_instagram',array(
    'label' => __('Instagram','mksystem'),
    'section' => 'mksystem_social_links',
    'setting' => 'social_instagram',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('social_youtube',array(
    'default' => __('http://youtube.com','mksystem')
  ));
  $wp_customize->add_control('social_youtube',array(
    'label' => __('Youtube','mksystem'),
    'section' => 'mksystem_social_links',
    'setting' => 'social_youtube',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('social_vimeo',array(
    'default' => __('http://vimeo.com','mksystem')
  ));
  $wp_customize->add_control('social_vimeo',array(
    'label' => __('Vimeo','mksystem'),
    'section' => 'mksystem_social_links',
    'setting' => 'social_vimeo',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('social_mail',array(
    'default' => __('ejemplo@email.com','mksystem')
  ));
  $wp_customize->add_control('social_mail',array(
    'label' => __('Email','mksystem'),
    'section' => 'mksystem_social_links',
    'setting' => 'social_mail',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('check_bandera',array(
      'default' => true
  ));
  $wp_customize->add_control( 'check_bandera', array(
       'settings' => 'check_bandera',
       'section'   => 'mksystem_social_links',
       'label'     => __('Ver bandera','mksystem'),
       'type'      => 'checkbox'
  ));

  $wp_customize->add_setting('check_contactform',array(
      'default' => true
  ));
  $wp_customize->add_control( 'check_contactform', array(
       'settings' => 'check_contactform',
       'section'   => 'mksystem_social_links',
       'label'     => __('Ver Formulario contacto','mksystem'),
       'type'      => 'checkbox'
  ));


}
add_action('customize_register','mksystem_customizer_register');



/**
 * Mk system header styles
 *
 */
function mksystem_header_styles() {
  //FOnt awesome
  wp_enqueue_style( 'Font-awesome', get_template_directory_child() . '/plugin/font-awesome-4.6.3/css/font-awesome.css' );
 
?>
  <style type="text/css">
    @font-face {
      font-family: 'Century Gothic';
      src: url("<?= get_template_directory_child().'/inc/fonts/Century_Gothic.ttf'?>") format('truetype');
    }
    @font-face {
      font-family: 'Century Gothic Bold';
      src: url("<?= get_template_directory_child().'/inc/fonts/Century_Gothic_Bold.ttf'?>") format('truetype');
    }
    body{
      color: <?= get_theme_mod('mksystem_color_text_content_description'); ?> !important;
    }
    .mksystem-content-bg{
        background-attachment: scroll;
        background-clip: border-box;
        background-color: rgba(255, 255, 255, 0.5);
        background-image: url(<?= get_template_directory_child().'/inc/img/bg-decoration_1900x900_transparent35.png'; ?>);
        background-origin: padding-box;
        background-position: center center;
        background-repeat: repeat-y;
    }
 /* Color de Fondo de Logo*/
    .main-header .logo-shop{
        background: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
        display: inline-block;
        width: 392px;
    }
    .logo-shop-border .border-left{
        border-right: 55px solid #fff;
        border-top: 142px solid <?php echo get_theme_mod('color_mksystem_theme'); ?>;
        display: inline-block;
    }
    /*color de Cabecera*/
    .header-line-1{
        background: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
    }
    .header-line-2{
        background: <?php echo get_theme_mod('mksystem_header_2'); ?>;
    }
    .header-line-3{
        background: <?php echo get_theme_mod('mksystem_header_3'); ?>;
    }
    .header-line-1, 
    .header-line-2, 
    .header-line-3{
        height: 29px;
    }
    #menu-principal .menu-item >a:hover,
    .current-menu-item a, 
    #menu-principal > .menu-item.current-menu-ancestor > a{
        background: <?php echo get_theme_mod('color_mksystem_theme'); ?>!important;
        color: <?php echo get_theme_mod('mksystem_color_text_menu_hover'); ?>;
    }
    /*Color de menu*/
    #menu-principal >.menu-item >a{
        background: <?php echo get_theme_mod('mksystem_header_2'); ?>!important;
        font-size:14px;
        color: <?= get_theme_mod('mksystem_color_text_menu'); ?>;
        border-radius: 40px;
        padding: 6px 16px 5px 20px!important;
    }
    .mksystem-icons{
        background: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
        border-radius: 60px;
        opacity: 0.61;
        padding: 15px 0 5px;
        position: absolute;
        right: 155px;
        top: 35px;
        z-index: 200;
    }
    .carousel-indicators .active {
        background-color: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
        border: 1px solid <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
    }
    .border-header{
      border-bottom: 1px solid <?php echo get_theme_mod('mksystem_header_3'); ?>;
    }
    #menu_row .dropdown-menu {
        background-color: <?php echo get_theme_mod('mksystem_header_2'); ?> !important;
        border: 0px;
    }
    .navbar-default .navbar-nav > li li a,
    header .fallback_cb > ul > li > ul li a,
    header .fallback_cb > ul > li > ul li a:hover{
      color: <?= get_theme_mod('mksystem_color_text_menu'); ?> !important;
      border-bottom: 1px solid <?= get_theme_mod('mksystem_color_text_menu'); ?>;
      text-transform: capitalize !important;
    }
    .mksystem-icons a{
      color: <?= get_theme_mod('mksystem_color_text_menu'); ?>;
      padding: 4px;
      display: inline-block;
    }
    .mksystem-icons a:hover, 
    .mksystem-icons a:hover span.glyphicon{
      color: <?= get_theme_mod('mksystem_color_text_options_hover'); ?>;
      opacity: 0.9;
    }
    .icono:hover{
      color: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
    }
    .mksystem-img-thumbnail .img-thumbnail{
      background-color: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
        border: 1px solid <?php echo get_theme_mod('color_mksystem_theme'); ?>;
        border-radius: 0;
    }
    .block-title-complex .mksystem-triangulo{
      border-bottom: 20px solid transparent;
      border-left: 38px solid <?php echo get_theme_mod('color_mksystem_theme'); ?>;
      border-top: 20px solid transparent;
      left: 10px;
      right: auto;
      top: 0;
    }
    .block-title-page{
      background: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
      margin-top: 20px;
      max-height: 75px;
      padding: 6px;
      position: relative;
      width: 255px;
    }
    .mksystem-triangulo{
      border-bottom: 25px solid transparent;
      border-left: 48px solid <?php echo get_theme_mod('color_mksystem_theme'); ?>;
      border-top: 25px solid transparent;
      height: 0;
      position: absolute;
      right: -25px;
      top: 35px;
      width: 0;
    }
    .border-title-page {
      border-bottom: 74px solid <?php echo get_theme_mod('color_mksystem_theme'); ?>;
      border-right: 55px solid transparent;
      display: inline-block;
      height: 0;
      position: absolute;
      right: -55px;
      top: 0;
    }
    .block-title-page h2, 
    .block-title-page h3, 
    .block-title-page h4, 
    .block-title-page h5{
        color: <?= get_theme_mod('mksystem_color_text_content_title'); ?>;
        font-weight: 600;
        margin: 0;
        position: relative;
        text-transform: uppercase;
    }
    .content-page-marco{
      background: <?= get_theme_mod('mksystem_color_bg_pages'); ?>;
      border: 6px solid #f3f3f3;
      padding: 20px;
    }
    .directivo-cargo{
      color: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
    }
    .directivo-nombre{
      color: <?= get_theme_mod('mksystem_color_text_content_description'); ?>;
    }
    .content-page-eventos .mksystem-img-thumbnail .img-thumbnail{
      border: 3px solid <?php echo get_theme_mod('color_mksystem_theme'); ?>;
    }
    .btn-theme{
      background-color: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
      background-image: none !important;
      border: medium none !important;
      border-radius: 0 !important;
      color: <?php echo get_theme_mod('mksystem_color_text_menu'); ?> !important;
    }

    @media screen and (max-width: 736px){
      #menu_row, 
      .navbar-default .navbar-toggle,
      .navbar-default .navbar-toggle{
        background-color: <?php echo get_theme_mod('color_mksystem_theme'); ?> !important;
        border-color: <?php echo get_theme_mod('mksystem_color_text_menu'); ?> !important;
      }
      .navbar-default .navbar-toggle .icon-bar{
        background-color: <?php echo get_theme_mod('mksystem_color_text_menu'); ?> !important;
      }
      .navbar-default .navbar-nav > li li a,
      header .fallback_cb > ul > li > ul li a,
      header .fallback_cb > ul > li > ul li a:hover{
        border-bottom: 0 none;
        border-top: 1px solid <?= get_theme_mod('mksystem_color_text_menu'); ?>;
      }
    }
    
  </style>
<?php
}
add_action( 'wp_enqueue_scripts', 'mksystem_header_styles' );





/**
 * Mk system header scripts
 *
 */
function mksystem_header_scripts() {
?>
  <script>
    jQuery('.carousel').carousel();
    jQuery(document).ready(function(){
      jQuery(document).scroll(function(e) {
          if(jQuery(this).scrollTop() > jQuery('.header-line-1').height()) {
              jQuery('.border-header-hide').addClass('border-header');
          } else {
              jQuery('.border-header-hide').removeClass('border-header');
          }
      });
    });
  </script>
<?php
}
add_action('wp_footer','mksystem_header_scripts', 100);



/*
*
* Mk systtem social links
*
*/
function mksystem_social_links(){
  if(get_theme_mod('check_bandera')){
    echo '<a class="bandera" href="javascript:;"><img src="'.get_template_directory_child().'/inc/img/bandera.jpg" /></a>';
  }

  if(get_theme_mod('social_phone') != ''){
    echo '<a href="tel: 01'.get_theme_mod('social_phone').'."><i class="fa fa-phone icono" style="margin-top: 1px;"></i></a>';
  }
  
  if(get_theme_mod('social_facebook') != ''){
    echo '<a target="_blank" href="'.get_theme_mod('social_facebook').'"><i class="icono fa fa-facebook-official"></i></a>';
  }

  if(get_theme_mod('social_twitter') != ''){
    echo '<a target="_blank" href="'.get_theme_mod('social_twitter').'"><i class="icono fa fa-twitter-square"></i></a>';
  }

  if(get_theme_mod('social_instagram') != ''){
    echo '<a target="_blank" href="'.get_theme_mod('social_instagram').'"><i class="icono fa fa-instagram"></i></a>';
  }

  if(get_theme_mod('social_youtube') != ''){
    echo '<a target="_blank" href="'.get_theme_mod('social_youtube').'"><i class="icono fa fa-youtube-play"></i></a>';
  }

  if(get_theme_mod('social_vimeo') != ''){
    echo '<a target="_blank" href="'.get_theme_mod('social_vimeo').'"><i class="icono fa fa-vimeo-square"></i></a>';
  }

  if(get_theme_mod('social_mail') != ''){
    echo '<a href="mailto:'.get_theme_mod('social_mail').'"><i class="icono fa fa-envelope fa-social"></i></a>';
  }

  if(get_theme_mod('check_contactform')){
    echo '<a href="'.esc_url(home_url( '/contacto' )).'"><i class="icono fa fa-share-alt"></i></a>';
  }

}