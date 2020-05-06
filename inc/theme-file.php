<?php 

function xpent_scripts(){

	//Theme's css files
	wp_enqueue_style( 'font-awesome', THEME_URI . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', THEME_URI . '/css/bootstrap.css' );
	wp_enqueue_style( 'jquery-ui-css', THEME_URI . '/css/jquery-ui.css' );
	wp_enqueue_style( 'owl-carousel', THEME_URI . '/css/owl.carousel.css' );
	wp_enqueue_style( 'magnific-popup', THEME_URI . '/css/magnific-popup.css' );
	wp_enqueue_style( 'fotorama-css', THEME_URI . '/css/fotorama.css' );
	wp_enqueue_style( 'custom-css', THEME_URI . '/css/custom.css' );
	wp_enqueue_style( 'responsive', THEME_URI . '/css/responsive.css' );

	//Theme's JS files
	wp_enqueue_script( 'bootstrap-js', THEME_URI . '/js/bootstrap.min.js' , array('jquery') , '' , true );
	wp_enqueue_script( 'jquery-ui-js', THEME_URI . '/js/jquery-ui.min.js' , array('jquery') , '' , true );
	wp_enqueue_script( 'fotorama-js', THEME_URI . '/js/fotorama.js' , array('jquery') , '' , true );
	wp_enqueue_script( 'magnific-popup', THEME_URI . '/js/jquery.magnific-popup.js' , array('jquery') , '' , true );
	wp_enqueue_script( 'owl-carousel', THEME_URI . '/js/owl.carousel.min.js' , array('jquery') , '' , true );
	wp_enqueue_script( 'custom-js', THEME_URI . '/js/custom.js' , array('jquery') , '' , true );

}