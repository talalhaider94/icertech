<?php

if(is_page()){

	// 'post_type' = 'page' so set the title of the page, we are in the loop
	$banner__title__heading = get_the_title();

} elseif(is_home()){

	// this is the blog index
	$banner__title__heading = "News";

} elseif(is_category()){

	// We're on a category of the blog
	$banner__title__heading = single_cat_title('', false);

} elseif (is_single()){

	// 'post_type' = 'post' set the title to be the post title
	// Previously we were setting the category title in the banner. Avoiding that for consistency, semantic markup, and SEO.
	//$banner__title__heading__cat = current(get_the_category());

	//$banner__title__heading = $banner__title__heading__cat->name;
	$banner__title__heading = get_the_title();


} elseif (is_tax()){

	// We're on a category of the blog
	$banner__title__heading = single_cat_title('', false);

}

?>
<div class="product-banners">
	<?php $buttonLink = get_field('view_range_link'); ?> 
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<?php else :
	$image = get_bloginfo( 'stylesheet_directory') . '/img/PH--product-banner-bg.png'; ?>
	<?php endif; ?>
	<div class="banners--product-bg" style="background-image: url('<?php echo $image[0]; ?>')">


		<div class="banners--product-container">

				<div class="banners--product-title"><h1><?php echo $banner__title__heading; ?></h1></div>

				<div class="banners--product-excerpt"><P><?php the_excerpt(); ?></p></div>
		
				<div class="btnContainer">
					<a class="viewrange-btn" title="View Range" href="<?php echo $buttonLink; ?>">View range</a>
					<a class="requestsample-btn" title="Sample Request" href="<?php the_permalink(300); ?>">Sample request</a>			
				</div>

		</div>

</div>

</div><!--page-banners-->

<div class="buy-now__tab"><a href="/shop/">Buy now</a></div>

<div class="request__tab"><a href="/sample-request/">Request a sample</a></div>
