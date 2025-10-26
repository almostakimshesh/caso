<?php
add_action( 'wp_enqueue_scripts', 'caso_enqueue_styles' );
function caso_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'custom-animate', get_template_directory_uri() . '/assets/css/custom-animate.css' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css' );
    wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/css/hover.css' );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
    wp_enqueue_style( 'jquery-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
    wp_enqueue_style( 'jquery-mCustomScrollbarmin', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'caso-style', get_stylesheet_uri() );


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
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.js' );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '1.0.0', true );
    wp_enqueue_script( 'knob', get_template_directory_uri() . '/assets/js/knob.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
}

?>
