<?php /* Template Name: Custom Packaging New*/ get_header(); ?>
<style>
#slider-package .slick-slide {
	background: #93589E;
}
#slider-package .slick-slider .slick-track, .slick-slider .slick-list {
	transform: translate3d(0,0,0);
}
#slider-package .slick-slide .row{
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 100px 9em;
}
#slider-package .slick-slide .contentBox{

}
#slider-package .slick-slide .contentBox h3{
	font-size: 60px;
	font-weight: 600;
	color: #fff;
	margin: 0 0 60px 0;
}
#slider-package .slick-slide .contentBox p{
	font-size: 30px;
	color: #fff;
	margin: 0 0 0 0;
}

.section-banner{
	padding: 100px 0px;
	background: #0b3944;
}
.section-banner h2{
	color:#fff;
	font-size:40px;
	font-weight: 600;
}
.section-banner p{
	color:#fff;

}
.section-banner b{
	color:#0FA8E1;
}
.section-banner h3{
	color:#0FA8E1;
	font-size:18px;
	text-align: center;
}
.small-block p{
	text-align: center;
}

.small-block img{

	display: block;
	margin: 0 auto;

}
.contact-section{
	padding: 90px;
}
.contact-section h2{
	text-align: center;
	font-size: 40px;
	color:#0B3944;
	margin-top: 0px;
}
.contact-section h4{
	text-align: center;
	font-size: 18px;
	color:#0B3944;
	font-weight: 400;
	margin-bottom: 25px;
}
.product-slider h2{
	text-align: center;
	font-size: 40px;
	color:#0B3944;
	margin-top: 0px;
}
.product-slider h4{
	text-align: center;
	font-size: 18px;
	color:#0B3944;
	font-weight: 400;
	margin-bottom: 25px;
}
section.contact-section input {
	width: 100%;
	padding: 12px;
	margin-top: 10px;
}
.wpcf7-form .row{
	margin-bottom: 15px;
}
.wpcf7-form .gdpr{
	color:  #0b3944 !important;
	text-align: center;
}
.wpcf7-form .gdpr a{
	color:  #0b3944 !important;
}
.wpcf7-form .gdpr p{
	font-weight: 700;
}
.wpcf7-form .gdpr span{
	margin-left: 5px;
}
.SubmitBox {
	margin-top: 16px;
}
input.wpcf7-form-control.wpcf7-submit {
	width: 160px;
	margin: 0 auto;
	background: #f16522;
	border:none;
	color:#fff;
	display: block;
	font-weight: bold;
	font-size: 16px;
}
.product-slider{
	padding: 90px 0px;
	background: #fafafa;
}
.package-slide-content img {
	width: 80%;
}
.slide-title-top{
	margin-bottom: 35px;
}

.product-slider .slick-prev:before{	
	color:#0fa8e1;
}
.product-slider .slick-next:after{	
	color:#0fa8e1;
}
.product-slider .slick-prev{	
	left: 0px;
}
.product-slider .slick-next{	
	right: 0px;
}
.image-slider .slick-prev:before{	
	color:#0b3944;
}
.image-slider .slick-next:after{	
	color:#0b3944;
}
.packaging-guide h2{
	text-align: center;
	font-size: 40px;
	color:#fff;
	margin-top: 0px;
}
.packaging-guide h4{
	text-align: center;
	font-size: 18px;
	color:#fff;
	font-weight: 400;
	margin-bottom: 25px;
}
.packaging-guide{
	background: #93589e;
	padding: 90px 0px;
}

.row.flexRow {
	display: flex;
	justify-content: center;
	flex-direction: row;
	flex-wrap: wrap;
	margin-bottom: 80px;
}

.row.flexRow:nth-child(2n+1) {
	flex-direction: row-reverse;
}
.row.flexRow img {
	height: 200px;
	margin: 0 auto;
}
.row.flexRow.showDesktop, .row.flexRow.showMobile:first-child {
	margin-top: 30px;
}
.row.flexRow.showDesktop img{
	height: 100%;
}
.row.flexRow h4{
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	color:  #fff;
	margin-bottom: 0;
	margin-top: 8mm;
}
.row.flexRow p{
	font-size: 16px;
	text-align: center;	
	color:  #fff;
}
.row.flexRow.showMobile .col-md-4::after {
	border: 3px solid #fff;
	position: absolute;
	width: auto;
	height: 55px;
	content: "";
	left: 50%;
	border-radius: 5px;
}
.row.flexRow.showMobile:last-child .col-md-4::after {
	content: initial;
}


