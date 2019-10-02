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

<div class="page-banners">

	<div class="page-banner-overlay"> </div>

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('page-banner-lg', array( 'class' => 'img-responsive img--full-width' ));
	} else { ?>
		<img class="img-responsive img--full-width" src="<?php bloginfo('template_directory'); ?>/img/PH-page--banner-lg-backup.jpg" alt="<?php the_title(); ?>" />
<?php } ?>

	<div class="page-banner-content">

		<h1><?php echo $banner__title__heading; ?></h1>

		<p>Whatever your requirements, Icertech is a one stop shop for the total temperature controlled solution - from packaging to delivery</p>


	</div>

	<div id="banner-scroll"><i class="fa fa-2x fa-chevron-down"></i></div>

</div><!--page-banners-->
