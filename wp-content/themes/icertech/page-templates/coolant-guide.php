<?php /* Template Name: Packaging Coolant Guide New */ get_header(); ?>

<?php 
	$firstTabVidImage = get_field('video_image_reuse');
	$firstTabVidID = get_field('video_id_reuse');
	$firstTabVidTXT = get_field('play_button_text_reuse');	
	$firstTabVidTXTSUB = get_field('play_text_subheading_reuse');	

	$secondTabVidImage = get_field('video_image_tile');
	$secondTabVidID = get_field('video_id_tile');
	$secondTabVidTXT = get_field('play_button_text_tile');
	$secondTabVidTXTSUB = get_field('play_text_subheading_tile');

	$thirdTabVidImage = get_field('video_image_foil');
	$thirdTabVidID = get_field('video_id_foil');
	$thirdTabVidTXT = get_field('play_button_text_foil');
	$thirdTabVidTXTSUB = get_field('play_text_subheading_foil');

	$fourthTabVidImage = get_field('video_image_coolant');
	$fourthTabVidID = get_field('video_id_coolant');
	$fourthTabVidTXT = get_field('play_button_text_coolant');
	$fourthTabVidTXTSUB = get_field('play_text_subheading_coolant');
?>
<style>	
.nav--packaging-coolant-guide > li{
	width: 25%;
}
.nav--packaging-coolant-guide li a{
	outline: none;
}
div.pp_pic_holder {
	z-index: 99999999;
}
#guideRecycling .cpg{
	<?php if($firstTabVidID){ ?>
			padding-bottom: 0;
	<?php }?>
}
#guidePackaging .cpg{
	<?php if($secondTabVidID){ ?>
			padding-bottom: 0;
	<?php }?>
}
#guideFoil .cpg{
	<?php if($thirdTabVidID){ ?>
			padding-bottom: 0;
	<?php }?>
}
#guideCoolant .cpg{
	<?php if($fourthTabVidID){ ?>
			padding-bottom: 0;
	<?php }?>
}
.sectionBlock{
	display: block;
	padding: 12em 0;
	margin: 0;
	line-height: 1;
	color: #333;
	background-color: #1798cb;
	border: initial;
	border-radius: initial;
	position: relative;
	bottom: -3px;
	overflow: hidden;
}
.sectionBlock.TileTab:before{
	content: " ";
	position: absolute;
	top: 0;
	right: -25%;
	height: 100%;
	width: 100%;
	background-size: 800px 651px;
	background-position: 50% 50%;
	background-repeat: no-repeat;
}
.sectionBlock.FoilTab:before{
	content: " ";
	position: absolute;
	top: 0;
	right: -25%;
	height: 100%;
	width: 100%;
	background-size: 800px 606px;
	background-position: 50% 0%;
	background-repeat: no-repeat;
}
.sectionBlock a{
	font-size: 30px;
	z-index: 99999;
	color: #1798CB;
	text-align: center;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	font-weight: bold;
	text-transform: initial;
	transition: all 0.33s ease-in-out;
	text-decoration: none;
	outline: none !important;
}
.sectionBlock a:hover{
	color: #00AAE6;
	text-shadow: 0px 1px 2px rgba(0,0,0,0.5);
}
.sectionBlock a:after{
    content: "\f04b";
    font-family: FontAwesome;
    padding: 22px 20px 19px 28px;
    border-radius: 50%;
    background: #fff;
    transition: all 0.33s ease-in-out;
    text-shadow: none!important;
}
.sectionBlock a:hover:before{
	background: #fff;
	color: #00AAE6;
}
.sectionBlock h4 {
	position: absolute;
	top: 50%;
	left: 25%;
	transform: translate(-50%, -50%);
	font-size: 28px;
	letter-spacing: 0.05em;
	margin: 0;
	color: #fff;
}
.sectionBlock h4 span {
	font-size: 18px;
	color: #fff;
	text-align: right;
	font-weight: normal;
	text-transform: initial~~;
	font-family: Cantarell,"Helvetica Neue",Helvetica,Arial,sans-serif;
	float: right;
	right: -65px;
	position: relative;
	text-transform: initial;
}