.text-banner{
	background: #794881;
	padding: 100px;
}
.text-banner h3{
	color:#fff;
	text-align: center;
	font-size: 30px;
	line-height: 50px;
}
.text-banner h3 a{
	color:#fff;
}
.qta-section{
	padding: 90px 0px;
	background: #0b3944;
}
.qta-section h2{
	text-align: center;
	color: #FFFFFF;
	font-size: 40px;
}
.qta-section h3{
	text-align: center;
	color: #FFFFFF;
	font-size: 24px;
	text-transform: normal;
	margin-top: 0px;
	margin-bottom: 30px;
}
.qta-section p{
	text-align: center;
	color: #FFFFFF;
	font-size: 18px;
}
.btn-contact {
	text-align: center;
	margin-top: 45px;
}
.btn-contact a{
	background: #f16522;
	border: none;
	color: #fff;
	display: block;
	width: 200px;
	margin: 0 auto;
	padding: 10px;
}
@media (max-width: 1280px){
	#slider-package .slick-slide .row {
		padding: 80px 5.5em;
	}
	#slider-package .slick-slide .contentBox h3 {
		font-size: 32px;
	}
	#slider-package .slick-slide .contentBox p {
		font-size: 24px;
	}

	.section-banner h2,
	.contact-section h2,
	.product-slider h2,
	.packaging-guide h2,
	.text-banner h3,
	.qta-section h2 {
		font-size: 32px;
	}

	.contact-section {
		padding: 90px 0;
	}

	.contact-section h4,
	.product-slider h4,
	.packaging-guide h4,
	.qta-section p  {
		font-size: 16px;
	}

	.text-banner {
		padding: 100px 0;
	}
	.text-banner h3 br {
		display: none;
	}

	.qta-section h3 {
		font-size: 21px;
	}
}
@media (max-width: 991px){
	#slider-package .slick-slide .row {
		padding: 25px 1em;
	}
	#slider-package .slick-slide .contentBox h3 {
		font-size: 28px;
		margin: 0 0 30px 0;
	}
	#slider-package .slick-slide .contentBox p {
		font-size: 21px;
	}

	.section-banner h2 {
		text-align: center;
	}
	.section-banner p {
		text-align: center;
	}
	.section-banner .small-block [class*="col"] {
		margin-bottom: 40px;
	}
	.section-banner .small-block [class*="col"]:first-of-type{
		margin-top: 40px;
	}
	.section-banner .small-block [class*="col"]:last-of-type{
		margin-bottom: 0px;
	}

	.section-banner h2,
	.contact-section h2,
	.product-slider h2,
	.packaging-guide h2,
	.text-banner h3,
	.qta-section h2 {
		font-size: 28px;
	}

	.showDesktop{
		display: none!important;
	}
}
@media (max-width: 767px){
	#slider-package .slick-slide .row {
		flex-wrap: wrap;
		padding: 50px 1em;
	}
	#slider-package .slick-slide .contentBox h3 {
		margin: 0 0 15px 0;
		text-align: center;
	}
	#slider-package .slick-slide .contentBox p {
		text-align: center;
		margin-bottom: 25px;
	}

	.section-banner h2,
	.contact-section h2,
	.product-slider h2,
	.packaging-guide h2,
	.text-banner h3,
	.qta-section h2 {
		font-size: 24px;
	}	
}
@media (max-width: 480px){
	#slider-package .slick-slide .contentBox p br {
		display: none;
	}	
}
@media (min-width: 990px){
	.showMobile{
		display: none!important;
	}
}
@media (min-width: 992px){
	.offset-md-1 {
		margin-left: 8.333333%;
	}	
}
body.page-id-1790 [aria-describedby="slick-slide11"] {
	background-color: #794882 !important;
}

