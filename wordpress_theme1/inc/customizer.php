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

//Add Colors section to change background color
function cd_customizer_settings($wp_customize){
  $wp_customize->add_section( 'cd_colors' , array(
  'title'      => 'Colors',
  'priority'   => 30,
) );

$wp_customize->add_setting( 'background_color' , array(
    'default'     => '#FFFFFF',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
	'label'        => 'Background Color',
	'section'    => 'cd_colors',
	'settings'   => 'background_color',
) ) );

}

//Apply the functionality of Colors section
add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
             body { background: #<?php echo get_theme_mod('background_color', '#FFFFFF'); ?>; }
             .main-footer { background: #<?php echo get_theme_mod('background_color', '#373737'); ?>; }
         </style>
    <?php
}



function wpb_customize_footer($wp_customize){
  // Footer Section
  $wp_customize->add_section('footer', array(
    'title'   => __('Footer', 'wpbootstrap'),
    'description' => sprintf(__('Options for Footer','wordpress_theme1')),
    'priority'    => 130
  ));
  $wp_customize->add_setting('footer_image', array(
    'default'   => get_bloginfo('template_directory').'/img/Group2@2x.png',
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_image', array(
    'label'   => __('Footer Image', 'wordpress_theme1'),
    'section' => 'footer',
    'settings' => 'footer_image',
    'priority'  => 2
  )));

  $wp_customize->add_setting('footer_text', array(
    'default'   => _x('This app is powered by', 'wordpress_theme1'),
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control('footer_text', array(
    'label'   => __('Text', 'wordpress_theme1'),
    'section' => 'footer',
    'priority'  => 1
  ));

}



  add_action('customize_register', 'cd_customizer_settings');
  add_action('customize_register', 'wpb_customize_register');
  add_action('customize_register', 'wpb_customize_footer');
