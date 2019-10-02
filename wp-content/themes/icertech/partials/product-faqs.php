<div class="container-fluid product_faq-toggle text-center">
  <a herf="#" data-toggle="collapse" data-target="#faq-toggle"><?php the_title(); ?> faq's<span class="faq-toggle_icon_down"> <i class="fa fa-chevron-down"></i></span><span class="faq-toggle_icon_up"> <i class="fa fa-chevron-up"></i></span></a>
</div>

<div class="product_faq">

  <div class="container">

    <div id="faq-toggle" class="collapse in">


          <?php if( have_rows('icertech_product_faqs') ): ?>

          	<ul class="faq-toggle__list">

          	<?php while( have_rows('icertech_product_faqs') ): the_row();

          		// vars
              $faq_title = get_sub_field('icertech_product_faq_title');
          		$faq_content = get_sub_field('icertech_product_faqs_content');

          		?>

          		<li>

                <span class="faq__title"><?php echo $faq_title; ?></span>

                <p><?php echo $faq_content; ?></p>

          		</li>

          	<?php endwhile; ?>

          	</ul>

        <?php endif; ?>

        <div class="more-help text-center">

            <p>Still need help?</p>

            <a href="/contact/">Contact us here</a>

        </div>
    </div>

  </div>

</div>
