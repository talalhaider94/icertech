<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
			<div class="container pp--padded--h">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="col-sm-9">

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

							<?php the_post_thumbnail('fullsize', array('class' => 'img-responsive')); ?>

					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post details -->
					<div class="post-details">
						<div class="date"><?php the_time('l jS F Y'); ?></div>
						<div class="author"><?php echo 'Published by - '; the_author(); ?></div>
					</div>
					<!-- /post details -->

					<div class="post__content">

						<!-- post title -->
						<h1><?php the_title(); ?></h1>
						<!-- /post title -->

						<?php the_content(); // Dynamic Content ?>

						<?php //comments_template(); ?>

					</div>

					<h2>Share this story</h2>
					<ul class="list--social-sharing">
						<li><a href="https://twitter.com/intent/tweet/?text=<?php echo rawurlencode(get_the_title()); ?>&url=<?php the_permalink(); ?>" target="_blank" class="social-sharing-button social-sharing-button--twitter">Twitter</a></li>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="social-sharing-button social-sharing-button--facebook">Facebook</a></li>
						<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo rawurlencode(get_the_title()); ?>&source=<?php echo get_site_url(); ?>&summary=<?php echo rawurlencode(substr(strip_tags(get_the_content()), 0, 139)); ?>" target="_blank" class="social-sharing-button social-sharing-button--linkedin">LinkedIn</a></li>
						<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="social-sharing-button social-sharing-button--google-plus">Google+</a></li>
					</ul>

				</article>
				<!-- /article -->

			</div>
			<div class="col-sm-3">

				<a class="twitter-timeline" data-height="480" href="https://twitter.com/IcerTechUK">Tweets by IcerTechUK</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

				<?php
					// Build a custom query to get all posts in the same categories as the current post
					$post_categories = get_the_category();
					$post_categories_ids = array();
					foreach($post_categories as $pcat){
						$post_categories_ids[] = $pcat->term_id;
					}

					$related_posts_args = array(
						'category__in' => $post_categories_ids,
						'posts_per_page' => 3,
						'paged' => 1,
						'post__not_in' => array(get_the_ID())
					);
					$related_posts = new WP_Query($related_posts_args);

					// The Loop
					if ($related_posts->have_posts()) {
						echo '<div class="single__related-posts">';
							echo '<h2>Related Stories</h2>';
							echo '<ul class="list--related-posts">';
							while ($related_posts->have_posts()) {
								$related_posts->the_post();
								echo '<li>';
				?>
								<!-- article -->
								<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview--related'); ?>>

									<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
										<!-- post thumbnail -->
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail('featured-image-preview--related', array('class' => 'img-responsive')); ?>
										</a>
										<!-- /post thumbnail -->
									<?php endif; ?>

									<!-- post title -->
									<h3 class="post__heading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
									<!-- /post title -->

									<div class="post__excerpt"><?php echo ff_excerpt('ff_experpt__index'); ?></div>

								</article>
								<!-- /article -->
				<?php
								echo '</li>';
							}
							echo '</ul>';
						echo '</div>';
					}

					/* Restore original Post Data */
					wp_reset_postdata();
				?>

			</div>
		</div>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e('Sorry, nothing to display.'); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
		</div>
	</section>
	<!-- /section -->
	</main>

<?php// get_sidebar(); ?>

<?php get_footer(); ?>
