<?php /* Template Name: Contact */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part('partials/heading-banner'); ?>

				<div class="container-fluid">

					<div class="container pp--padded">

            <div class="row">

              <div class="col-md-6"><?php the_content(); ?></div>

              <div class="col-md-6 contact-details-header">

                <h3>Get in touch</h3>

                <p>There's an Easi-Solution for all of your cold chain requirements. To discuss your specific needs, and to obtain an indication of potential benefits, please contact us using the details below.</p>

                  <div class="row">

                    <div class="col-sm-6 contact-details">

                        <h4>Contact</h4>

                        <?php if( get_field('icertech_address_1', 'option') ): ?>

                					<p><?php the_field('icertech_address_1', 'option'); ?></p>

                				<?php endif; ?>

                        <?php if( get_field('icertech_address_2', 'option') ): ?>

                					<p><?php the_field('icertech_address_2', 'option'); ?></p>

                				<?php endif; ?>

                        <?php if( get_field('icertech_address_3', 'option') ): ?>

                					<p><?php the_field('icertech_address_3', 'option'); ?></p>

                				<?php endif; ?>

                        <?php if( get_field('icertech_city', 'option') ): ?>

                					<p><?php the_field('icertech_city', 'option'); ?></p>

                				<?php endif; ?>

                        <?php if( get_field('icertech_postcode', 'option') ): ?>

                					<p><?php the_field('icertech_postcode', 'option'); ?></p>

                				<?php endif; ?>

                        <br>

                        <?php if( get_field('icertech_telephone_number', 'option') ): ?>

                					<div>Tel: <?php the_field('icertech_telephone_number', 'option'); ?></div>

                				<?php endif; ?>

                				<?php if( get_field('icertech_fax_number', 'option') ): ?>

                					<div>Fax: <?php the_field('icertech_fax_number', 'option'); ?></div>

                				<?php endif; ?>

                    </div>

                    <div class="col-sm-6 contact-details">

                      <h4>Social</h4>

                      <ul class="contact_social__list">

              					<?php if( get_field('facebook_link', 'option') ): ?>

              						<li><span class="footer__icon_facebook"><i class="fa fa-facebook"></i></span><a href="<?php the_field('facebook_link', 'option');?>" target="_blank" class="link--facebook">Facebook</a></li>

              					<?php endif; ?>

              					<?php if( get_field('twitter_link', 'option') ): ?>

              						<li><span class="footer__icon_twitter"><i class="fa fa-twitter"></i></span><a href="<?php the_field('twitter_link', 'option');?>" target="_blank" class="link--twitter">Twitter</a></li>

              					<?php endif; ?>

              					<?php if( get_field('linked_in_link', 'option') ): ?>

              						<li><span class="footer__icon_linkedin"><i class="fa fa-linkedin"></i></span><a href="<?php the_field('linked_in_link', 'option');?>" target="_blank" class="link--linkedin">Linked In</a></li>

              					<?php endif; ?>

              				</ul>

                    </div>

                </div>

              </div>

            </div>
            <!-- row -->

				 	</div>

			  </div>

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
