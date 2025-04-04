<?php

function my_theme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme'),
    ));
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(300, 200, true); 

}
add_action('after_setup_theme', 'my_theme_register_menus');
function sxdfef_excerpt_more($more){
    return '';
  }
  add_filter('excerpt_more', 'sxdfef_excerpt_more');