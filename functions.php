<?php
    if ( function_exists('register_sidebar') ) register_sidebar();
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    
    function wpc_styles() {
        wp_register_script( 'infinite-scroll', get_template_directory_uri().'/js/infinitescroll.min.js', 'jquery', '2.0', true );
        wp_enqueue_script( 'jquery-masonry' );
        wp_enqueue_script( 'infinite-scroll' );
        add_action('wp_enqueue_scripts', 'wpc_styles');
    }
    
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'link', 'gallery', 'audio',
    ) );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 672, 372, false );
    add_image_size( 'ndt-full-width', 1038, 576, false );
    add_image_size( 'ndt-index-width', 400, 700, false );
    add_image_size( 'ndt-fixed-height', 400, 300, true );
    add_image_size( 'ndt-fixed-height-image', 400, 700, true );
    add_image_size( 'ndt-top-featured-post', 200, 150, true );
    add_image_size( 'ndt-carousel-post', 600, 400, true );
?>