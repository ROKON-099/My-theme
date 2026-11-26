<?php
if (!defined('ABSPATH')) exit;
function newtheme_setup(){
    load_theme_textdomain('newtheme', get_template_directory().'/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    add_theme_support('responsive-embeds');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    register_nav_menus(array('primary'=>__('Primary Menu','newtheme'),'footer'=>__('Footer Menu','newtheme')));
}
add_action('after_setup_theme','newtheme_setup');
function newtheme_assets(){
    wp_enqueue_style('newtheme-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',array(),'5.3.3');
    wp_enqueue_style('newtheme-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',array(),'1.11.3');
    wp_enqueue_style('newtheme-base',get_theme_file_uri('/assets/css/main.css'),array('newtheme-bootstrap'),'1.0.0');
    $styles=array('navbar','footer','home','shop','product','forms','account','responsive');
    foreach($styles as $style){
        wp_enqueue_style('newtheme-'.$style,get_theme_file_uri('/assets/css/components/'.$style.'.css'),array('newtheme-base'),'1.0.0');
    }
    wp_enqueue_style('newtheme-style',get_stylesheet_uri(),array('newtheme-base'),'1.0.0');
    wp_enqueue_script('newtheme-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',array(),'5.3.3',true);
    wp_enqueue_script('newtheme-main',get_theme_file_uri('/assets/js/main.js'),array(),'1.0.0',true);
    wp_enqueue_script('newtheme-navbar',get_theme_file_uri('/assets/js/components/navbar.js'),array('newtheme-main'),'1.0.0',true);
    wp_enqueue_script('newtheme-home',get_theme_file_uri('/assets/js/pages/home.js'),array('newtheme-main'),'1.0.0',true);
    wp_enqueue_script('newtheme-shop',get_theme_file_uri('/assets/js/pages/shop.js'),array('newtheme-main'),'1.0.0',true);
    wp_enqueue_script('newtheme-account',get_theme_file_uri('/assets/js/pages/account.js'),array('newtheme-main'),'1.0.0',true);
}
add_action('wp_enqueue_scripts','newtheme_assets');
function newtheme_widgets(){
    register_sidebar(array('name'=>__('Shop Sidebar','newtheme'),'id'=>'shop-sidebar','before_widget'=>'<div class="shop-widget mb-4">','after_widget'=>'</div>','before_title'=>'<h5 class="widget-title">','after_title'=>'</h5>'));
    register_sidebar(array('name'=>__('Footer Widgets','newtheme'),'id'=>'footer-widgets','before_widget'=>'<div class="footer-widget">','after_widget'=>'</div>','before_title'=>'<h5>','after_title'=>'</h5>'));
}
add_action('widgets_init','newtheme_widgets');
