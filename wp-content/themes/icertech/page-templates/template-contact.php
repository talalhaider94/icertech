<?php /* Template Name: Contact 2018 */ get_header(); ?>
<style>
  .sampleContainer{
    background-color: #1ea9ea;
  }
  .sampleContainer h5{
    font-size: 28px;
    font-weight: 200!important;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 0.1em;
  }
  .sampleContainer p small{
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;  
    color: #fff;  
    display: block;
    margin-bottom: 25px;
  }
  .sampleContainer .wpcf7-list-item {
    margin-bottom: 75px!important;
  }
  .sampleContainer .wpcf7-list-item .wpcf7-list-item-label {
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.05em;       
  }
  .sampleContainer .paddingNone{
    padding: 0;
    margin-top: 40px;
  }
  .sampleContainer input{
    width: 100%;
    background-color: #fff;
    padding: 8px 15px;
    border: initial;
    margin-bottom: 20px;
    border-radius: 3px;
  }
  .sampleContainer .SubmitBox{
    width: 100%;
    text-align: center;
    margin-top: 30px;
  }
  .sampleContainer .SubmitBox .wpcf7-submit{
    width: auto;
    margin: 0;
    padding: 8px 50px;
    background-color: #007095;
    color: #fff;
    text-transform: uppercase;
  }
  .wpcf7-form-control.wpcf7-submit:disabled {
    cursor: not-allowed;
  }  
    .wpcf7-form-control.wpcf7-submit{
      cursor: pointer;
    }
  .sampleContainer .wpcf7-response-output {
    margin-top: 15px;
    background: #007095;
    border: initial;
    color: #fff !important;
    font-size: 16px !important;
  } 



  .sampleContainerInfo{
    background-color: #008fc4;
  }
  .sampleContainerInfo .col-sm-5, .sampleContainerInfo .col-sm-4, .sampleContainerInfo .col-sm-3{
    padding: 0 35px;
  }
  .sampleContainerInfo h4 {
    margin-top: 0;
    color: #fff;
    letter-spacing: 0.05em;
    margin-bottom: 20px;
    font-size: 20px;
  } 
  .sampleContainerInfo p{
    color: #fff;
    letter-spacing: 0.05em;
    font-size: 15px;
  }
  .sampleContainerInfo .telefones{
    color: #fff;
    letter-spacing: 0.05em;
    font-size: 15px;
  }
  .contact_social__list span {
    color: #fff;
    letter-spacing: 0.05em;
    font-size: 15px;
  }
  .contact_social__list a {
    color: #fff !important;
    margin-left: 5px;
    letter-spacing: 0.05em;
    font-size: 15px;
  }
  .acceptanceQ {
    display: flex;
    flex: 1 0 auto;
    width: 100%;
    color: #fff;
    padding: 0 15px;
    justify-content: flex-start;
  }  
  .acceptanceQ span {
    margin-left: 15px;
  }  
  @media (max-width: 991px){
    .sampleContainer .wpcf7-list-item {
      width: 50% !important;
    }   
  } 
</style>
  <main role="main">
    <!-- section -->
    <section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php get_template_part('partials/heading-banner'); ?>
        
        <div class="container">
          <ul class="nav--packaging-coolant-guide contact-switcher" role="tablist">
                <li role="presentation" class="active">
                  <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" aria-expanded="true">Contact</a>
                </li>
                <li role="presentation" class="">
                  <a href="#sample" aria-controls="sample" role="tab" data-toggle="tab" aria-expanded="false">Sample Request</a>
                </li>
            </ul>
        </div>

        <div class="container-fluid">

          <div class="container pp--padded sampleContainer">

            <div class="row">

              <div class="col-md-12">
                <?php the_content(); ?>
              </div>

            </div>

          </div>

              <div class="container pp--padded sampleContainerInfo">
                <div class="row">

                  <div class="col-sm-5">
                    <h4>Get in touch</h4>
                    <p>There's an Easi-Solution for all of your cold chain requirements. To discuss your specific needs, and to obtain an indication of potential benefits, please contact us using the details below.</p>                                
                  </div>  

                    <div class="col-sm-4 contact-details">

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

                          <div class="telefones">Tel: <?php the_field('icertech_telephone_number', 'option'); ?></div>

                        <?php endif; ?>

                        <?php if( get_field('icertech_fax_number', 'option') ): ?>

                          <div class="telefones">Fax: <?php the_field('icertech_fax_number', 'option'); ?></div>

                        <?php endif; ?>

                    </div>

                    <div class="col-sm-3 contact-details">

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

                    </div><!-- col6 -->

                </div><!-- row -->

              </div><!-- sampleContainerInfo -->

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