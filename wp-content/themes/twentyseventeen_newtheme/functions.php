<?php


function add_assets()
{
  wp_enqueue_style("boostrap", get_stylesheet_directory_uri() . "/css/bootstrap.css");
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_script("boostrap", get_stylesheet_directory_uri() . "/js/boostrap.js", false);
}
add_action('wp_enqueue_scripts', 'add_assets');