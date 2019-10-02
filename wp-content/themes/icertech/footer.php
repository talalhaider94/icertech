<!-- footer -->
<footer class="footer" role="contentinfo">

	<div class="container-fluid">

		<div class="row">

			<div class="col-sm-6 col-md-3"><h4>Contact</h4>
				<?php if( get_field('icertech_address', 'option') ): ?>

					<p><?php the_field('icertech_address', 'option'); ?></p>

				<?php endif; ?>

				<?php if( get_field('icertech_telephone_number', 'option') ): ?>

					<div>Tel: <?php the_field('icertech_telephone_number', 'option'); ?></div>

				<?php endif; ?>

				<?php if( get_field('icertech_fax_number', 'option') ): ?>

					<div>Fax: <?php the_field('icertech_fax_number', 'option'); ?></div>

				<?php endif; ?>

				<ul class="footer_social__list">

					<?php if( get_field('facebook_link', 'option') ): ?>

						<li><span class="footer__icon"><i class="fa fa-facebook"></i></span><a href="<?php the_field('facebook_link', 'option');?>" target="_blank" class="link--facebook">Facebook</a></li>

					<?php endif; ?>

					<?php if( get_field('twitter_link', 'option') ): ?>

						<li><span class="footer__icon"><i class="fa fa-twitter"></i></span><a href="<?php the_field('twitter_link', 'option');?>" target="_blank" class="link--twitter">Twitter</a></li>

					<?php endif; ?>

					<?php if( get_field('linked_in_link', 'option') ): ?>

						<li><span class="footer__icon"><i class="fa fa-linkedin"></i></span><a href="<?php the_field('linked_in_link', 'option');?>" target="_blank" class="link--linkedin">Linked In</a></li>

					<?php endif; ?>

				</ul>

			</div>

			<div class="col-sm-6 col-md-3"><h4>Useful Links</h4>
				<?php
					wp_nav_menu(
					array(
						'theme_location'  => 'footer-useful-links',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'footer__list',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => ''
						)
					);
				?>
			</div>

			<div class="col-sm-6 col-md-3 accreditations"><h4>Resources</h4>
				<?php
					wp_nav_menu(
					array(
						'theme_location'  => 'footer-resources',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'footer__list',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => ''
						)
					);
				?>
			</div>

			<div class="col-sm-6 col-md-3"><h4>Accreditations</h4>

				<div><img src="<?php echo get_template_directory_uri(); ?>/img/iso-logo.png" alt="Iso 9001Logo">

				<img src="<?php echo get_template_directory_uri(); ?>/img/investor-logo.png" alt="Investor Logo"></div>


		</div>
		<!-- row -->

</div>

<div class="container-fluid credits">

	<div class="registered-office"><p>Company Registration Number: <?php the_field('company_registration_number', 'option'); ?></p></div>

	<div class="fotofire-credit">Website by <a href="https://www.wahoogroup.co.uk" target="_blank">Wahoo Group</a></div>

	<!-- copyright -->


</div>
<!-- container -->

</footer>
<!-- /footer -->

		<?php wp_footer(); ?>

		<script type="text/javascript">
			var __raconfig = __raconfig || {};
			__raconfig.uid = '5763fe5d3d0e2';
			__raconfig.action = 'track';
			(function () {
			var ra = document.createElement('script');
			ra.type = 'text/javascript';
			ra.src = 'https://ruler.nyltx.com/lib/1.0/ra-bootstrap.min.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ra, s);
			}());
		</script>

	</body>
</html>