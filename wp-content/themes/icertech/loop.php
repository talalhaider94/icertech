<div class="container pp--padded--h">

	<?php 
		if (have_posts()): 
		$postCounter = 1;
		echo '<div class="row">';
		while (have_posts()) : the_post(); 

		$colClass = ($postCounter == 1 || $postCounter == 7) ? 'col-md-8 col-lg-8 wide-preview post-prev' : 'col-md-4 col-lg-4 standard-preview post-prev';

		$wideImage = ($postCounter == 1 || $postCounter == 7) ? true : false;
		$excerptLength = $wideImage ? '220' : '120';

		?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class($colClass); ?>>


			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<div class="thumbnail">
						<!-- post thumbnail -->
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php 
							if($wideImage) {
								the_post_thumbnail('featured-image-preview-wide', array('class' => 'img-responsive'));
							} else {
								the_post_thumbnail('featured-image-preview', array('class' => 'img-responsive'));
							}
							?>
						</a>
						<!-- /post thumbnail -->
					</div>
			<?php endif; ?>

			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<?php
			echo '<p>' . substr( get_the_excerpt(), 0, $excerptLength ).'...</p>';
			echo '<p><a class="view-article" href="' . get_permalink($post->ID) . '">Read More</a></p>';
			//ff_excerpt($excerptLength); // Build your custom callback length in functions.php ?>

		</article>
		<!-- /article -->
	
	<?php 
	if($postCounter == 2 || $postCounter == 5) {
		echo '<div class="clearfix"></div>';
	}

	$postCounter++;

	endwhile; ?>
	</div>
	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php echo 'Sorry, nothing to display.'; ?></h2>
		</article>
		<!-- /article -->

	<?php endif; ?>
</div>
