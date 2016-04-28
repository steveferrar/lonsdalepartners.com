<?php
/**
	The template part for displaying the WHAT WE DO page.
*/
?>


<!-- Images / Navigation / Colour Boxes -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<div class="row">

	<div class="col-xxs-12 col-xs-6 pull-xs-right col-sm-6 pull-sm-right hidden-md hidden-lg">
		<div class="block block--image">
			<img src="<?php bloginfo('template_url'); ?>/img/images/investment-approach-01.jpg" data-no-retina />
		</div>
	</div>

	<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-12 col-lg-12">
		<div class="block block--padding investment-approach__menu">
			<h2>Investment Approach</h2>
			<?php wp_nav_menu( array( 'theme_location' => 'investment-approach-menu' ) ); ?>
		</div>
	</div>

	<div class="hidden-xxs hidden-xs hidden-sm col-md-12 col-lg-12">
		<div class="block block--colour">
			<img src="<?php bloginfo('template_url'); ?>/img/block--242x242.png" data-no-retina />
		</div>
	</div>

</div>
</div>


<!-- Image -->
<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="block block--image block--tall">
			<img src="<?php bloginfo('template_url'); ?>/img/images/investment-approach-02.jpg" data-no-retina />
		</div>
	</div>

</div>
</div>


<!-- Content -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
	<div class="block block--tall block--padding content__block-1">

		<?php
		if(get_field('headline')):
		?>
			<h2 class="headline"><?php echo get_field('headline'); ?></h2>
		<?php
		endif;
		?>

		<?php the_content(); ?>
		
	</div>
</div>