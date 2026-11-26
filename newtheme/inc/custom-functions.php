<?php
if (!defined('ABSPATH')) exit;
function newtheme_cart_count_fragment($fragments){
    if(function_exists('WC') && WC()->cart){
        ob_start(); ?><span class="cart-count"><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></span><?php
        $fragments['span.cart-count']=ob_get_clean();
    } return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments','newtheme_cart_count_fragment');
function newtheme_body_classes($classes){ if(is_woocommerce()) $classes[]='newtheme-commerce'; return $classes; }
add_filter('body_class','newtheme_body_classes');
function newtheme_excerpt_length($length){return 22;}
add_filter('excerpt_length','newtheme_excerpt_length',999);
function newtheme_pagination(){ the_posts_pagination(array('mid_size'=>2,'prev_text'=>'<i class="bi bi-arrow-left"></i>','next_text'=>'<i class="bi bi-arrow-right"></i>')); }
