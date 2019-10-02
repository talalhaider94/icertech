<?php if(get_field('test_results_graph_desc') || get_field('test_results_graph')){ ?>
<div class="container pp--padded text-center">

  <h3>The results</h3>

  <p><?php the_field('test_results_graph_desc'); ?></p>

    <?php

  $image = get_field('test_results_graph');

  if( !empty($image) ): ?>

  	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive img--full-width" />

  <?php endif; ?>

</div>
<?php } // endif; ?>
