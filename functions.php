<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1200, 9999 );

function cl_scripts()
{
  wp_enqueue_script('popper', '//code.jquery.com/jquery-3.2.1.slim.min.js', ['jquery'], null, true);
  //Add popper
  wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ['jquery'], null, true);
  //Add bootstrap
  wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['jquery', 'popper'], null, true);
  
  // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
  
  //Add botstrap styles
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('fonts', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/custom.css', null, '1.0.0', 'all');

}
add_action('wp_enqueue_scripts', 'cl_scripts');

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => 'Header Menu',

      )
    );
  }
  add_action('init','register_my_menus');
