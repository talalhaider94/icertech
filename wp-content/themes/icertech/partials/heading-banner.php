<?php

$pageID = get_queried_object();

if(is_page()){

	// 'post_type' = 'page' so set the title of the page, we are in the loop
	$banner__title__heading = get_the_title();

} elseif(is_home()){

	// this is the blog index
	$banner__title__heading = "Blog";
	// Set the $pageID as the ID of the page, so that data from that page can be used
	$pageID = get_option('page_for_posts');

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

	// We're on a category
	$banner__title__heading = single_cat_title('', false);

}elseif (is_shop()){

 // We're on a category of the blog
 $banner__title__heading = "Shop";

}

if($headingBanner__image = get_field('heading-banner__image', $pageID)){
    $headingBanner__image = $headingBanner__image['sizes']['page-banner-full'];
} else {
    $headingBanner__image = get_template_directory_uri().'/img/bbfb.jpg';
}

?>

<!-- .heading-banner -->
<div class="heading-banner" style="background-image: url(<?php echo $headingBanner__image; ?>);">
	<h1><?php echo $banner__title__heading; ?></h1>
</div>
<!-- /.heading-banner -->
