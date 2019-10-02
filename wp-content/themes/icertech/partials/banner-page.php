<style>

.slide_content{
  position: relative;
  transform: none !important;
  width: 100%;
  left:auto;
  right: unset;
  top:unset;
  padding: 0px;
}

.slick-slide .full{
  width: 100%;
}
.page-id-1790 .page-banners{
  display: none;
}
.page-id-93 .page-banners{
  display: none;
}
@media (max-width: 480px){


}
@media (max-width: 360px){

}
</style>
<?php

$count=0; if( have_rows('slick_slides') ):
echo '<div class="slider-for" id="banners">';
 	// loop through the rows of data
    while ( have_rows('slick_slides') ) : the_row();
    // display a sub field value
    //vars
    $image = get_sub_field('image');

    ?>
	<div class="slick-container">

    <div class="slick-overlay"></div>

  

    <div class="slide_content slide-<?php echo ++$count; ?>">


 
        <img src="<?php the_sub_field("image"); ?>" class="img-responsive full"/>
          <div class="page-banner-content">

          <h1><?php the_sub_field("slide_title"); ?></h1>

          <p><?php the_sub_field("text_below"); ?></p>


        </div>
      <div id="banner-scroll"><i class="fa fa-2x fa-chevron-down"></i></div>



    </div>

  </div>
  <?php
    endwhile;
echo '</div>';

else :

    // no rows found

endif;
