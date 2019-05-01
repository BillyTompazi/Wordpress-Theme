<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'wpbootstrap'),
      'description' => sprintf(__('Options for showcase','wordpress_theme1')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'wordpress_theme1'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));
    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Recycle your Nespresso in style!', 'wordpress_theme1'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'wordpress_theme1'),
      'section' => 'showcase',
      'priority'  => 2
    ));
    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('We can recycle your coffee pods for cashback or free coffee!', 'wordpress_theme1'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'wordpress_theme1'),
      'section' => 'showcase',
      'priority'  => 3
    ));
    
  }
  add_action('customize_register', 'wpb_customize_register');
