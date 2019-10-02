<?php
    /* Template Name: Sectors Food New */
    get_header();
?>
<style>
	.heading-banner{
		padding: 140px 0;
	}
	.row.scale-box:nth-child(1) {
    background: #15A6E0;
}
.row.scale-box:nth-child(2) {
    background: #008FC3;
}
.row.scale-box:nth-child(3) {
    background: #0080AD;
}
.row.scale-box {
    position: relative;
    overflow: hidden;
}
.benefit-image {
    position: absolute;
    top: 10px;
    right: -40px;
}
.scale-box h2 {
    font-size: 38px;
    color: #fff;
    text-align: left
}
.scale-box p {
    color: #fff;
    font-size: 14px;
    text-align: left
}
.left-box {
    padding-bottom: 125px;
    padding-top: 70px;
    margin-left: 25%;
}
.view-btn {
    margin-top: 25px;
    float: left;

}
.view-btn a {
	color:#fff;
	text-decoration: none;
	background: #003845;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
	font-size: 14px;
	transition: 0.5s;
}
.view-btn a:hover{
 	background: #03242c;
}
.view-btn-b {
    float: left;
    margin-top: 25px;
    margin-left: 20px;
    


}
.view-btn-b a {
    color: #fff;
    background: #f15e32;
    border-radius: 5px;
	font-size: 14px;
	transition: 0.5s;
    padding: 10px 15px;
}
.view-btn-b a:hover{
 	background: #03242c;
}
.performance-container{
	background: #09A7E0;
	padding-top: 50px;
	padding-bottom: 50px;
}
.perf-title{
	text-align: center;
	color:#fff;
	margin-top: 0px;
}
.perf-image {
    border-bottom: solid 1px #fff;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 20px;
    padding-bottom: 20px;
    height: 360px;
}

.title-perf {
    border-bottom: solid 1px #fff;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 20px;
    color: #fff;
}
.performance{
	border-bottom: solid 1px #fff;
	color: #fff;
    padding-left: 15px;
    padding-right: 15px;
}
.performance h4 {
    color: #fff;
    margin-bottom: 3px;
}

.benefit{
	border-bottom: solid 1px #fff;
	color: #fff;
    padding-left: 15px;
    padding-right: 15px;
}
.benefit h4{
	color: #fff;
	margin-bottom: 3px;

}
.benefit ul {
    margin: 0px;
    padding: 0;
    margin-bottom: 10px;
}

.no-pad{
	padding-right: 0px;
	padding-left:0px;
}
.btn-perf {
    text-align: center;
    margin-top: 45px;
    display: inline-block;
}
.btn-perf a{
	color:#fff;
	text-decoration: none;
	background: #003845;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
	font-size: 14px;
	transition: 0.5s;
}
.btn-perf a:hover{
 	background: #03242c;
}
.more-title{
	color:#09A7E0;
	margin-bottom: 30px;
}
.white-bg{
	padding-top: 20px;
	padding-bottom: 20px;
	position: relative;
}
.slick-slide img {
    display: block;
    margin: 0 auto;
    height: 146px;
}
.slick-slide h3{
	color:#003845;
	font-size: 16px;
}
.bg-blue {
    background: #003845;
    height: 370px;
    color:#fff;
}
.bg-blue h2 {
    color: #fff;
    font-size: 43px;
    margin-top: 93px;
}
.bg-blue p {
    width: 570px;
    margin: 0 auto;
}
.left-image {
    width: 100%;
    height: 370px;
}
a:hover{
	text-decoration: none;
}
.btn-more {
    background: #09A7E0;
    padding: 10px 15px;
    margin-top: 13px;
    display: inline-block;
    border-radius: 5px;
    color:#fff;
    transition:0.5s;
}

 .slick-prev::before{
   display: none;
 }

