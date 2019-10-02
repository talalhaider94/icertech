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

}elseif (is_shop()){

 // We're on a category of the blog
 $banner__title__heading = "Shop";

}

?>

<div class="shop-banners">

	<div class="page-banner-overlay"> </div>

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('page-banner', array( 'class' => 'img-responsive img--full-width' ));
	} else { ?>
		<img class="img-responsive img--full-width" src="<?php bloginfo('template_directory'); ?>/img/PH-page--banner-backup.jpg" alt="<?php the_title(); ?>" />
<?php } ?>

	<div class="page-banner-content">

		<h1><?php echo $banner__title__heading; ?></h1>

	</div>

</div><!--page-banners-->
