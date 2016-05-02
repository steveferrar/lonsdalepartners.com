<?php
/**
	The template part for displaying all GENERIC pages.
*/
?>


<!-- Image / Colour Block -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<div class="row">

	<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-12 col-lg-12">
		<div class="block">
			<img src="<?php bloginfo('template_url'); ?>/img/images/investment-approach-01.jpg" data-no-retina />
		</div>
	</div>

	<div class="hidden-xxs col-xs-6 col-sm-6 col-md-12 col-lg-12">
		<div class="block">
			<img src="<?php bloginfo('template_url'); ?>/img/block--242x242.png" data-no-retina />
		</div>
	</div>

</div>
</div>


<!-- Content -->
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<div class="block block--tall block--padding">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
</div>