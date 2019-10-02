<?php
    /* Template Name: Sectors */
    get_header();
?>

	<main role="main">
		<!-- section -->
		<section class="sectors">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part('partials/heading-banner'); ?>

				<div id="scroll-to-main-content" class="container-fluid">

					<div class="container pp--padded">

						<?php the_content(); ?>

				 	</div>

			  </div>

				<?php get_template_part('partials/body-banner-image'); ?>

                <?php get_template_part('partials/product-table'); ?>

                <?php if($eps = get_field('performance_summary')){ ?>
                    <div class="sectors__performance-summary">
                        <div class="container pp--padded">
                            <h2>Example Performance Summary</h2>
                            <img src="<?php echo $eps['url'] ?>" alt="<?php echo $eps['alt']; ?>" title="<?php echo $eps['title']; ?>" class="img-responsive">
                        </div>
                    </div>
                <?php } // endif; ?>

                <?php if($graph = get_field('graph')){ ?>
                    <div class="container pp--padded sectors__graph">
                        <img src="<?php echo $graph['url'] ?>" alt="<?php echo $graph['alt']; ?>" title="<?php echo $graph['title']; ?>" class="img-responsive">
                    </div>
                <?php } // endif; ?>

                <?php get_template_part('partials/testimonials'); ?>

				<?php get_template_part('partials/services'); ?>

				<?php get_template_part('partials/home-sectors-feed'); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php// get_sidebar(); ?>

<?php get_footer(); ?>
