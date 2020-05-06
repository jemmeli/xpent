<?php 
//define theme constant
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_PATH', get_template_directory() );

// echo THEME_URI . "<br>";
// echo THEME_PATH . "<br>";

/*INCLUDE THEME FILES*/
include( THEME_PATH . '/inc/theme-file.php' );

/*ADD HOOKS*/
add_action( 'wp_enqueue_scripts', 'xpent_scripts' );