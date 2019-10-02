<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('partials/page-banner'); ?>

        <div class="container pp--padded">

            <?php the_content(); ?>

          </div>

    <?php endwhile; else: ?>
        <div class="post">
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
