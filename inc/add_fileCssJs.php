<?php


function sjj_all_file_link_here(){
// default css file add style.css
wp_enqueue_style('stylefile',get_stylesheet_uri());
//register css file
wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),'1.0.0','all');
wp_register_style('custom',get_template_directory_uri().'/css/custom.css',array(),'1.0.0','all');
//add register file 
wp_enqueue_style('bootstrap');
wp_enqueue_style('fontawasome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', false);
wp_enqueue_style('owlcarousl', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", false);
wp_enqueue_style('owlcarousl theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", false);
wp_enqueue_style('custom');
//all js file added
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );


wp_enqueue_script('owl carousljs', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), '5.0.2', 'true' );








wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts','sjj_all_file_link_here');