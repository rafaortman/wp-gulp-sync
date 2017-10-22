<?php 
function theme_styles( ) {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

function theme_js(){
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.min.js' , array('jquery'), ' ', true);
	wp_enqueue_script( 'onscreen', get_template_directory_uri() . '/js/jquery.onscreen.min.js' , array('jquery'), ' ', true);
	wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/js/scrollreveal.min.js' , array('jquery'), ' ', true);
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js' , array('jquery'), ' ', true);
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), ' ', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );
?>