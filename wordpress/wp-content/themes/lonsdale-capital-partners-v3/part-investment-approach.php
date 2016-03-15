<?php
/**
	The template part for displaying the INVESTMENT APPROACH sections.
*/
?>
				

<?php
// Overview
// How We Add Value
if( is_page(12) || is_page(20) ):
?>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

		<div class="content__block content__block--navigation">
			<h2><?php echo get_the_title(12); ?></h2>
			<?php wp_nav_menu( array( 'theme_location' => 'investment-approach-menu' ) ); ?>
		</div>

		<div class="clearfix"></div>

		<div class="hidden-xs hidden-sm content__block content__block--image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/about-01.jpg" alt="<?php the_title(); ?>" data-no-retina />
		</div>

	</div>

	<div class="col-xs-6 col-sm-6 hidden-md hidden-lg">

		<div class="content__block content__block--image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/about-01.jpg" alt="<?php the_title(); ?>" data-no-retina />
		</div>

	</div>

	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		
		<div class="content__block content__block--text content__block--large">

			<div class="content__block-text--3">
	            <?php if(get_field('headline')): echo '<h2 class="headline">' . get_field('headline') . '</h2>'; endif; ?>
				<?php the_content(); ?>
       		</div>

		</div>

	</div>


<?php
// What We Do
elseif( is_page(19) ):
?>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

		<div class="content__block content__block--navigation">
			<h2><?php echo get_the_title(12); ?></h2>
			<?php wp_nav_menu( array( 'theme_location' => 'investment-approach-menu' ) ); ?>
		</div>

		<div class="clearfix"></div>

		<div class="hidden-xs hidden-sm content__block content__block--image">
		</div>

	</div>

	<div class="col-xs-6 col-sm-6 hidden-md hidden-lg">

		<div class="content__block content__block--image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/about-01.jpg" alt="<?php the_title(); ?>" data-no-retina />
		</div>

	</div>

	<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
		
		<div class="content__block content__block--image content__block--large">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/about-02.jpg" alt="<?php the_title(); ?>" data-no-retina/>
		</div>

	</div>

	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		
		<div class="content__block content__block--text content__block--large">
			<?php if(get_field('headline')): echo '<h2 class="headline">' . get_field('headline') . '</h2>'; endif; ?>
			<?php the_content(); ?>
		</div>

	</div>


<?php
// Where We Are Different
elseif( is_page(27) ):
?>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

		<div class="content__block content__block--navigation">
			<h2><?php echo get_the_title(12); ?></h2>
			<?php wp_nav_menu( array( 'theme_location' => 'investment-approach-menu' ) ); ?>
		</div>

		<div class="clearfix"></div>

		<div class="hidden-xs hidden-sm content__block content__block--image">
		</div>

	</div>

	<div class="col-xs-6 col-sm-6 hidden-md hidden-lg">

		<div class="content__block content__block--image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/about-01.jpg" alt="<?php the_title(); ?>" data-no-retina />
		</div>

	</div>

	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		
		<div class="content__block content__block--text content__block--large">
			<?php if(get_field('headline')): echo '<h2 class="headline">' . get_field('headline') . '</h2>'; endif; ?>
			<?php the_content(); ?>
		</div>

	</div>

	<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
		
		<div class="content__block content__block--image content__block--large">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/about-02.jpg" alt="<?php the_title(); ?>" data-no-retina/>
		</div>

	</div>


<?php
endif;
?>