</style>

	<div class="slider-package" id="slider-package">
		<?php
		if( have_rows('slider') ):
			while ( have_rows('slider') ) : the_row();?>

			<div> 
				<div class="container-fluid ">
					<div class="row">
						<div class="col-md-7 contentBox">
							<h3><?php the_sub_field('slide_title'); ?></h3>
							<?php the_sub_field('slide_description'); ?>
						</div>

						<div class="col-md-5 imageBox">
							<img class="img-responsive" src="<?php the_sub_field('image'); ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		   

			<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<section class="section-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2><?php the_field('left_title'); ?></h2>
					<p>
						<b><?php the_field('left_description_first_paragraph'); ?></b>
					</p>
					<p>
						<?php the_field('left_description_second_paragraph'); ?>
					</p>
				</div>
				<div class="offset-md-1 col-md-7">
					<div class="row small-block">
					
					<?php if( have_rows('columns') ): ?>
						<?php while ( have_rows('columns') ) : the_row(); ?>

							<?php if( get_row_layout() == 'box_features' ): ?>

								<div class="col-md-6">
									<img class="img-responsive" src="<?= the_sub_field('image') ?>" alt="Box Image">
									<h3><?= the_sub_field('title') ?></h3>
									<?= the_sub_field('description') ?>
								</div>							

							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?= the_field('form__title'); ?></h2>
					<h4><?= the_field('form_description'); ?></h4>

					<?php $shortcode = get_field('form_shortcode'); ?>
					<?php echo do_shortcode( $shortcode ); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="product-slider">
		<div class="container">
			<div class="row slide-title-top">
				<div class="col-md-12">
					<h2><?= the_field('product_box_title'); ?></h2>
					<h4><?= the_field('product_box_description'); ?></h4>
				</div>
			</div>

			<div class="row">
				<div class="slider-for" id="product-slide-packaging">
					<?php if( have_rows('products_slides') ): ?>
						<?php while ( have_rows('products_slides') ) : the_row(); ?>

							<div class="package-slide-content"> 
								<a target="_blank" href="<?php the_sub_field('slide_link'); ?>">
									<img src="<?php the_sub_field('slider_image'); ?>">
								</a>
							</div>
						  
						<?php  endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="image-slider">
		<div class="slider-for" id="image-slider">
			<?php
			// check if the repeater field has rows of data
			if( have_rows('image-slider') ):
				// loop through the rows of data
				while ( have_rows('image-slider') ) : the_row();?>
				   <div class="image-slider-content"> 
						<img class="img-responsive" src="<?php the_sub_field('image'); ?>">
				   </div>				      
			   <?php  endwhile;
			else :
				// no rows found
			endif;
			?>

		</div>
	</section>


	<section class="packaging-guide">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?= the_field('packaging_title'); ?></h2>
					<h4><?= the_field('packaging_description'); ?></h4>
				</div>
			</div>
			<div class="row flexRow showDesktop">
				<div class="col-md-10">
					<img class="img-responsive" src="<?php the_field('imageGuide'); ?>" alt="Packaging Guide">
				</div>
			</div>
			<?php $layouts = get_field('guide_steps'); ?>
			<?php if( $layouts ): ?>

				<?php foreach ($layouts as $value) : ?>
					<div class="row flexRow showMobile">
						<div class="col-md-4">
							<img class="img-responsive" src="<?php echo $value['imageicon']; ?>" alt="Enquiry">
							<h4><?php echo $value['step_title']; ?></h4>
							<p><?php echo $value['step_description']; ?></p>
						</div>
					</div>		
				<?php endforeach; ?>

			<?php endif; ?>	
		</div>
	</section>


	<section class="text-banner">
		<div class="container">
			<div class="row">
				<?php echo the_field('text-wysiwig'); ?>
			</div>
		</div>
	</section>


	<section class="qta-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2> <?php echo the_field('titlecta'); ?> </h2>
					<h3> <?php echo the_field('subtitlecta'); ?> </h3>
					<p> <?php echo the_field('paragraphcta'); ?> </p>	

					<div class="btn-contact"><a href="<?php echo the_field('linkcta'); ?>"><?php echo the_field('link_label'); ?></a></div>	
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>

<script>
	jQuery( document ).ready(function($) {
		$('#slider-package').slick({
			dots: false,
			arrows: true,
			autoplay: false,
			swipeToSlide: true,
		});
		$('#product-slide-packaging').slick({
			dots: false,
			infinite: true,
			speed: 500,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
				  breakpoint: 640,
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true
				  }
				}
			]
		});
	});

</script>

