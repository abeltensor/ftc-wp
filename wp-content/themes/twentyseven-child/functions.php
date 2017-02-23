<?php 
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    function theme_enqueue_styles () {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'twentyseventeen-colors-ftc', get_theme_file_uri( '/assets/css/colors-ftc.css' ), array( 'twentyseventeen-style' ), '1.0' );
    }
    
    // Add child theme selectors for color schemes.


    
    
	
  
    