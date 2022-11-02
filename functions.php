<?php

//Llamada al archivo de clases dgl
get_template_part( 'framework/class-dgl' );

// Define DGL URI para el tema hijo (por eso se pone stylesheet de template)
if( ! defined( 'DGL_URI' ) ) {
    define( 'DGL_URI', get_stylesheet_directory_uri() . '/' );
}

// Define DGL IMG
if( ! defined( 'DGL_IMG' ) ) {
    define( 'DGL_IMG', DGL_URI . 'assets/images/' );
}

//Define DGL JS
if( ! defined( 'DGL_JS' ) ) {
    define( 'DGL_JS', DGL_URI . 'assets/js/' );
}

//Carga de librerias
function dgl_enqueue_script(){
    
    $opt = get_option('dgl_opt');
    $dynamic_css = '';
    
    wp_enqueue_style('dgl-bootstrap-min-css', DGL_URI . 'assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('dgl-fa-all', DGL_URI . 'assets/fontawesome/css/all.min.css');
    
    wp_enqueue_style('style', get_stylesheet_uri(), array());
    wp_enqueue_style( 'dgl-dinamic', get_template_directory_uri() . '/assets/css/dinamic.css' );
    
    //Linkheader
    wp_enqueue_style('linkheader', get_template_directory_uri() . '/assets/css/linkheader.css', array(), '1.0.0');
    wp_enqueue_script( 'header-tabs', get_stylesheet_directory_uri() . '/assets/js/header-tabs.js', array( 'jquery' ), '1.0.0', true);
    
    //Owl Carousel
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('owl-carousel-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.3.4');
    
    wp_enqueue_script('dgl-jquery', DGL_JS . 'jquery.js');
    wp_enqueue_script('dgl-bootstrap-min-js', DGL_URI . 'assets/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('dgl-main-js', DGL_JS . 'main.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    //Custom Script
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
    
    /**
    * Options from Theme Settings
    */
    if ( class_exists('ReduxFrameworkPlugin') ) {
       
       /**
        * Banner Title-bar
        */
       if ( !empty($opt['banner_overlay_color']['from']) ) {
           $dynamic_css .= "
           .box-3 {
               background-image: -moz-linear-gradient(180deg, " . esc_attr($opt['banner_overlay_color']['from'] ) . " 0%, {$opt['banner_overlay_color']['to']} 100%);
               background-image: -webkit-linear-gradient(180deg, " . esc_attr($opt['banner_overlay_color']['from'] ) . " 0%, {$opt['banner_overlay_color']['to']} 100%);
               background-image: -ms-linear-gradient(180deg, " . esc_attr($opt['banner_overlay_color']['from'] ) . " 0%, {$opt['banner_overlay_color']['to']} 100%);
           }";
       }

    }
    wp_add_inline_style( 'dgl-dinamic', $dynamic_css);
}
add_action('wp_enqueue_scripts', 'dgl_enqueue_script');

//Importación de fuentes Google, si quieres otra fuente solo colocar una | al final de cada fuente y copiar la fuente
function google_fonts(){
wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
wp_enqueue_style( 'googleFonts' );
}

add_action('init', 'google_fonts');

function dglcreativo_setup_theme(){

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_post_type_support( 'page', array('excerpt') );

    add_image_size('blog', 966, 644, true);
    add_image_size( 'related', 240, 250, true); // Related post thumbnail
    add_image_size( 'related2', 350, 360, true); // Related post 2

}
add_action('after_setup_theme', 'dglcreativo_setup_theme');

//Register menu
function dglcreativo_menus(){
    register_nav_menus(array(
        'menu-1' => __('Menu Principal', 'dglcreativo')
    ));
    register_nav_menus(array(
        'footer-menu' => __('Menu Footer', 'dglcreativo')
    ));
    register_nav_menus(array(
        'top-menu' => __('Top Menu', 'dglcreativo')
    ));
}
add_action('init', 'dglcreativo_menus');

/**
 * Theme settings
 */
require get_template_directory() . '/options/opt_config.php';

//Functions theme dglcreativo
require get_template_directory() . '/framework/dgl-functions.php';

