<?php if( have_rows('icertech_product_features') ): ?>

	<ul class="product_features">

	<?php $i=1; while( have_rows('icertech_product_features') ): the_row();

		// vars
		$image = get_sub_field('icertech_product_feature_image');
    $feature_title = get_sub_field('icertech_product_features_title');
		$content = get_sub_field('icertech_product_features_desc');

		?>

		<li class="product_feature <?php echo $i%2 == 0 ? "product__feature--even" : "product__feature--odd"; ?>">

        <div class="product_feature-image" style="background-image: url('<?php echo $image; ?>'); background-position: center center; background-size: cover;">

        </div>

        <div class="product_feature-content">

              <h3><?php echo $feature_title; ?></h3>

              <?php echo $content; ?>

        </div>

		</li>

	<?php $i++; endwhile; ?>

	</ul>

<?php endif; ?>
