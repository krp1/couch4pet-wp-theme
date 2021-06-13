<?php
 
function enqueue_custom_assets() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );
    wp_enqueue_style( 'linearicons', get_template_directory_uri().'/css/linearicons.css' );
    wp_enqueue_style( 'font-awesome.min', get_template_directory_uri().'/css/font-awesome.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css' );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri().'/css/jquery-ui.css' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri().'/css/nice-select.css' );
    wp_enqueue_style( 'animate.min', get_template_directory_uri().'/css/animate.min.css' );
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/css/owl.carousel.css' );
    wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri().'/css/custom.css' );
    wp_enqueue_style( 'poppins', 'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700' );
    

    wp_enqueue_script( 'backbone');
    wp_enqueue_script( 'backbone-modal');
    wp_enqueue_script( 'wp_backbone');
    
    

    wp_enqueue_script( 'jquery224', get_template_directory_uri().'/js/vendor/jquery-2.2.4.min.js');
    wp_enqueue_script( 'popper', get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/vendor/bootstrap.min.js');
    wp_enqueue_script( 'maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA');
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/js/jquery-ui.js');
    wp_enqueue_script( 'easing', get_template_directory_uri().'/js/easing.min.js');
    wp_enqueue_script( 'hoverIntent', get_template_directory_uri().'/js/hoverIntent.js');
    wp_enqueue_script( 'superfish', get_template_directory_uri().'/js/superfish.min.js');
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri().'/js/jquery.ajaxchimp.min.js');
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js');
    wp_enqueue_script( 'nice-select', get_template_directory_uri().'/js/jquery.nice-select.min.js');
    wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.carousel.min.js');
    wp_enqueue_script( 'mail', get_template_directory_uri().'/js/mail-script.js');
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js');

}

function frontbanner_widgetarea_init() {

    register_sidebar( array(
        'name'          => 'frontbanner-widgetarea',
        'id'            => 'frontbanner-widgetarea'
    ) );

}
function frontbanner_widgetarea_social_init() {

    register_sidebar( array(
        'name'          => 'social-widgetarea',
        'id'            => 'social-widgetarea'
    ) );

}
add_action( 'widgets_init', 'frontbanner_widgetarea_init' );
add_action( 'widgets_init', 'frontbanner_widgetarea_social_init' );


add_action( 'wp_enqueue_scripts', 'enqueue_custom_assets' );
add_theme_support( 'post-thumbnails' );
add_theme_support ('terraclassifieds');

?>