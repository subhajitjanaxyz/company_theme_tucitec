<?php
// add css and js file 
include_once("inc/add_fileCssJs.php");
include_once("inc/manubar-register.php");
include_once("inc/update_text.php");
include_once("inc/color.php");


function add_color_for_web(){
?>
<style>
:root{
    /* add file */
--background-color:<?php echo get_theme_mod('bg_color', '#f0a709'); ?> !important;
--heading-color:<?php echo get_theme_mod('heading_colors', '#f0a709'); ?> !important;
}

</style>
<?php
} 
add_action('wp_head','add_color_for_web')

?>