.ReuseTab:before{
	background-image: url('<?php if($firstTabVidImage){echo $firstTabVidImage;} ?>');
}
.TileTab:before{
	background-image: url('<?php if($secondTabVidImage){echo $secondTabVidImage;} ?>');
}
.FoilTab:before{
	background-image: url('<?php if($thirdTabVidImage){echo $thirdTabVidImage;} ?>');
}
.CoolantTab:before{
	background-image: url('<?php if($fourthTabVidImage){echo $fourthTabVidImage;} ?>');
}
@media (max-width: 1400px){
	.sectionBlock.TileTab::before {
		background-size: 650px 529px;
	}
	.sectionBlock.FoilTab h4 span {
		right: 0;
	}
	.sectionBlock.TileTab h4 span {
		right: 0;
	}			
}
@media (max-width: 1024px){
	.sectionBlock.TileTab::before {
		background-size: 550px 448px;
	}
	.sectionBlock.FoilTab::before {
		background-size: 650px 493px;
		background-position: 50% -30%;
	}	
}
@media (max-width: 992px){

}
@media (max-width: 768px){
	.sectionBlock {
		padding: 15em 0;
	}
	.sectionBlock.TileTab::before {
		background-size: 60%;
		right: 0;
		background-position: 50% 20%;
	}
	.sectionBlock.FoilTab::before {
		background-size: 75%;
		right: 0;
		background-position: 50% 10%;
	}
	.sectionBlock h4 {
		bottom: -10px;
		top: initial;
		left: 50%;
	}
	.sectionBlock h4 span{
		float: initial;
	}
	.sectionBlock a {
		font-size: 60px;
		top: 40%;
	}
	.sectionBlock a::after {
		padding: 22px 21px 19px 34px;
	}					
}
@media (max-width: 568px){
	.sectionBlock.TileTab::before {
		background-size: 80%;
		background-position: 50% 20%;
	}
	.sectionBlock.FoilTab::before {
		background-size: 100%;
		right: 0;
		background-position: 50% 0%;
	}
	.sectionBlock h4 {
		width: 100%;
		bottom: 1%;
	}
}
@media (max-width: 480px){
	.sectionBlock {
		padding: 13.5em 0;
	}
}
@media (max-width: 440px){
	.sectionBlock {
		padding: 12em 0;
	}	
}
@media (max-width: 360px){
	.sectionBlock {
		padding: 11em 0;
	}
}
</style>
<script>
jQuery(function ($){    
    $('#mySelect').on('change', function (e) {
     $('#myTab li a').eq($(this).val()).tab('show'); 
});
});
</script>
	<main role="main" class="goit">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part('partials/heading-banner'); ?>

                <div id="scroll-to-main-content">

                    <!-- .packaging-coolant-guide -->
                    <div class="container--packaging-coolant-guide">
						<div class="container nav-tab-desktop ">
	                        <!-- Nav tabs -->
	     
	                        <ul class="nav--packaging-coolant-guide" role="tablist" id="myTab">
								<li role="presentation" class="active"><a href="#guideRecycling" aria-controls="guideRecycling" role="tab" data-toggle="tab">Reuse and Recycle</a></li>
	                            <li role="presentation"><a href="#guidePackaging" aria-controls="guidePackaging" role="tab" data-toggle="tab">Tile-Box Guide</a></li>
	                            <li role="presentation"><a href="#guideFoil" aria-controls="guideFoil" role="tab" data-toggle="tab">FOIL-BOX GUIDE</a></li>
	                            <li role="presentation"><a href="#guideCoolant" aria-controls="profile" role="tab" data-toggle="tab">Coolant Guide</a></li>
	                            	                            <li role="presentation"><a href="#EcoBox" aria-controls="profile" role="tab" data-toggle="tab">ECO-BOX</a></li>
	                            	                            <li role="presentation"><a href="#PluumoBox" aria-controls="profile" role="tab" data-toggle="tab">PLUUMO-BOX</a></li>

	                        </ul>
						</div>
<div class="container">
                       <form class="formxc-tab">
    <select id='mySelect'>
        <option value='0'>Reuse and Recycle</option>
        <option value='1'>Tile-Box Guide</option>
        <option value='2'>FOIL-BOX GUIDE</option>
        <option value='3'>Coolant Guide</option>
                <option value='4'>ECO-BOX</option>
        <option value='5'>PLUUMO-BOX</option>

    </select>
