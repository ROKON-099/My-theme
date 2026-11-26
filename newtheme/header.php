<!doctype html>
<html <?php language_attributes(); ?>>
<head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<?php get_template_part('template-parts/header/topbar'); ?>
<header class="main-header">
 <div class="container header-inner">
  <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><?php if(has_custom_logo())the_custom_logo();else echo esc_html(get_bloginfo('name')); ?></a>
  <button class="navbar-toggler mobile-toggle" data-bs-toggle="collapse" data-bs-target="#siteNav" aria-label="Toggle menu"><i class="bi bi-list"></i></button>
  <div class="collapse navbar-collapse" id="siteNav">
   <nav class="main-nav">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(function_exists('wc_get_page_permalink')?wc_get_page_permalink('shop'):home_url('/shop')); ?>">Shop</a>
    <a href="<?php echo esc_url(home_url('/about')); ?>">About</a>
    <a href="<?php echo esc_url(home_url('/blog')); ?>">Journal</a>
    <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
   </nav>
  </div>
  <div class="header-tools">
   <form class="header-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>"><input name="s" type="search" placeholder="Search products..." value="<?php echo esc_attr(get_search_query()); ?>"><input type="hidden" name="post_type" value="product"><button aria-label="Search"><i class="bi bi-search"></i></button></form>
   <a class="tool-link" href="<?php echo esc_url(function_exists('wc_get_page_permalink')?wc_get_page_permalink('myaccount'):home_url('/my-account')); ?>" aria-label="Account"><i class="bi bi-person"></i></a>
   <a class="tool-link cart-tool" href="<?php echo esc_url(function_exists('wc_get_cart_url')?wc_get_cart_url():home_url('/cart')); ?>" aria-label="Cart"><i class="bi bi-bag"></i><span class="cart-count"><?php echo function_exists('WC')&&WC()->cart?esc_html(WC()->cart->get_cart_contents_count()):0; ?></span></a>
  </div>
 </div>
</header>
