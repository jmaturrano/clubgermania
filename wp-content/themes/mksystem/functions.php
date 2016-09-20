<?php

function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('business', '', $directory_template).'mksystem';
  return $directory_child;
}

function mksystem_customizer_register( $wp_customize ) {

  // customizer logo

  $wp_customize->add_section(
        'mksystem_logo',
        array(
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
    'settings' => 'Logo_mksystem'
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
    
    
  </style>
<?php
}
add_action( 'wp_enqueue_scripts', 'mksystem_header_styles' );



