<?php
function theme_files(){
  wp_enqueue_script('bootstrapjs','//maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',NULL,'1.0',true);
  wp_enqueue_script('poperjs','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
  wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
  wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_enqueue_style('main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','theme_files');



function university_features() {
  add_theme_support('title-tag');
  add_theme_support('menus');

}
add_action('after_setup_theme','university_features');


 ?>
