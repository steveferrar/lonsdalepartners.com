<?php
/**
	The template part for displaying the CONTACT page.
*/
?>


<!-- Left Column -->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="row">


	<!-- Content / Address -->
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="block block--padding contact-us__block-1">
			<?php the_content(); ?>
			<div class="col-xxs-12 col-xs-12 col-sm-12 hidden-md hidden-lg">
				<p>Lonsdale Capital Partners LLP,<br />21 Upper Brook Street,<br />London, W1K 7PY</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
		<div class="block block--padding contact-us__block-2">
			<p>Lonsdale Capital Partners LLP,<br />21 Upper Brook Street,<br />London, W1K 7PY</p>
		</div>
	</div>


	<!-- Google Map -->
	<div class="col-xxs-12 col-xs-6 pull-xs-right col-sm-6 pull-sm-right col-md-6 pull-md-right col-lg-6 pull-lg-right ">
		<a class="block block--image contact-us__block-map" href="https://www.google.co.uk/maps/place/Lonsdale+Capital+Partners+LLP/@51.5112818,-0.1558687,15z/data=!4m2!3m1!1s0x48760533b3985d63:0x38662e4b6b3890ae" title="Find us on Google" target="_blank">
			<img src="<?php bloginfo('template_url'); ?>/img/images/google-map.png" data-no-retina />
		</a>
	</div>


	<!-- Contact Form -->
	<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="block block--padding contact-us__block-3">
			<p>If you require any further information, please do not hesitate to contact Lonsdale Capital Partners. Alternatively fill in our contact form below.</p><p>Thank you</p>
		</div>
	</div>

	<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="block contact-us__block-form">
			<?php echo do_shortcode('[contact-form-7 id="5" title="Contact"]'); // Contact Form ?>
		</div>
	</div>


	<!-- Colour Boxes -->
	<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
		<div class="block block--colour contact-us__block-7">
			<img src="<?php bloginfo('template_url'); ?>/img/block--242x242.png" data-no-retina />
		</div>
	</div>

	<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
		<div class="block block--colour contact-us__block-8">
			<img src="<?php bloginfo('template_url'); ?>/img/block--242x242.png" data-no-retina />
		</div>
	</div>


</div>
</div>


<!-- Right Column -->
<div class="hidden-xxs col-xxs-12 col-sm-12 col-md-6 col-lg-6">
<div class="row">


	<!-- Team Members-->
	<?php 
	if(get_field('team')): 
	while(has_sub_field('team')): 
	?>

		<?php 
		if(get_sub_field('thumbnail')): 
		$team_image = wp_get_attachment_image_src(get_sub_field('thumbnail'), 'block-image' ); 
		?>

			<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<a class="block block--image" href="<?php echo get_sub_field('link'); ?>" title="<?php get_sub_field('title'); ?>">
					<img src="<?php echo $team_image[0]; ?>" alt="<?php get_sub_field('name'); ?>" />
				</a>
			</div>

		<?php 
		endif; 
		?>

	<?php
	endwhile;
	endif; 
	?>


</div>
</div>