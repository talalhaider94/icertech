<?php /* Template Name: Packaging Coolant Guide */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part('partials/heading-banner'); ?>

                <div id="scroll-to-main-content">

                    <!-- .packaging-coolant-guide -->
                    <div class="container--packaging-coolant-guide">
						<div class="container">
	                        <!-- Nav tabs -->
	                        <ul class="nav--packaging-coolant-guide" role="tablist">
								<li role="presentation"><a href="#guideRecycling" aria-controls="guideRecycling" role="tab" data-toggle="tab">Reuse and Recycle</a></li>
	                            <li role="presentation" class="active"><a href="#guidePackaging" aria-controls="guidePackaging" role="tab" data-toggle="tab">Packaging Guide</a></li>
	                            <li role="presentation"><a href="#guideCoolant" aria-controls="profile" role="tab" data-toggle="tab">Coolant Guide</a></li>
	                        </ul>
						</div>

                        <!-- Tab panes -->
                        <div class="tab-content">
							<div role="tabpanel" class="tab-pane tab-pane--cpg fade in" id="guideRecycling">
								<div class="cpg--sup">
									<div class="container">
										<h2>Reuse and Recycle</h2>
										<p>Icertech supplies a range of packaging systems for secure and temperature-controlled shipping of chilled products. With our complete chilled solution, the 'Easi-Chill' (gel packs), and Insulated Boxes, your product will be kept chilled for up to 72 hours.</p>
										<p>So, now that you've received your chilled goods in one of our boxes, bags, or envelopes, you're wondering what to do with the packaging?</p>
										<p>Here at Icertech, we do take our environmental responsibilities very seriously, so rather than simply putting our packaging straight into the wheelie bin, read on for our best suggestions on ways you can reuse or recycle our products to get the most out of them.</p>
									</div>
								</div>
								<div class="cpg">
									<div class="container">
										<div class="cpg__section pp--padded--h">
											<div class="recycling__twitter-icon"><i class="fa fa-twitter"></i></div>
											<h3>Recycle, Retweet, Repeat</h3>
											<p>We love to hear that our products are being re-used, whether it be to keep shopping chilled in the boot of your car on the way home from the supermarket, whilst camping with your family, or even on a picnic. Tweet us, and let us know what you use yours for!</p>
											<p>@IcerTechUK</p>
										</div>
										<div class="cpg__section text-left pp--padded--h">
											<div class="row">
												<div class="col-sm-4">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/recycling/outer-cardboard-box.png'; ?>" alt="A cardboard box" class="img-responsive">
												</div>
												<div class="col-sm-8">
													<h3>Outer Cardboard Box</h3>
													<p>A well-know recyclable item, these boxes are also great for moving house, decorating for a child's toy box or any other short-term storage you can think of.</p>
													<p>When they're done, add them to the recycling bin so they can disappear and be remade into something else!</p>
												</div>
											</div>
										</div>
										<div class="cpg__section text-left pp--padded--h">
											<div class="row">
												<div class="col-sm-4">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/recycling/polystyrene-inserts.png'; ?>" alt="Polystyrene inserts" class="img-responsive">
												</div>
												<div class="col-sm-8">
													<h3>Polystyrene Tile Inserts, and Moulded Boxes</h3>
													<p>Reuse these if you're packing up delicate items to store in the loft, and Great Aunt Margot's china tea set should be safe for another year or two. This type of packaging is also great for posting fragile items if you're selling on eBay, either use the boxes as is, or break them up into smaller bits and give your postal items a bit of extra protection.</p>
													<p>Our polystyrene is also recyclable in some areas, so check with your local council.</p>
												</div>
											</div>
										</div>
										<div class="cpg__section text-left">
											<div class="row pp--padded--h">
												<div class="col-sm-4">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/recycling/gel-packs.png'; ?>" alt="An Easi-Chill gel pack" class="img-responsive">
												</div>
												<div class="col-sm-8">
													<h3>Easi-Chill Gel Packs</h3>
													<p>You can recycle the plastic from these packs, but the gel does have to go into the bin once it's done its job. Don't try to pour the gel down the sink, as it could block your drains.</p>
													<p>Before you think about disposing of it, there are lots of things you can do to reuse gel packs.</p>
												</div>
											</div>
											<div class="row pp--padded--h">
												<div class="col-sm-4">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/recycling/ice-baths.png'; ?>" alt="An ice bath with Easi-Chill gel packs" class="img-responsive">
												</div>
												<div class="col-sm-8">
													<h4>1. Ice baths</h4>
													<p>If you're in to sports or exercise of any kind, an ice bath can be a great idea if you've been pushing yourself quite hard. Drop the frozen ice packs into cold water as a whole pack, without removing the plastic, and if you close your eyes, you can pretend you're Andy Murray holding that Wimbledon trophy!</p>
												</div>
											</div>
											<div class="row pp--padded--h">
												<div class="col-sm-4">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/recycling/ice-packs.png'; ?>" alt="An ice pack using an Easi-Chill gel pack" class="img-responsive">
												</div>
												<div class="col-sm-8">
													<h4>2. Ice packs</h4>
													<p>If you've really overdone it, use one of our packs to ease tight muscles and swelling. Make sure you wrap the pack in a clean towel or similar material so it doesn't burn your skin.</p>
												</div>
											</div>
											<div class="row pp--padded--h">
												<div class="col-sm-4">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/recycling/picnics.png'; ?>" alt="A picnic" class="img-responsive">
												</div>
												<div class="col-sm-8">
													<h4>3. Cooling your shopping / picnic</h4>
													<p>If you've run out of our cooling bags, use the ice packs or sheets in ordinary plastic bags and place them amongst your shipping / picnic to keep it all cool.</p>
												</div>
											</div>
											<div class="row pp--padded--h">
												<div class="col-sm-4">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/recycling/gardening.png'; ?>" alt="Gardening" class="img-responsive">
												</div>
												<div class="col-sm-8">
													<h4>4. Gardening</h4>
													<p>If you prefer taking it easy in the garden, rather than rushing around doing all that exercise, open the plastic pack and mix the gel contents in with the soil around your plants. It's a very efficient water retainer to keep plants thriving if they've been without rain for a while, and the gel will absorb both water and nutrients in the soil or your compost, so the plants can take them up as needed.</p>
												</div>
											</div>
										</div>
		                            </div>
								</div>
							</div>
                            <div role="tabpanel" class="tab-pane tab-pane--cpg fade in active" id="guidePackaging">
								<div class="cpg">
									<div class="container">
		                                <h2>Packaging Guide</h2>
										<p>Welcome to our online packaging guide. Below you'll find an easy step-by-step guide on how to successfully construct our insulated boxes as well as inserting the polystyrene tiles correctly</p>
										<ol class="list--cpg">
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">1</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step1-build-the-box.png'; ?>" alt="Build the box and tape the bottom flaps shut." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Build your box and tape the bottom flaps shut.</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">2</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step2-insert-polystyrene.png'; ?>" alt="Insert the bottom, sides, and polystyrene tiles respectively." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Insert the bottom, sides, and polystyrene tiles respectively.</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">3</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step3-insert-coolant.png'; ?>" alt="Build your box and tape the bottom flaps shut." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Place the coolants inside the box and pad out any spare space.</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">4</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step4-close-and-secure.png'; ?>" alt="Place the top polystyrene tile in the box, close the flaps and securely tape closed." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Place the top polystyrene tile in the box, close the flaps and securely tape closed.</div>
											</li>
										</ol>
		                            </div>
								</div>
								<div class="cpg--sub">
									<div class="container">
										<h3>Useful Tips</h3>
										<p>Our cardboard boxes are 100% recyclable. You can also check with your local council to see if they offer a recycling service for polystyrene.</p>
										<p>Ensure that the coolant and your products remain separated to reduce the risk of them freezing.</p>
										<p>We can supply materials to create a barrier, which also fill any spare space, that will help to protect your product.</p>
										<p>Use high quality tape to seal your box. We can supply you with a solvent adhesive tape specifically designed for cold store use.</p>
										<p><a href="/sample-request/">Ask us for a free sample roll!</a></p>
									</div>
								</div>
							</div>
                            <div role="tabpanel" class="tab-pane tab-pane--cpg fade" id="guideCoolant">
								<div class="cpg">
									<div class="container">
		                                <h2>Coolant Guide</h2>
										<p>Confidently keep your products cooler for longer with our industry-leading, gel-based formula. Our long lasting coolant is suitable for food use, made from a puncture resistant film, and does not require soaking.</p>
										<ol class="list--cpg">
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">1</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step1-freeze-your-coolants.png'; ?>" alt="Freeze your coolants before use.  A domestic style freezer will do the job perfectly." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Freeze your coolants before use.  A domestic style freezer will do the job perfectly.</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">2</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step2-ensure-coolant-frozen.png'; ?>" alt="Ensure that your coolant is frozen solid before use.  This usually takes less than 24 hours, however freezing times can vary." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Ensure that your coolant is frozen solid before use.  This usually takes less than 24 hours, however freezing times can vary.</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">3</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step3-place-in-packaging.png'; ?>" alt="Place the coolants in the box along with your products.  For our packaging instructions, please read the other side." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Place the coolants in the box along with your products.  For our packaging instructions, please read the other side.</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">4</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/step4-reuse.png'; ?>" alt="Our coolants can be reused, but not indefinitely.  Always inspect the quality before reusing." class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Our coolants can be reused, but not indefinitely.  Always inspect the quality before reusing.</div>
											</li>
										</ol>
		                            </div>
								</div>
								<div class="cpg--sub">
									<div class="container">
										<h3>Useful Tips</h3>
										<p>To help your coolants freeze more quickly, remove them from their box and flatten them in the freezer.</p>
										<p>The coolant gel can be disposed of as normal household waste and the outer film is recyclable as LDPE 4.</p>
									</div>
								</div>
							</div>
                        </div>

                    </div>
                    <!-- /.packaging-coolant-guide -->

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

<?php get_footer(); ?>
