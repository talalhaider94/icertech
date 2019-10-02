<?php
/**
* Plugin Name: WooCommerce - Add Cart to nav / Update cart totals
* Plugin URI: http://fotofire.com
* Description: Set auto update for woocommerce cart
* Version: 1.0
* Author: Christopher Beck
* Author URI: Author's website
* License: custom-cart-update
*/


add_filter('wp_nav_menu_items','add_cart_items', 10, 3);
function add_cart_items( $items, $args ) {
    if( $args->theme_location == 'top-menu')  {
      global $woocommerce;

    $items .= '<li class="menu-item-cart-item"><a class="cart-contents" href="'.$woocommerce->cart->get_cart_url().'" title="View your shopping cart">'.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count), $woocommerce->cart->cart_contents_count).' - '. $woocommerce->cart->get_cart_total().'</a></li>';

	}
    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'top-menu') {
        $items .= '<li class="login-logout-link"><a href="'. wp_logout_url() .'">Log Out |</a></li>';
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'top-menu') {
        $items .= '<li class="login-logout-link"><a href="'. site_url('wp-login.php') .'">Log In |</a></li>';
    }
    return $items;
}
