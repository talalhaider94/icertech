<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('partials/product-banner'); ?>

          <?php get_template_part('partials/manufactured-uk'); ?>

          <?php get_template_part('partials/product-features'); ?>

          <?php get_template_part('partials/the-results'); ?>

          <?php get_template_part('partials/body-banner-image'); ?>

          <?php get_template_part('partials/product-specs'); ?>

          <?php 
          // removed due to 30August Amendments
          // get_template_part('partials/product-faqs'); ?>

          <?php get_template_part('partials/touchpoint'); ?>

    <?php endwhile; else: ?>
        <div class="post">
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
