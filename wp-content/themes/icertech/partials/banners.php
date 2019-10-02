<?php

if( have_rows('slick_slides') ):
echo '<div class="slider-for" id="banners">';
 	// loop through the rows of data
    while ( have_rows('slick_slides') ) : the_row();
    // display a sub field value
    //vars
    $image = get_sub_field('image');
    ?>
	<div class="slick-container">

    <div class="slick-overlay"></div>

    <img src="<?php echo $image['url']; ?>" class="img-responsive img--full-width"/>

    <div class="slide_content">

      <div class="slick-slides-link"><a href="/products/">Product</a></div>

      <div class="slick-slides-title"><?php the_sub_field("slide_title"); ?></div>

      <div class="slick-slides-sub-title"><?php the_sub_field("slide_sub_title"); ?></div>




      <div class="slick-slides-shop-btn"><a href="/shop/"><div class="btn btn-primary">Shop Now</div></a></div>

    </div>

  </div>
  <?php
    endwhile;
echo '</div>';

else :

    // no rows found

endif;
