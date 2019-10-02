


<?php

  $product_args = array(
  	'posts_per_page'   => 6,
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

<div class="container text-center pp--padded--v"><h3>Our Products</h3></div>

<div class="container pp--padded--h">

        <ul class="product-thumb__list">

            <?php foreach($icertech_products as $products){ ?>

              <li class="product-thumb__item">

                <?php if($icertech_products_image = get_field('icertech_products_thumb',  $products->ID)){ ?>
                <img src="<?php echo $icertech_products_image['url']; ?>" alt="<?php echo $icertech_products_image['alt'] ?>" class="img-responsive img--full-width" />
                <?php } //endif; ?>

                <div class="product-thumb__title"><h4><?php echo $products->post_title ?></h4></div>

                <div class="product-thumb__content">

                  <h4><?php echo $products->post_title ?></h4>

                  <p class="product-thumb-excerpt"><?php if(strlen($products->post_excerpt)>100){
                    echo substr($products->post_excerpt, 0, 100).' ...';
                  } else {
                    echo $products->post_excerpt;
                  }; ?></p>

                  <br><a class="view-article" href="<?php echo get_permalink($products->ID); ?>">Read More</a>

                </div>


              </li>

            <?php } // endforeach; ?>

        </ul>



<?php } // endif; ?>

</div>
