<!DOCTYPE html>
<html dir="<?php echo is_rtl() ? 'rtl' : 'ltr'?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
        <link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
	</head>
    <body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<div id="wrapper-n-o" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'?>">
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
            	<tr>
                	<td align="center" valign="top">
						<div id="template_header_image">
	                		<?php
	                			if ( $img = get_option( 'woocommerce_email_header_image' ) ) {
	                				echo '<p style="margin-top:0;"><img src="' . esc_url( $img ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" /></p>';
	                			}
	                		?>
						</div>
                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container">
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- Header -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header-n-o">
                                        <tr>
                                            <td id="header_wrapper-n-o">
                                            	<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/icertech_0011__Group_.png">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Header -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- Body -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
                                    	<tr>
                                            <td valign="top" id="body_content-n-o">
                                                <!-- Content -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top">
                                                            <div id="body_content_inner">

																<div id="body_content_inner_intro">
																	<strong>Hi <?php printf( __( "%s", 'woocommerce' ), $order->billing_first_name ); ?>,</strong> Thank you for your order!
																</div>
																<hr>
																<div id="body_content_inner_intro_second">
																	YOUR ORDER
																</div>

<div id="order_details_n_o">
<?php
/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email ); ?>

<table class="td" cellspacing="0" cellpadding="6" style="width: 100%;" border="1">
	<thead>
		<tr>
			<th class="td" scope="col" style="text-align:left;"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th class="td" scope="col" style="text-align:left;"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo $order->email_order_items_table( array(
			'show_sku'      => $sent_to_admin,
			'show_image'    => true,
			'image_size'    => array( 150, 150 ),
			'plain_text'    => $plain_text,
			'sent_to_admin' => $sent_to_admin
		) ); ?>
	</tbody>
</table>

<?php do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email ); ?>
</div>
<table class="td" cellspacing="0" cellpadding="0" style="width: 100%;border:0;">
	<hr id="hr-2">
<tbody class="prod-table-tagline" style="border:0;">
	<tr style="border:0;">
		<td class="prod-table-tagline-inner" style="border:0;">
		Your order is on it's way!
		</td>
	</tr>
</tbody>
</table>

</div>
</table>

<table class="prod-feat-table" cellspacing="0" cellpadding="0" style="width: 100%;border:0;">
<tbody class="prod-feat-tagline" style="border:0;">
	<tr style="border:0;">
		<td class="prod-feat-tagline-inner" style="border:0;">
			PRODUCTS YOU MAY BE INTERESTED IN
		</td>
	</tr>
</tbody>
</table>

<table class="prod-feat-table-list" cellspacing="0" cellpadding="0" style="width: 100%;border:0;">
<tbody style="border:0;">
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/easi-foil-box/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0007_Layer-2.png">
			</a>
		</td>
	</tr>
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/gel-packs/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0006_Layer-3.png">
			</a>
		</td>
	</tr>
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/packaging-accessories/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0005_Layer-4.png">
			</a>
		</td>
	</tr>
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/insulated-envelopes/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0004_Layer-5.png">
			</a>
		</td>
	</tr>
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/ice-sheets/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0003_Layer-6.png">
			</a>
		</td>
	</tr>
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/moulded-polystyrene-boxes/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0002_Layer-7.png">
			</a>
		</td>
	</tr>
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/insulated-carry-bags/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0001_Layer-8.png">
			</a>
		</td>
	</tr>
	<tr class="prod-feat-table-list-item" style="border:0;">
		<td style="border:0;">
			<a href="http://www.icertech.co.uk/icertech_products/easi-foil-box/">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/cta2_0000_Layer-9.png">
			</a>
		</td>
	</tr>
</tbody>
</table>

<table class="footer-top" cellspacing="0" cellpadding="0" style="width: 100%;border:0;">
<tbody style="border:0;">
	<tr class="footer-top-inner" style="border:0;">
		<td style="border:0;">
			Icertech can also provide custom solutions for your company and will work with you to ensure that you can transport your products in the best possible way.
			<br><br>If you would like to find out more about Icertech’s products visit www.icertech.com or click on any of the products above.  You can also call us on 01978 661247 and see how they can help you today.
		</td>
	</tr>
</tbody>
</table>

<table class="footer-bottom" cellspacing="0" cellpadding="0" style="width: 100%;border:0;">
<tbody style="border:0;">
	<tr class="footer-bottom-inner" style="border:0;">
		<td style="border:0;" class="left">
			<a href="https://twitter.com/icertechuk">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/icertech_0002_Layer-1.png">
			</a>
		</td>
		<td style="border:0;" class="middle">
			<a href="#">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/icertech_0001_Layer-2.png">
			</a>
		</td>
		<td style="border:0;" class="right">
			<a href="https://www.linkedin.com/company-beta/310515?pathWildcard=310515">
				<img src="http://www.icertech.co.uk/wp-content/uploads/2017/01/icertech_0000_Layer-3.png">
			</a>
		</td>
	</tr>
</tbody>
</table>

