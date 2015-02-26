<?php 

function test_styles() {
	 wp_enqueue_style('uni-style',  get_stylesheet_directory_uri() . '/css/custom.css');
}

add_action('wp_enqueue_scripts', 'test_styles');



function test_widget() {
	register_sidebar(
	array('name'=>'Home features',
		'id'			=> 'home_text',
		'before_widget' => '<div class="quarter">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
}
add_action( 'widgets_init', 'test_widget' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );