<!-- footer socket -->

<div class="page-socket">

	<div class="container pp--padded text-center">


    <?php

    if( have_rows('testimonial_slider') ):
    echo '<div class="slider-for" id="testimonial-banner">';
     	// loop through the rows of data
        while ( have_rows('testimonial_slider') ) : the_row();

        ?>
    	<div class="slick-container">

        <?php $image = get_sub_field('company_logo'); ?>

          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

        <?php the_sub_field("testimonial"); ?>

        <div class="testimonial-name"><?php the_sub_field("testimonial_name"); ?></div>

      </div>
      <?php
        endwhile;
    echo '</div>';

    else :

      echo "No testimonial to display";

    endif;

    ?>



  </div>

</div>
