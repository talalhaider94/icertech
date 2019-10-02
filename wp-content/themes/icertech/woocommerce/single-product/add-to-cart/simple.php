<style>
	.single_add_to_cart_button{
		transition: 0.35s all ease-in-out;
		margin-left: 5px;
	}
	.productInfoBtn {
		padding: 5px 15px;
		background: #f9844e;
		display: inline-block;
		margin-left: 10px;
		color: #fff;
		font-weight: 700;
		border-radius: 3px;
		transition: 0.35s all ease-in-out;
	}
	.productInfoBtn:hover {
		text-decoration: none;
		background: #0084B3;
		color: #fff;
	}
	.disableBtn{
	   pointer-events: none;
	   cursor: default;		
	   background: #F5855B;
	   color: #F7A789;
	}	
</style>
<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
global $woocommerce;

if ( ! $product->is_purchasable() ) {
	return;
}

?>

<?php
	// Product ID for testing checkout button
	$productID = $product->id;


	// Availability
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" method="post" enctype='multipart/form-data'>
	 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	 	<?php
	 		if ( ! $product->is_sold_individually() ) {
	 			woocommerce_quantity_input( array(
	 				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
	 				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
	 				'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
	 			) );
	 		}
	 	?>

	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

	 	<button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

		<?php /*

		--===-- IN CASE OF KEEPING VIEW MORE INFO --===--
		
		<?php $moreinfoLink = get_field('product_link'); ?>

		<a href="<?php if($moreinfoLink){echo $moreinfoLink;}else{echo '#';} ?>" class="productInfoBtn"> View more info </a>

		*/ ?>

		
		<?php 
			if(woo_in_cart($productID)) {
				echo '<a class="productInfoBtn" href="'.$woocommerce->cart->get_checkout_url().'">Go to checkout</a>';
			}else{
				echo '<a class="productInfoBtn disableBtn" href="'.$woocommerce->cart->get_checkout_url().'">Go to checkout</a>';
			}	ssssss
		?>

	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
