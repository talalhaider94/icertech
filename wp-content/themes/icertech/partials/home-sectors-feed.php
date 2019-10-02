<?php

  $sectors_args = array(
  	'posts_per_page'   => 2,
  	'offset'           => '',
  	'category'         => 10,
  	'category_name'    => 'sectors',
  	'orderby'          => 'rand',
  	'include'          => '',
  	'exclude'          => '',
  	'meta_key'         => '',
  	'meta_value'       => '',
  	'post_type'        => 'icertech_sectors',
  	'post_mime_type'   => '',
  	'post_parent'      => '',
  	'author'	   => '',
  	'post_status'      => 'publish',
  	'suppress_filters' => true
  );

  if($icertech_sectors = get_posts($sectors_args)){

      // echo '<pre>';
      // print_r($icertech_sectors);
      // echo '</pre>';

?>

<div class="container_fluid">

        <ul class="sectors__list">

            <?php foreach($icertech_sectors as $sectors){ ?>

              <?php if (has_post_thumbnail( $sectors->ID ) ): ?>

                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $sectors->ID ), 'full' ); ?>

                <?php endif; ?>



              <li style="background-image: url('<?php echo $image[0]; ?>'); background-position: center center;">

                <div class="sector__content">

                  <div class="sectors__sub-heading">Sector</div>

                  <div class="sector__title"><h3><?php echo $sectors->post_title ?></h3></div>

                  <a class="view-article" href="<?php echo get_permalink($sectors->ID); ?>">Read More</a>

                </div>
                <!-- sector__content -->


              </li>

            <?php } // endforeach; ?>

        </ul>



<?php } // endif; ?>

</div>
