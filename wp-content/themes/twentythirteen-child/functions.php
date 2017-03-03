<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentythirteen-style'; // This is 'twentythirteen-style' for the Twenty Thirteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
//Scripts
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//add google fonts!
function load_fonts(){
	wp_register_style ('googleFonts', 'http://fonts.googleapis.com/css?family=Quicksand|Raleway:700');
	wp_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts','load_fonts');
?>