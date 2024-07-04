<?php
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    
    
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



function prefix_add_footer_styles() {
    //wp_enqueue_style('child-style-2', get_template_directory_uri() . '/custom_style.css', array('parent-style'), '1.0.0', 'all');
    wp_enqueue_style('extra-child-style', get_stylesheet_directory_uri() . '/custom_style.css', array('parent-style', 'child-style'), '1.0', 'all');
};
add_action( 'get_footer', 'prefix_add_footer_styles' );