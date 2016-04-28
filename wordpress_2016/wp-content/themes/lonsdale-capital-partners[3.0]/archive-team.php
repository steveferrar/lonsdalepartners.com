<?php
/**
	The template for displaying the TEAM archive.
*/
get_header();
if ( have_posts() ) :
?> 
		
	<section class="archive archive__team"> 
		
		<div class="container">

			<div class="row">

				<div class="archive__team-content">


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
						$i = 1;	

						// Set Image
						while ( have_posts() ) :
						the_post();
						if(get_field('thumbnail')):
							$team_image = wp_get_attachment_image_src(get_field('thumbnail'), 'block-image' );
						else:
							$team_image = wp_get_attachment_image_src(get_field('image'), 'block-image' );
						endif;

						// Set Background Colour
					 	if(get_field('background_colour')): 
					 		$background_colour = ' style="background-color:' . get_field('background_colour') . ' ;"';
				 		else:
				 			$background_colour = '';
						endif;
						?>

							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="row">

								<div class="col-xxs-12 col-xs-6<?php if(0 == ($i % 2)) { ?> pull-xs-right<?php }; ?> col-sm-6<?php if(0 == ($i % 2)) { ?> pull-sm-right<?php }; ?> col-md-12 col-lg-12">
									<a class="block block--image" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
										<img src="<?php echo $team_image[0]; ?>" alt="<?php the_title(); ?>" />
									</a>
								</div>

								<div class="col-xxs-12 col-xs-6 col-sm-6 hidden-md hidden-lg">
									<a class="block block--padding" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"<?php echo $background_colour; ?>>
										
										<h2 class="archive__team-title"><?php the_title(); ?></h2>

										<?php 
										if(get_field('position')):
										?>
											<p class="archive__team-position"><?php echo get_field('position'); ?></p>
										<?php
										endif;
										?>

										<p class="archive__team-readprofile">Read profile &rsaquo;</p>

									</a>
								</div>
							
							</div>
							</div>

						<?php
						$i++;
						endwhile;
						?>

					</div>
					</div>


					<div class="clearfix"></div>


				</div>

			</div>
		
		</div>

	</section>
	
<?php
endif;
get_footer();
?>