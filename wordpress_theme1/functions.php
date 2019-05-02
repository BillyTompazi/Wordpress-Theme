<?php
// Register Nav Walker class_alias
require_once('class-wp-bootstrap-navwalker.php');

//Theme Support
function wpb_theme_setup(){
  // Nav menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

//Widget Locations
function wpb_init_widgets($id) {

	register_sidebar(array(
		'name'		=> 'Box1',
		'id'			=> 'box1',
		'before_widget'	=> '<div class="box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

  register_sidebar(array(
		'name'		=> 'Box2',
		'id'			=> 'box2',
		'before_widget'	=> '<div class="box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

  register_sidebar(array(
		'name'		=> 'Box3',
		'id'			=> 'box3',
		'before_widget'	=> '<div class="box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}

add_action('widgets_init', 'wpb_init_widgets');

//Support of Custom Logo
function mytheme_setup() {
    add_theme_support('custom-logo');
}

add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));


add_action('after_setup_theme', 'mytheme_setup');

//Extra support
add_filter( 'show_admin_bar', '__return_false' );

add_action( 'after_setup_theme', 'cd_setup' );
function cd_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}

//Customizer File
require get_template_directory(). '/inc/customizer.php';
