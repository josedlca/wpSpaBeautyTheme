<?php
// Register Nav Walker class Alias
    require_once('wp_bootstrap_navwalker.php'); 
// Nav Menus
    register_nav_menus(array(
    'primary' => __('Primary Menu')
	));
	

/*
	==========================================
	 Theme support function
	==========================================
*/
	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');


// google fonts frontend
function wpSpaBeauty_load_scripts(){
	wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,500,700' );
}

add_action('wp_enqueue_script','wpSpaBeauty_load_scripts');

