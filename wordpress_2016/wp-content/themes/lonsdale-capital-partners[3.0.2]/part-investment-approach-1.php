<?php
/**
	The template part for displaying the OVERVIEW and HOW WE ADD VALUE pages.
*/
?>


<!-- Images / Navigation -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<div class="row">

	<div class="col-xxs-12 hidden-xs hidden-sm hidden-md hidden-lg">
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

	<div class="hidden-xxs col-xs-6 col-sm-6 col-md-12 col-lg-12">
		<div class="block block--image">
			<img src="<?php bloginfo('template_url'); ?>/img/images/investment-approach-01.jpg" data-no-retina />
		</div>
	</div>

</div>
</div>


<!-- Content -->
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
<div class="row">
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="block block--tall block--padding content__block-1">

			<?php
			if(get_field('headline')):
			?>
				<h2 class="headline">
					<?php echo get_field('headline'); ?>
				</h2>
			<?php
			endif;
			?>

			<?php
			if(get_field('column_1')):
				echo get_field('column_1');
			endif;
			?>

			<div class="hidden-md hidden-lg">

				<?php
				if(get_field('column_2')):
					echo get_field('column_2');
				endif;
				?>

				<?php
				if(get_field('column_3')):
					echo get_field('column_3');
				endif;
				?>

			</div>
		
		</div>
	</div>
	
	<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
		<div class="block block--tall block--padding content__block-2">

			<?php
			if(get_field('column_2')):
				echo get_field('column_2');
			endif;
			?>

		</div>
	</div>
	
	<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
		<div class="block block--tall block--padding content__block-3">

			<?php
			if(get_field('column_3')):
				echo get_field('column_3');
			endif;
			?>

		</div>
	</div>

</div>
</div>