.slick-next::after {
	display: none;
}
.benefit li::before {
    content: "•";
    padding-right: 8px;
}
.benefit li {
    display: inline-block;
    width: 100%;
}
.find a {
    color: #fff;
    margin-top: 0px;
    border: solid 1px #fff;
    padding: 8px 20px;
    border-radius: 5px;
    transition: 0.5s;
}
.find a:hover{
  background: #003845;
  border: solid 1px #003845;

}
.find {
    margin-top: 20px;
}
.container-relative{
  position: relative;
}
.hover-btn {
    position: absolute;
    width: 100px;
    height: 100px;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(9, 167, 224, 0.65);
    transition: 0.5s;
    opacity: 0;
}
.hover-btn a {
    top: 50%;
    position: absolute;
    left: 0;
    right: 0;
    background: #ef510e;
    width: 110px;
    margin: 0 auto;
    border-radius: 4px;
    padding: 3px 10px;
    color:#fff;
    opacity:0;
    transition: 0.5s;
}
.hover-btn:hover a{
  opacity:1;
}
.hover-btn:hover{
  opacity:1;
}
@media (max-width: 1199px) {
.benefit ul{
 height:135px;
}
.benefit ul:last-child {
    height: 160px;
}
}
@media (max-width: 991px) {
.benefit ul{
 height:auto;
}
.benefit ul:last-child {
    height: auto;
}
.left-box {
    margin-left: 9%;
}
.perf-image{
	height: auto;
}
.perf-image img{
	display: block;
	margin:0 auto;
}
.bg-blue h2 {
    margin-top: 0;
    padding-top: 86px;
}
}
@media (max-width: 570px) {
.bg-blue p {
    width: auto;
    margin: 0 auto;
}
}

