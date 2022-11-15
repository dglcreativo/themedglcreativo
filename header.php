<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage dglcreativo
 * @since dglcreativo 1.0
 */
$opt = get_option('dgl_opt');

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="main">
	<section id="top">
            
            <?php
            $layout_header = $opt['is_layout_header'];

            if($layout_header == '1'){
                $layout = $layout_header = '1' ? 'full': 'grid';
            } else if($layout_header == '2'){
                $layout = $layout_header = '2' ? 'grid': 'grid';
            } else if($layout_header == '3'){
                $layout = $layout_header = '3' ? 'invert': 'grid';
            }
            
            get_template_part('template-parts/header/header', $layout);
            
            ?>
            
            <?php get_template_part('partials/popup-menu') ?>
            
            <?php
            
            $is_slider = isset($opt['is_slider']) ? $opt['is_slider'] : '1';
            
            if(is_front_page()):
                if($is_slider == 1){
                    get_template_part('partials/carousel');
                } else{
                    get_template_part('partials/titlebar');
                }
            else:
                get_template_part('partials/titlebar');
            endif;
            
            ?>
            <?php 
            $is_link_header = function_exists( 'get_field' ) ? get_field( 'is_link_header' ) : '1';
            $is_link_header = isset($is_link_header) ? $is_link_header : '1';
            
            if(!is_404()):
            if($is_link_header == '1'){
            ?>
            <div class="linkheader mb-4">
                <?php get_template_part('partials/otheroption'); ?>
            </div>
            <?php } 
            endif;?>

        </section>

	<div id="content" class="site-content">