<?php

function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('dazzling', '', $directory_template).'mksystem';
  return $directory_child;
}

function mksystem_customizer_register( $wp_customize ) {

  $wp_customize->add_section(
        'mksystem_contacto',
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
    'section' => 'mksystem_contacto',
    'settings' => 'Logo_mksystem'
  )));

}

add_action('customize_register','mksystem_customizer_register');
