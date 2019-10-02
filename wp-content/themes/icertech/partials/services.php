

<?php

if( have_rows('services') ):
?>
<div class="container">
<?php

  $i=1; while ( have_rows('services') ) : the_row();
    if((($i-1)%2)==0) echo '<div class="row">';

?>


    <div class="col-md-6 text-center pp--padded">

      <img src="<?php the_sub_field('service_icon'); ?>" alt="Service Icon" />

      <p><?php the_sub_field('service_information'); ?></p>


    </div>

    <?php
      if( (($i%2)==0) || ($i == count(get_field('services'))) ) echo '</div><!-- /.row -->';
      $i++; endwhile;
      ?>
</div>
<?php

  else :

  // Nothing Available

  endif;

?>
