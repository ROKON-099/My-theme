<?php
if (!defined('ABSPATH')) exit;
function newtheme_wc_columns(){return 4;}
add_filter('loop_shop_columns','newtheme_wc_columns');
function newtheme_wc_products_per_page(){return 12;}
add_filter('loop_shop_per_page','newtheme_wc_products_per_page',20);
function newtheme_wc_support(){if(class_exists('WooCommerce')) add_theme_support('woocommerce');}
add_action('after_setup_theme','newtheme_wc_support');
