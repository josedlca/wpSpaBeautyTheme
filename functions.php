<?php
// Register Nav Walker class Alias
    require_once('wp_bootstrap_navwalker.php'); 
// Nav Menus
    register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));

// google fonts frontend
function wpSpaBeauty_load_scripts(){
	wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700' );
}

add_action('wp_enqueue_script','wpSpaBeauty_load_scripts');