@media (max-width: 480px) {
.left-box {
    margin-left: 0%;
}
.bg-blue{
	height: auto;
	padding-bottom: 40px;
}
.bg-blue h2 {

    padding-top: 30px;
}
}
</style>

	<main role="main">
		<!-- section -->
		<section class="sectors">
  
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if($headingBanner__image = get_field('heading-banner__image', $pageID)){
				    $headingBanner__image = get_field('heading-banner__image');
				} else {
				    $headingBanner__image = get_template_directory_uri().'/img/bbfb.jpg';
				}

				?>

				<div class="heading-banner" style="background-image: url(<?php echo $headingBanner__image['url']; ?>);">
					<h1><?php the_field('banner_title'); ?><br/><?php the_field('banner_subtitle'); ?></h1>
				</div>

				<div id="scroll-to-main-content" class="container-fluid">

					<div class="container pp--padded">

						<?php the_content(); ?>

				 	</div>

			  </div>
				<div class="container-fluid">
	           <?php 
				if (get_field('benefit_box')): ?>
          	   <?php while(has_sub_field('benefit_box')): ?>		
			  <div class="row scale-box">
  				<div class="col-md-5 col-sm-6">
  					<div class="left-box">
    					<h2><?php the_sub_field ('title'); ?></h2>
  						<p><?php the_sub_field ('text'); ?></p>		
  						<div class="view-btn"><a href="<?php the_sub_field ('link'); ?>">View Benefits</a></div>
  						<div class="view-btn-b"><a href="<?php the_sub_field ('shop_link'); ?>">Shop Now</a></div>				
  					</div>
  				</div>
  				<div class="col-md-7 col-sm-6">
  					<img class="benefit-image img-responsive" src="<?php the_sub_field ('image'); ?>" alt="">
  				</div>
  				
  				
			  </div>

			  <?php endwhile; endif; ?>					
				</div>


                <?php get_template_part('partials/testimonials'); ?>

                <div class="performance-container">
                	<h2 class="perf-title">PRODUCT PERFORMANCE TABLE</h2>
                	<div class="container">
		                <?php 
						if (get_field('performance_table')): ?>
		          	   <?php while(has_sub_field('performance_table')): ?>	
                		<div class="col-md-4 no-pad">
                			<div class="perf-image">
                				<img class="img-responsive" src="<?php the_sub_field ('image'); ?>">
                			</div>
                			<h3 class="title-perf">
                				<?php the_sub_field ('title'); ?>
                			</h3>
                			<div class="performance">
                				<h4>PERFORMANCE</h4>
                				<p><?php the_sub_field ('performance'); ?></p>
                			</div>
                			<div class="benefit">
                				<h4>Benefits</h4>
								<?php the_sub_field ('benefits'); ?>
                			</div>
                      <div class="find">
                        <a href="<?php the_sub_field ('button_link'); ?>">Find Out More</a>
                      </div>
                		</div>
                		<?php endwhile; endif; ?>		

						<div class="btn-perf"><a href="http://www.icertech.co.uk/wp-content/uploads/2016/05/Icertech_Qualification_Report.pdf">View full performance PDF</a></div>
                	</div>
                </div>

                <div class="white-bg">
                	<div style="position:relative;" class="container">
                		<h2 class="more-title">VIEW OTHER PRODUCTS</h2>


    <div class="slider" id="supply-bannert">

                  <?php 
                   $the_query = new WP_Query(array(
                	 'post_type' => 'product',
                    'posts_per_page' => 15 ,
                     'orderby'  => 'rand',
                    )); 
                   while ( $the_query->have_posts() ) : 
                   $the_query->the_post();
                  ?>
            	<div class="slick-container">

                  <div class="container-relative">
                          <a href="<?php the_permalink();?>">
                            <?php echo get_the_post_thumbnail( $post_id, 'full', array('class' => 'img-responsive thumb-post')); ?>
                            <h3 class="product-title"><?php the_title();?></h3>
                            <div class="hover-btn"><a href="<?php the_permalink();?>">Shop Now</a></div>
                          </a>
                    
                  </div>
          


              </div>
			  <?php 
                   endwhile; 
                   wp_reset_postdata();
               ?>
           	

    </div>
    	 
      			<button class="slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/l-arrow.png" alt="Logo" class="img-responsive"></button>
				<button class="slick-next"><img src="<?php echo get_template_directory_uri(); ?>/img/r-arrow.png" alt="Logo" class="img-responsive"></button>	   			
    		
    	

	</div>

 				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script type="text/javascript" src="http://icertech.co.uk/wp-content/themes/icertech/assets/slick/slick.min.js"></script>
<script>
$(".slider" ).slick({
    autoplay: false,
    dots: false,
    mobileFirst: false,
    prevArrow: $(".slick-prev"),
    nextArrow: $(".slick-next"),
            arrows: true,
            infinite: true,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 3,
            slidesToScroll: 1,
            initialSlide: 0,
       responsive: [
    {

      breakpoint: 1920,
      settings: {
            arrows: true,
            infinite: true,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 4,
            slidesToScroll: 1,
            initialSlide: 0,
      }
    },

    {

      breakpoint: 767,
      settings: {
            arrows: true,
            infinite: true,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 3,
            slidesToScroll: 1,
            initialSlide: 0,
      }
    },

    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]

});
  </script>


                	</div>	
                </div>

				<div class="container-fluid">
					<div class="row">
						<div style="background:url('http://icertech.co.uk/wp-content/themes/icertech/page-templates/bottom-food.jpg'); min-height: 370px;background-size: cover;" class="col-md-6 no-pad">
							
						</div>
						<div class="col-md-6 no-pad bg-blue">
							<h2>CUSTOM PACKAGING</h2>
							<p>Custom packaging can be a great way to promote your brand and give a highly professional look to your customers.  We make it possible for you to incorporate 
							bespoke packaging into your deliveries and offer a wide range of products that can be customised to meet your needs.</p>
							<a class="btn-more" href="http://www.icertech.co.uk/tailored-service/">Read More</a>
						</div>
					</div>
				</div>


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php// get_sidebar(); ?>

<?php get_footer(); ?>
