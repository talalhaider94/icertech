<?php /* Template Name: Homepage New Slide */ get_header(); ?>



	<main role="main">

		<!-- section -->

		<section>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>



			<!-- article -->

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



				<?php get_template_part('partials/new-blue-banner1'); ?>



				<?php get_template_part('partials/home-products-feed'); ?>



				<div class="container-fluid content-bg">



					<div class="container pp--padded">



						<?php the_content(); ?>



				 	</div>



			  </div>



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



		<?php get_template_part('partials/supply-banner'); ?>



<?php get_footer(); ?>

