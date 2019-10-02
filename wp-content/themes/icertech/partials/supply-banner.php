<!-- footer socket -->

<div class="page-socket">

	<div class="container">

		<h2>Proud to supply</h2>

      <?php

      if( have_rows('supply_banner', 'option') ):
      echo '<div class="slider-for" id="supply-banner">';
       	// loop through the rows of data
          while ( have_rows('supply_banner', 'option') ) : the_row();

          ?>

            	<div class="slick-container">

                    <ul class="supply_list">

                        <li>

                            <?php $image = get_sub_field('supply_icon', 'option'); ?>

                              <img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                        </li

                    </ul>

              </div>

        <?php
          endwhile;
      echo '</div>';

      else :

          // no rows found

      endif;

      ?>


    </div>

</div>
