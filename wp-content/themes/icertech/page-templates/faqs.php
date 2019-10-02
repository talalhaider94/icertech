<?php
    /* Template Name:FAQs */
    get_header();

    $pagePermalink = get_permalink();
?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php get_template_part('partials/heading-banner'); ?>

                <div id="scroll-to-main-content" class="container-fluid">

                    <div class="container pp--padded">

                        <?php the_content(); ?>

                    </div>

                </div>

                <div class="container">
                  <div class="row">
                      <div class="col-sm-4 col-md-3">
                          <?php

                            $_GET['ipids'] = array();
                              // get all products
                              $args = array(
                                'post_type' => 'icertech_products',
                                  'order'     => 'ASC',
                                  'orderby'   => 'title'
                              );
                              $productQuery = new WP_Query( $args );
                              if($productQuery->have_posts()){
                                  echo '<aside class="sidebar--faq">';
                                  echo '<h2>Categories</h2>';
                                  echo '<ul class="list--faq-filter" id="list--faq-filter">';
                                  echo '<li><a href="'.$pagePermalink.'" data-ipid="0">All</a></li>';
                                  while ($productQuery->have_posts()) {	$productQuery->the_post();
                                    $_GET['ipids'][] = get_the_ID();
                                    echo '<li><a href="'.$pagePermalink.'?ipid='.get_the_ID().'" data-ipid="'.get_the_ID().'">' . get_the_title() . '</a></li>';
                                } // endwhile;
                                  echo '</ul>';
                                  echo '</aside>';
                              } // endif;
                              /* Restore original Post Data */
                            wp_reset_postdata();
                          ?>
                      </div>
                      <div class="col-sm-8 col-md-9">
                          <h2 id="faq-heading">All FAQs</h2>
                          <?php
                                // get all faqs
                                $faqs = array();
                                if($_GET['ipid']){
                                    $faqs = get_field('icertech_product_faqs', $_GET['ipid']);
                                    foreach($faqs as &$faq){
                                        $faq['ipid'] = $_GET['ipid'];
                                    } // endforeach;
                                    unset($faq);
                                } else {
                                    foreach($_GET['ipids'] as $ipid){
                                        if($tempfaqs=get_field('icertech_product_faqs', $ipid)){
                                            foreach($tempfaqs as $tempfaq){
                                                $tempfaq['ipid'] = $ipid;
                                                $faqs[] = $tempfaq;
                                            } // endforeach;
                                        } // endif;
                                    } // endforeach;
                                } // endif;

                                if($faqs){
                                    echo '<ul class="list--faqs">';
                                    foreach($faqs as $faq){
                                        echo '<li class="faq" data-ipid="'.$faq['ipid'].'">';
                                            echo '<h3>'.$faq['icertech_product_faq_title'].'</h3>';
                                            echo $faq['icertech_product_faqs_content'];
                                        echo '</li>';
                                    } // endforeach;
                                    echo '</ul>';
                                } // endif;
                          ?>
                          <a href="/contact/" class="faqs-contact">Still Need Help?<span>Contact Us Here</span></a>
                      </div>
                  </div>
                </div>

                <?php get_template_part('partials/body-banner-image'); ?>

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
