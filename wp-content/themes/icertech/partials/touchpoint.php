<?php
	$heading1 = get_field('heading_bottom_h3');
	$heading2 = get_field('heading_bottom_h4');
	$buttonLink = get_field('view_range_link');
?>
<div class="container-fluid bgDark">
	<div class="touchpointBottom">

		<h3><?php echo $heading1; ?></h3>
		<h4><?php echo $heading2; ?></h4>

		<div class="btnContainer">
			<a class="viewrange-btn" title="View Range" href="<?php echo $buttonLink; ?>">View range</a>
			<a class="requestsample-btn" title="Sample Request" href="<?php the_permalink(300); ?>">Sample request</a>			
		</div>
	</div>	
</div>
