<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.


function startup_styles() {
  wp_register_style('normalize-styles', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css', array(), true);
  wp_enqueue_style('normalize-styles');
  // wp_register_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), true);
  // wp_enqueue_style('bootstrap-style');
  // wp_register_style('main-style', get_template_directory_uri().'/main.css', array(), true);
  // wp_enqueue_style('main-style');
}
add_action( 'wp_enqueue_scripts', 'startup_styles' );

function startup_script() {
  wp_register_script('fontawesome-script', 'https://kit.fontawesome.com/6fee70888d.js', array(), true);
  wp_enqueue_script('fontawesome-script');
  wp_register_script('jquery-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), true);
  wp_enqueue_script('jquery-script');
  wp_register_script('popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), true);
  wp_enqueue_script('popper-script');
  wp_register_script('main-script', get_template_directory_uri().'/main.js', array(), true);
  wp_enqueue_script('main-script');
}

register_nav_menus( array(
'menu-principal' => 'Menu principal') );

add_theme_support( 'post-thumbnails' );
