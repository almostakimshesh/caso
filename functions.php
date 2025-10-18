<?php
add_action( 'wp_enqueue_scripts', 'caso_enqueue_styles' );
function caso_enqueue_styles() {
    wp_enqueue_style( 'caso-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

 //Js -
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-paroller', get_template_directory_uri() . '/assets/js/jquery.paroller.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-mCustomScrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array(), '1.0.0', true );
    wp_enqueue_script( 'appear-js', get_template_directory_uri() . '/assets/js/appear.js', array(), '1.0.0', true );
    wp_enqueue_script( 'tilt-jquery', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.js', array(), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '1.0.0', true );
    wp_enqueue_script( 'knob', get_template_directory_uri() . '/assets/js/knob.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

}
// add_theme_support( 'title-tag' );
// add_theme_support( 'post-thumbnails' );
// add_theme_support( 'custom-logo' );
// add_theme_support( 'html5', array( 'search-form' ) );
// register_nav_menus( array(
//     'primary' => __( 'Primary Menu', 'caso' ),
// ) );

?>