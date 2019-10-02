<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Load colours
$bg              = get_option( 'woocommerce_email_background_color' );
$body            = get_option( 'woocommerce_email_body_background_color' );
$base            = get_option( 'woocommerce_email_base_color' );
$base_text       = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text            = get_option( 'woocommerce_email_text_color' );

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
?>
#wrapper {
    background-color: <?php echo esc_attr( $bg ); ?>;
    margin: 0;
    padding: 70px 0 70px 0;
    -webkit-text-size-adjust: none !important;
    width: 100%;
}

#template_container {
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    background-color: <?php echo esc_attr( $body ); ?>;
    border: 1px solid <?php echo esc_attr( $bg_darker_10 ); ?>;
    border-radius: 3px !important;
}

#template_header {
    background-color: <?php echo esc_attr( $base ); ?>;
    border-radius: 3px 3px 0 0 !important;
    color: <?php echo esc_attr( $base_text ); ?>;
    border-bottom: 0;
    font-weight: bold;
    line-height: 100%;
    vertical-align: middle;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

#template_header h1 {
    color: <?php echo esc_attr( $base_text ); ?>;
}

#template_footer td {
    padding: 0;
    -webkit-border-radius: 6px;
}

#template_footer #credit {
    border:0;
    color: <?php echo esc_attr( $base_lighter_40 ); ?>;
    font-family: Arial;
    font-size:12px;
    line-height:125%;
    text-align:center;
    padding: 0 48px 48px 48px;
}

#body_content {
    background-color: <?php echo esc_attr( $body ); ?>;
}

#body_content table td {
    padding: 48px;
}

#body_content table td td {
    padding: 12px;
}

#body_content table td th {
    padding: 12px;
}

#body_content p {
    margin: 0 0 16px;
}

#body_content_inner {
    color: <?php echo esc_attr( $text_lighter_20 ); ?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 14px;
    line-height: 150%;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

.td {
    color: <?php echo esc_attr( $text_lighter_20 ); ?>;
    border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
}

.text {
    color: <?php echo esc_attr( $text ); ?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

.link {
    color: <?php echo esc_attr( $base ); ?>;
}

#header_wrapper {
    padding: 36px 48px;
    display: block;
}

h1 {
    color: <?php echo esc_attr( $base ); ?>;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 30px;
    font-weight: 300;
    line-height: 150%;
    margin: 0;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
    text-shadow: 0 1px 0 <?php echo esc_attr( $base_lighter_20 ); ?>;
    -webkit-font-smoothing: antialiased;
}

h2 {
    color: <?php echo esc_attr( $base ); ?>;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 18px;
    font-weight: bold;
    line-height: 130%;
    margin: 16px 0 8px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
    color: <?php echo esc_attr( $base ); ?>;
    display: block;
    font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    line-height: 130%;
    margin: 16px 0 8px;
    text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
    color: <?php echo esc_attr( $base ); ?>;
    font-weight: normal;
    text-decoration: underline;
}

img {
    border: none;
    display: inline;
    font-size: 14px;
    font-weight: bold;
    height: auto;
    line-height: 100%;
    outline: none;
    text-decoration: none;
    text-transform: capitalize;
}
#wrapper-n-o {
    background-color: #fff;
    margin: 0;
    padding: 70px 0 70px 0;
    -webkit-text-size-adjust: none !important;
    width: 100%;
}
td#header_wrapper-n-o {
    padding: 0 0 40px 0;
}
#wrapper-n-o table#template_container {
    box-shadow: 0 0 0 !important;
    border: 0 !important;
}
#template_header-n-o {
    background-color: transparent;
    border-radius: 0 !important;
    line-height: 100%;
    vertical-align: middle;
}
#header_wrapper-n-o {
    text-align: center;
}
#body_content-n-o {
    background-color: #f6f6f6;
}
div#body_content_inner_intro strong {
    color: #00a7e0;
}
div#body_content_inner_intro {
    padding: 30px 0;
    text-align: center;
    font-size: 20px;
    font-family: 'Cantarell', sans-serif;
}
div#body_content_inner_intro_second {
    padding: 30px 0;
    text-align: center;
    font-size: 24px;
    font-family: 'Cantarell', sans-serif;
    color: #033844;
    font-weight: 800;
}
hr {
    width: 60px;
    border: 0;
    border-top: 4px solid #c6c6c6;
}
#wrapper-n-o .order_item td:nth-child(3) {
    display: none;
}
#wrapper-n-o .order_item td div {
    margin-bottom: 5px;
    float: left;
    margin: 0;
    margin-right: 12px;
    float: left;
    margin-right: 12px;
    margin: -30px 12px 0 0;
}

#wrapper-n-o th:nth-child(1) {
    padding-left: 171px;
    border:0;
}

#wrapper-n-o th:nth-child(2) {
    padding-left: 40px;
    border:0;
}

#wrapper-n-o .order_item td:nth-child(1) {
    padding-left: 0px;
    border:0 !important;
    border-color:#fff !important;
    
}

#wrapper-n-o .order_item td:nth-child(2) {
    padding-left: 40px;
    border-color:#fff !important;
    float:left;
}

div#order_details_n_o table {
	border:0 !important;
	font-family: 'Cantarell', sans-serif;
}

div#order_details_n_o th {
	border:0 !important;
	font-family: 'Cantarell', sans-serif;
    font-size: 18px;
    font-weight: 100;
}

div#order_details_n_o td {
	border:0 !important;
	font-family: 'Cantarell', sans-serif;
    font-size: 18px;
    font-weight: 500;
    color:#00a7e0;
}

#order_details_n_o {
	position: relative;
    font-family: 'Cantarell', sans-serif;
        padding: 30px;
    background: #fff;
}
.prod-table-tagline {
    padding: 0 30px;
    background: #fff;
    text-align: center;
    font-size: 20px;
    font-family: 'Cantarell', sans-serif;
}
.prod-table-tagline-inner {
    padding: 30px 0 40px;
}


hr#hr-2 {
    width: 500px !important;
    border-top: 1px solid #c6c6c6 !important;
    margin: 0 auto;
    position: absolute;
    margin-left: 30px;
}
.prod-feat-table {
	font-family: 'Cantarell', sans-serif;
    width: 100%;
    border: 0;
    color: #033844;
    background: #fff;
    padding: 30px 0;
    text-align: center;
    font-size: 20px;
}


tr.prod-feat-table-list-item {
    display: inline-block;
    margin-bottom: -4px;
}


table.footer-top {
	font-family: 'Cantarell', sans-serif;
    background: #fff;
    color: #858585;
    padding: 30px;
    text-align: center;
    font-size:14px;
}
table.footer-bottom {
    padding: 30px;
    background: #fbfbfb;
}
td.left {
    width: 255px;
    text-align:right;
    padding-right:5px
}
td.middle {
    width: 30px;
}
td.right {
    width: 255px;
    padding-left:5px
}
<?php
