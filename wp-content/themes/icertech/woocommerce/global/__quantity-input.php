<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$product = $args['product'];

//echo '<pre>'.print_r($product, true).'</pre>';

$options = '';
for ( $count = $args['min_value']; $count <= $args['max_value']; $count = $count+$args['step'] ) {
	$selected = $count === $input_value ? ' selected' : '';
	$options .= '<option value="' . $count . '"'.$selected.'>' . $count ;
	$options .= ' at £'.number_format($product->price, 2).' each (£'.number_format(($count*$product->price), 2).')';
	$options .= '<span class="quantity_select__amount"></span>';
	$options .= '</option>';
}

echo '<div class="quantity_select"><select name="' . esc_attr( $input_name ) . '" title="' . _x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) . '" class="qty">' . $options . '</select></div>';
