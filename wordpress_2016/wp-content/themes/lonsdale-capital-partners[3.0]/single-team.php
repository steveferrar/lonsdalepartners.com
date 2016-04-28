<?php
/**
	The template for displaying the TEAM single.
*/
get_header();

if ( have_posts() ) :
while ( have_posts() ) : 
the_post();

// Set Up Images
if(get_field('image')): 
	$team_large_image = wp_get_attachment_image_src(get_field('image'), 'team-image' );
	$team_small_image = wp_get_attachment_image_src(get_field('thumbnail'), 'block-image' );
endif;

// Set Background Colour
if(get_field('background_colour')): 
	$background_colour = ' style="background-color:' . get_field('background_colour') . ' ;"';
	echo '<style>.single-team .content__block-info:before, .single-team .content__block-1:before, .single-team .content__block-2:before{ background:' . get_field('background_colour') . '}</style>';
else:
	$background_colour = '';
endif;


?>
		
	<section class="single single__team"> 
		
		<div class="container">

			<div class="row">


				<!-- Content -->
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<div class="block block--tall block--padding team__menu">

						<h2>Team</h2>

						<?php
						if(get_field('sidebar', 9)):
						while(has_sub_field('sidebar', 9)):

							echo '<p>' . get_sub_field('heading') . ':</p>';
							
							if(get_sub_field('people', 9)):
							echo '<ul>';
							while(has_sub_field('people', 9)):

								$post_object = get_sub_field('link');
								if( $post_object ):
									$post = $post_object;
									setup_postdata( $post ); 
										echo '<li><a href="' . get_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></li>';
									wp_reset_postdata();
								endif;

							endwhile;
							echo '</ul>';
							endif;

						endwhile;
						endif;
						?>

					</div>
				</div>


				<!-- Team Members -->
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<div class="row">

					<?php
					// Top Text
					if (get_field('text_position') == 'Top'):
					?>

						<div class="col-xxs-12 col-xs-6 col-sm-6 hidden-md hidden-lg">
							<div class="block block--image">
								<img src="<?php echo $team_small_image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="block block--padding content__block-info"<?php echo $background_colour; ?>>

								<h2><?php the_title(); ?></h2>
								
								<!-- Email -->
								<?php if(get_field('email_address')): ?>
									<p>
										<a href="mailto:<?php echo get_field('email_address'); ?>" title="<?php the_title(); ?>" class="email-address">
											<?php echo get_field('email_address'); ?>
										</a>
									</p> 
								<?php endif;?>
								
								<!-- Phone -->
								<?php if(get_field('phone')): ?>
									<p>
										T <?php echo get_field('phone'); ?>
									</p>
								<?php endif; ?>
								
								<!-- LinkedIn -->
								<?php if(get_field('linkedin')): ?>
									<p class="single__team-linkedin">
										<a href="<?php echo get_field('linkedin'); ?>" target="_blank">
											<img src="<?php bloginfo('template_url'); ?>/img/logo-linkedin.png" />
										</a>
									</p>
								<?php endif; ?>

								<p class="hidden-md hidden-lg single__team-back"><a href="<?php echo get_post_type_archive_link('team'); ?>">&lsaquo; Back</a></p>

							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class="row">
								
								<?php
								// Text 1
								if(get_field('column_1')): 
								?>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
										<div class="block block--padding content__block-1"<?php echo $background_colour; ?>>
											<?php
											echo get_field('column_1');
											?>
											<div class="hidden-md hidden-lg">
												<?php
												// Text 2
												echo get_field('column_2');
												?>
											</div>
										</div>
									</div>
								<?php
								endif;
								?>

								<?php
								// Text 2
								if(get_field('column_2')): 
								?>
									<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
										<div class="block block--padding content__block-2"<?php echo $background_colour; ?>>
											<?php
											echo get_field('column_2');
											?>
										</div>
									</div>
								<?php
								endif;
								?>

							</div>
						</div>

						<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
							<div class="block block--image">
								<img src="<?php echo $team_large_image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>


					<?php
					// Bottom Text
					else:
					?>


						<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
							<div class="block block--image">
								<img src="<?php echo $team_large_image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 hidden-md hidden-lg">
							<div class="block block--image">
								<img src="<?php echo $team_small_image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<div class="block block--padding content__block-info"<?php echo $background_colour; ?>>

								<h2><?php the_title(); ?></h2>
								
								<!-- Email -->
								<?php if(get_field('email_address')): ?>
									<p>
										<a href="mailto:<?php echo get_field('email_address'); ?>" title="<?php the_title(); ?>" class="email-address">
											<?php echo get_field('email_address'); ?>
										</a>
									</p> 
								<?php endif;?>
								
								<!-- Phone -->
								<?php if(get_field('phone')): ?>
									<p>
										T <?php echo get_field('phone'); ?>
									</p>
								<?php endif; ?>
								
								<!-- LinkedIn -->
								<?php if(get_field('linkedin')): ?>
									<p class="single__team-linkedin">
										<a href="<?php echo get_field('linkedin'); ?>" target="_blank">
											<img src="<?php bloginfo('template_url'); ?>/img/logo-linkedin.png" />
										</a>
									</p>
								<?php endif; ?>

								<p class="hidden-md hidden-lg single__team-back"><a href="<?php echo get_post_type_archive_link('team'); ?>">&lsaquo; Back</a></p>
							
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class="row">
								
								<?php
								// Text 1
								if(get_field('column_1')): 
								?>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
										<div class="block block--padding content__block-1"<?php echo $background_colour; ?>>
											<?php
											echo get_field('column_1');
											?>
											<div class="hidden-md hidden-lg">
												<?php
												// Text 2
												echo get_field('column_2');
												?>
											</div>
										</div>
									</div>
								<?php
								endif;
								?>

								<?php
								// Text 2
								if(get_field('column_2')): 
								?>
									<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
										<div class="block block--padding content__block-2"<?php echo $background_colour; ?>>
											<?php
											echo get_field('column_2');
											?>
										</div>
									</div>
								<?php
								endif;
								?>

							</div>
						</div>

					<?php
					endif;
					?>

				</div>
				</div>


			</div>
		
		</div>

	</section>
	
<?php
endwhile;
endif;
get_footer();
?>