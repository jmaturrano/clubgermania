<?php

function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('business', '', $directory_template).'mksystem';
  return $directory_child;
}

function mksystem_customizer_register( $wp_customize ) {


  //color de Tema
  $wp_customize->add_setting('color_mksystem_theme',array(
    'default' => '#19a5c9',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_mksystem_theme', array(
    'label'        => __( 'Color del tema <style>#accordion-section-setup, #accordion-section-general, #accordion-panel-banner_settings, #accordion-section-fp-social, #accordion-section-fp-action1, #accordion-section-fp-featured, #accordion-section-fp-about, #accordion-section-fp-action2, #accordion-section-fp-team, #accordion-section-fp-team,#customize-control-background_color{display:none !important;}</style>', 'mksystem' ),
    'section'    => 'colors',
    'settings'   => 'color_mksystem_theme',
  )));
  //color de Cabecera

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
 
    $wp_customize->add_setting('mksystem_header_2',array(
    'default' => '#76c0d9',
    'transport' => 'refresh'
  ));
    $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'mksystem_header_2', array(
    'label'        => __( 'Color 2', 'mksystem' ),
    'section'    => 'mksystem_header',
    'settings'   => 'mksystem_header_2',
  )));

    $wp_customize->add_setting('mksystem_header_3',array(
    'default' => '#cee6f0',
    'transport' => 'refresh'
  ));
    $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'mksystem_header_3', array(
    'label'        => __( 'Color 3', 'mksystem' ),
    'section'    => 'mksystem_header',
    'settings'   => 'mksystem_header_3',
  )));
 

  // customizer logo


  $wp_customize->add_section('mksystem_logo',array(
            'title' => __('Logo', 'mksystem'),
            'priority' => 100
        )
    );
  $wp_customize->add_setting('Logo_mksystem',array(
    'default' => get_template_directory_child().'/wp-content/uploads/2016/09/logo_293x252.png'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Logo_mksystem' , array(
    'label' => __('Imagen Logo' , 'mksystem'),
    'section' => 'mksystem_logo',
    'settings' => 'Logo_mksystem',
  )));

    // customizer slider

  $wp_customize->add_section(
        'mksystem_slider',
        array(
            'title' => __('Slider', 'mksystem'),
            'description'=> __('Tamaño de imagen recomendado: 1168x526', 'mksystem'),
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


  //color de Menu
  $wp_customize->add_section('color_mksystem_Menu',array(
            'title' => __('Color de Menu', 'mksystem'),
            'priority' => 100
        )
    );

  $wp_customize->add_setting('color_Menu',array(
    'default' => '#93c7e4',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'color_Menu', array(
    'label'        => __( 'Color del Menu <style>#accordion-section-background_image,#accordion-panel-widgets,#accordion-section-static_front_page{display:none !important;}</style>','mksystem' ),
    'section'    => 'color_mksystem_Menu',
    'settings'   => 'color_Menu'
  )));

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
    .mksystem-content-bg{
        background-attachment: scroll;
        background-clip: border-box;
        background-color: rgba(255, 255, 255, 0.5);
        background-image: url(<?= get_template_directory_child().'/inc/img/bg-decoration_1900x900.png'; ?>);
        background-origin: padding-box;
        background-position: center center;
        background-repeat: repeat-y;
    }
 /* Color de Fondo de Logo*/
    .main-header .logo-shop{

        background: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
        position: absolute;
        width: 45%;
    }
    .logo-shop-border .border-left{

        border-right: 35px solid #fff;
        border-top: 193px solid <?php echo get_theme_mod('color_mksystem_theme'); ?>;
        display: inline-block;
        height: 100%;
        vertical-align: top;
    }
    /*color de Cabecera*/
    .header-line-1{
        background: <?php echo get_theme_mod('mksystem_header_1'); ?>;
    }
    .header-line-2{
        background: <?php echo get_theme_mod('mksystem_header_2'); ?>;
    }
    .header-line-3{
        background: <?php echo get_theme_mod('mksystem_header_3'); ?>;
    }
    #menu-principal .menu-item >a:hover,
    .current-menu-item a, 
    #menu-principal > .menu-item.current-menu-ancestor > a{
        background: <?php echo get_theme_mod('color_mksystem_theme'); ?>!important;
        color: #fff;
    }
    /*Color de menu*/
    #menu-principal >.menu-item >a{
        background: <?php echo get_theme_mod('color_Menu'); ?>!important;
        font-size:14px;
        color: #fff;
        border-radius: 40px;
        padding: 6px 16px 5px 20px!important;
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
              jQuery('header').addClass('border-header');
          } else {
              jQuery('header').removeClass('border-header');
          }
      });
    });
  </script>
<?php
}
add_action('wp_footer','mksystem_header_scripts', 100);
