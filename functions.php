<?php
// Register Nav Walker class Alias
    require_once('wp_bootstrap_navwalker.php'); 
// Nav Menus
    register_nav_menus(array(
    'primary' => __('Primary Menu')
    ));
/*