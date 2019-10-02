<?php

  $product_args = array(
  	'posts_per_page'   => 10,
  	'offset'           => '',
  	'category'         => 9,
  	'category_name'    => '',
  	'orderby'          => 'date',
  	'order'            => 'DESC',
  	'include'          => '',
  	'exclude'          => '',
  	'meta_key'         => '',
  	'meta_value'       => '',
  	'post_type'        => 'icertech_products',
  	'post_mime_type'   => '',
  	'post_parent'      => '',
  	'author'	   => '',
  	'post_status'      => 'publish',
  	'suppress_filters' => true
  );

  if($icertech_products = get_posts($product_args)){

      // echo '<pre>';
      // print_r($icertech_products);
      // echo '</pre>';

?>
  <ul class="product-preview__list">

  		<?php $i=1; foreach($icertech_products as $products){ ?>

        <li class="product__item-<?php echo $i+ $item[number] ?>">


          <div class="product-preview__content">

            <h2 class="product-preview-title"><?php echo $products->post_title ?></h2>

            <p class="product-preview-excerpt"><?php echo $products->post_excerpt ?></p>

            <br><a class="view-article-information" href="<?php echo get_permalink($products->ID); ?>">Product Information</a>
            <a class="shop-now-btn" href="<?php echo the_field('shop_now_link', $products->ID ); ?>">Shop Now</a> 
            
          </div>


          <?php if (has_post_thumbnail( $products->ID ) ): ?>

              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $products->ID ), 'full' ); ?>

            <?php endif; ?>

          <div class="product__img" style="background-image: url('<?php echo $image[0]; ?>'); background-position: right center; background-repeat: no-repeat;"> </div>



        </li>

      <?php $i++; } // endforeach; ?>

  </ul>



<?php } // endif; ?>
