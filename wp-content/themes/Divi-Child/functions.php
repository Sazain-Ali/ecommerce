<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 'enqueue_load_fa');


function my_theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');

  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', false);
}

  function enqueue_load_fa()
  {
    wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  }
?>

