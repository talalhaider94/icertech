<!doctype html>



<html <?php language_attributes(); ?> class="no-js">



	<head>



		<meta charset="<?php bloginfo('charset'); ?>">



		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>







		<link href="//www.google-analytics.com" rel="dns-prefetch">



		<?php







			$image = get_field('website_favicon', 'option');







				if( !empty($image) ): ?>







				<link href="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" rel="shortcut icon">







			<?php endif; ?>







		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



		<meta name="viewport" content="width=device-width, initial-scale=1.0">







		<?php wp_head(); ?>






<style> 
.slide-7 {
    background: url('https://www.icertech.co.uk/wp-content/uploads/2019/05/enviro-background-watermark.png') no-repeat #80BC5A;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
}
.wpcf7-list-item:nth-child(4) {
    background-image: url("http://www.icertech.co.uk/wp-content/uploads/2019/05/pluumo-box.png") !important;
    background-size: cover;
    background-position: center 1px;
}
.wpcf7-list-item:nth-child(8) {
	background-image: url("http://www.icertech.co.uk/wp-content/uploads/2019/05/eco-box.png") !important;
}
.slide-7 .slick-slides-shop-btn .btn-primary {
    background: #003845;
    border-color: #003845;
}
</style>
	</head>



	<body <?php body_class(); ?>>







		<script>



			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){



			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),



			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)



			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



			ga('create', 'UA-77908536-1', 'auto');



			ga('send', 'pageview');



		</script>

		<script>

			jQuery(document).ready(function(){    

				if (jQuery('.pbd h2').length > 0) {

			  	 jQuery(".product_meta").addClass("bulk-none");

			}

		  });

	



		</script>

		<script>	



			jQuery(document).ready(function(){   

			if (jQuery('.pbd h2').length > 0) {

			  	var low = jQuery('.table--pbd tr:last-child td').text();

				jQuery('.product .summary.entry-summary .price .amount').html(low);

			}				    

		



			  });

	

		</script>









		<div class="top_nav">



			<?php ff_nav_top(); ?>



			<ul class="top_nav__shop">

			<li>

				<span class="mobile-tel-icon"><a href="tel:01978661247"><img class="phone-svg" src="<?php echo get_template_directory_uri(); ?>/img/phone-top-1.svg" alt="phone icertech"></a></span><span class="tel-number"><a href="tel:01978661247">Call us 01978661247</a></span>

			</li>

			

				<?php if (is_user_logged_in()) { ?>



					<li><a href="<?php echo wp_logout_url(); ?>"><img class="sign-top" src="<?php echo get_template_directory_uri(); ?>/img/sign-top.svg" alt="sign in icertech"> <span class="small-none">Log Out</span></a></li>



				<?php } else { ?>



					<li><a href="<?php echo site_url('my-account'); ?>"><img class="sign-top" src="<?php echo get_template_directory_uri(); ?>/img/sign-top.svg" alt="sign in icertech"> <span class="small-none">Sign In</span></a></li>



				<?php } ?>



				<li><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e('View your basket'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/basket-top-1.svg" alt="basket icertech"> <span class="small-none" style="margin-right: 5px;">Basket</span>



				<?php echo WC()->cart->get_cart_total(); ?></a>



				</li>



			</ul>



		</div>







		<!-- header -->



		<header class="header" role="banner">







				<!-- logo -->



				<div class="logo">



					<a href="<?php echo home_url(); ?>">







						<?php







							$image = get_field('website_logo', 'option');







								if( !empty($image) ): ?>







								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" alt="Ideal Recruitment Logo" class="logo-img"/>







							<?php endif; ?>







					</a>



				</div>



				<!-- /logo -->







				<!-- nav -->



				<nav class="header-menu navbar--main navbar navbar-default" role="navigation">







				    <!-- Brand and toggle get grouped for better mobile display -->



				    <div class="navbar-header">



					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar--main">



					        <span class="sr-only">Toggle navigation</span>



					        <span class="icon-bar"></span>



					        <span class="icon-bar"></span>



					        <span class="icon-bar"></span>



					      </button>



				    </div>







					<!-- Collect the nav links, forms, and other content for toggling -->



					<div class="collapse navbar-collapse" id="navbar--main"><?php ff_nav(); ?></div>







				</nav>



				<!-- /nav -->







				











		</header>

<!-- 		<div style="background:#f15e32;text-align:center;font-size:13px;padding:5px 0px;color:#fff;" class="holiday-off">
Please be advised that our office and warehouses will be closed between the following dates<br/>	
Closed: 12pm Friday 22nd December 2017<br/>
	    Re-open: 8.00 Tuesday 2nd January 2018

</div> -->

		<!-- /header -->





	

		<div id="quickform" class="contact-us__tab"><a href="#">Contact Us</a></div>