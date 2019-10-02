<?php if( have_rows('icertech_product_spec') ): ?>
<div class="container text-center"><h3>Specification</h3></div>

  <div class="container product-specs pp--padded">

      <?php while( have_rows('icertech_product_spec') ): the_row();

  		// vars
  		$spec_title = get_sub_field('icertech_product_spec_title');
  		$spec_content = get_sub_field('icertech_product_spec_content');

  		?>

    <div class="row">

      <div class="col-md-4"><?php echo $spec_title; ?></div>

      <div class="col-md-8"><?php echo $spec_content; ?></div>

    </div>
    <!-- row -->

	<?php endwhile; ?>

</div>
</div>
<?php endif; ?>