</form>
</div>
                        <!-- Tab panes -->
                        <div class="tab-content">
							<div role="tabpanel" class="tab-pane tab-pane--cpg fade in active" id="guideRecycling">
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

									<?php if($firstTabVidID){ ?>
			                            <div class="sectionBlock ReuseTab">
			                            	<h4><?php echo $firstTabVidTXT; ?><br/><span><?php echo $firstTabVidTXTSUB; ?></span></h4>
			                            	<?php echo do_shortcode('[video_lightbox_vimeo5 video_id="'.$firstTabVidID.'" width="1024" height="768" anchor=" "]'); ?>
			                            </div>
		                            <?php }?>	

								</div>
							</div>
                            <div role="tabpanel" class="tab-pane tab-pane--cpg fade in" id="guidePackaging">
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

									<?php if($secondTabVidID){ ?>
			                            <div class="sectionBlock TileTab">
			                            	<h4><?php echo $secondTabVidTXT; ?><br/><span><?php echo $secondTabVidTXTSUB; ?></span></h4>
			                            	<?php echo do_shortcode('[video_lightbox_vimeo5 video_id="'.$secondTabVidID.'" width="1024" height="768" anchor=" "]'); ?>
			                            </div>
		                            <?php }?>

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


                            <div role="tabpanel" class="tab-pane tab-pane--cpg fade" id="guideFoil">
								<div class="cpg">
									<div class="container">
		                                <h2>FOIL-BOX Guide</h2>
										<p>Welcome to our onlline packaging guide. Below you’ll find an easy step-by-step guide on how to successfully construct our insulated boxes as well as inserting the Easi Foil-Box Solution. </p>
										<ol class="list--cpg">
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">1</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-foil/step1-foil.png'; ?>" alt="Unpack your Foil-Box Solution with your Easi-Folding Jig" class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Unpack your Foil-Box Solution with your Easi-Folding Jig</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">2</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-foil/step2-foil.png'; ?>" alt="Pull foil liner over jig, fold in corners and tape to secure" class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Pull foil liner over jig, fold in corners and tape to secure</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">3</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-foil/step3-foil.png'; ?>" alt="Place the Foil-Box along with the coolants and contents inside the box and pack out any spare space" class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Place the Foil-Box along with the coolants and contents inside the box and pack out any spare space</div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">4</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-foil/step4-foil.png'; ?>" alt="Secure top closed with peel strip, fold corners into box " class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Secure top closed with peel strip, fold corners into box </div>
											</li>
											<li class="list--cpg__i">
												<div class="list--cpg__i__no">5</div>
												<div class="list--cpg__i__img">
													<img src="<?php echo get_template_directory_uri().'/img/packaging-foil/step5-foil.png'; ?>" alt="Close box and tape to secure" class="img-responsive">
												</div>
												<div class="list--cpg__i__caption">Close box and tape to secure</div>
											</li>
										</ol>
		                            </div>

									<?php if($thirdTabVidID){ ?>
			                            <div class="sectionBlock FoilTab">
			                            	<h4><?php echo $thirdTabVidTXT; ?><br/><span><?php echo $thirdTabVidTXTSUB; ?></span></h4>
			                            	<?php echo do_shortcode('[video_lightbox_vimeo5 video_id="'.$thirdTabVidID.'" width="1024" height="768" anchor=" "]'); ?>
			                            </div>
		                            <?php }?>	

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
									<?php if($fourthTabVidID){ ?>
			                            <div class="sectionBlock CoolantTab">
			                            	<h4><?php echo $fourthTabVidTXT; ?><br/><span><?php echo $fourthTabVidTXTSUB; ?></span></h4>
			                            	<?php echo do_shortcode('[video_lightbox_vimeo5 video_id="'.$fourthTabVidID.'" width="1024" height="768" anchor=" "]'); ?>
			                            </div>
		                            <?php }?>		                            
								</div>
								<div class="cpg--sub">
									<div class="container">
										<h3>Useful Tips</h3>
										<p>To help your coolants freeze more quickly, remove them from their box and flatten them in the freezer.</p>
										<p>The coolant gel can be disposed of as normal household waste and the outer film is recyclable as LDPE 4.</p>
									</div>
								</div>
							</div>												
							
							<div role="tabpanel" class="tab-pane tab-pane--cpg fade" id="EcoBox">
								<div class="cpg">
									<div class="container">
                                        <p class="logogxc"><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>enviro.png" /></p>
                                        <hr class="hrx">
		                    <p class="ecobx"><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>eco-box.png" /></p>

                                        <h2>CAN I RE-USE IT?</h2>
										<p>Yes, definitely! We love to hear that our products are being re-used, whether it be to keep shopping chilled in the boot of your car on the way home from the supermarket, whilst camping with your family, or even on a picnic. Post these on social media using #licencetochill.</p>
                                        <h2>HOW DO I DISPOSE OF IT? </h2>
										<p>If you aren’t looking to re-use the Eco-Box, then this economical solution is completely curb side recyclable. Both the cardboard outer and the paper liner can go straight into your cardboard/paper recycling. Even if the solution ends up in your general waste, it is completely biodegradable, and will naturally break down.  </p>
                                    </div>
                                    <div class="bgr-gradient">
                                        <div class="container">
                                            <ul class="imgsc-list">
                                            <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>box3c.png" /></p>
                                                <p>The outer boxes are great for moving house, <br />
