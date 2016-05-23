<?php

//Import bootstrap
function import_bootstrap() {
  wp_enqueue_style('bootstrap-css', get_template_directory_uri(). "/bootstrap/css/bootstrap.min.css");
  wp_enqueue_script('bootstrap-js', get_template_directory_uri(). "/bootstrap/js/bootstrap.min.js", array('jquery'));
}
add_action('wp_enqueue_scripts', 'import_bootstrap');

function import_parallax() {
  wp_enqueue_script('parallax-js', get_template_directory_uri(). "/js/parallax.min.js", array('jquery'));
}
add_action('wp_enqueue_scripts', 'import_parallax');

function import_bubble() {
  wp_enqueue_script('bubble-js', get_template_directory_uri(). "/js/bubble.js", array('jquery'));
}
add_action('wp_enqueue_scripts', 'import_bubble');


//Import CSS Files
function import_stylesheets() {
  wp_enqueue_style('reset', get_template_directory_uri(). "/css/reset.css");
  wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'import_stylesheets');

//Support/Functions for the theme
function toffestheme_setup() {
  $args = array(
	'flex-width'    => true,
	'width'         => 1200,
	'flex-height'    => true,
	'height'        => 465,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
  );
  add_theme_support( 'custom-header', $args );
  
  add_theme_support('custom-background');
  
  
  // Post thumbnails
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'post-image', 1240, 9999 );
  add_image_size( 'post-thumb', 508, 9999 );
}
add_action('after_setup_theme', 'toffestheme_setup');

//Menus
function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => _( 'Header Menu' ),
      'footer-menu' => _( 'Footer Menu' ),
    )
  ); 
}
add_action('init', 'register_menus');


//Sidebar functions
function register_widgets() {
  register_sidebar(
    array(
      "name" => "Footer area 1",
      "id" => "footer1",
      "description" => "Yes as u suspect. Its a footer area",
      "before_widget" => "<div class='widget-item'>",
      "after_widget" => "</div>",
      "before_title" => "<h4 class='widget-title'>",
      "after_title" => "</h4>",
    )
  );
  
  register_sidebar(
    array(
      "name" => "Footer area 2",
      "id" => "footer2",
      "description" => "Yes as u suspect. Its a footer area",
      "before_widget" => "<div class='widget-item'>",
      "after_widget" => "</div>",
      "before_title" => "<h4 class='widget-title'>",
      "after_title" => "</h4>",
    )
  );
  
  register_sidebar(
    array(
      "name" => "Footer area 3",
      "id" => "footer3",
      "description" => "Yes as u suspect. Its a footer area",
      "before_widget" => "<div class='widget-item'>",
      "after_widget" => "</div>",
      "before_title" => "<h4 class='widget-title'>",
      "after_title" => "</h4>",
    )
  );
  register_sidebar(
    array(
      "name" => "Footer area 4",
      "id" => "footer4",
      "description" => "Yes as u suspect. Its a footer area",
      "before_widget" => "<div class='widget-item'>",
      "after_widget" => "</div>",
      "before_title" => "<h4 class='widget-title'>",
      "after_title" => "</h4>",
    )
  );
  
  register_sidebar(
    array(
      "name" => "Sidebar",
      "id" => "sidebar-1",
      "class" => "custom",
      "description" => "Standard sidebar",
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );
}
add_action('widgets_init', 'register_widgets');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
  global $post;
  return '...<p class="read"><a class="moretag btn btn-success" href="'. get_permalink($post->ID) . '">continue reading</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');