or even loft storage! </p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>bucket-veg.png" /></p>
                                                <p>Keeping drinks/food cold on the beach  </p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>trance-bgc.png" /></p>
                                                <p>Knee pads for gardening </p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>icon34s.png" /></p>
                                                <p> A great alternative to bubble wrap for <br />
protecting valuable items! </p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>scisorcc.png" /></p>
                                                <p>Craft projects</p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>boxflowr.png" /></p>
                                                <p>You can even use our carboard boxes <Br />
as plant pots!  </p></li>
                                            </ul>
                                        </div>
                                    </div>
										 
		                            </div>
											                            
								</div>
							 
 	<div role="tabpanel" class="tab-pane tab-pane--cpg pluumo-box-cpg fade" id="PluumoBox">
								<div class="cpg">
									<div class="container">
                                        <p class="logogxc"><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>enviro.png" /></p>
                                        <hr class="hrx">
		                    <p class="ecobx"><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>pluumo-box.png" /></p>

                                        <h2>CAN I RE-USE IT?</h2>
										<p>Yes, definitely! We love to hear that our products are being re-used, whether it be to keep shopping chilled in the boot of your car on the way home from the supermarket, whilst camping with your family, or even on a picnic. Post these on social media using #licencetochill. 
</p>
                                        <h2>HOW DO I DISPOSE OF IT? </h2>
										<p>If you aren’t looking to re-use the Pluumo Liners, they have been designed to be totally compostable. So, if you have the facilities for it, you can pop the whole liner into your compost without having to separate any parts.
</p><p> Otherwise, please dispose of your Pluumo Liners in the general waste. As it is made from natural and biodegradable materials, it will have a far less of an impact than plastic packaging. The cardboard outer box can go in the usual paper recycling stream.</p>
                                    </div>
                                    <div class="bgr-gradient">
                                        <div class="container">
                                            <ul class="imgsc-list">
                                            <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>box3c.png" /></p>
                                                <p>The outer boxes are great for moving house,<br />
or even loft storage!  </p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>bucket-veg.png" /></p>
                                                <p>Keeping drinks/food cold on the beach  </p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>trance-bgc.png" /></p>
                                                <p>Knee pads for gardening </p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>basket-hng.png" /></p>
                                                <p> Hanging baskets</p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>icon35s.png" /></p>
                                                <p> A great alternative to bubble wrap for <Br />
protecting valuable items</p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>icon36s.png" /></p>
                                                <p>Protection for plants/trees from frost  </p></li>
                                                  <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>basket-cjg.png" /></p>
                                                <p>Pet baskets</p></li>
                                                               <li><p><img src="<?php echo get_template_directory_uri().'/img/packaging-coolant-guide/ecobox/'; ?>scissor2.png" /></p>
                                                <p>Craft projects  </p></li>
                                            </ul>
                                        </div>
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
