<?php
/**
	The template for displaying the PORTFOLIO single.
*/
get_header();

if ( have_posts() ) :
while ( have_posts() ) : 
the_post();

// Set Up Images
if(get_field('image')): 
	$portfolio_large_image = wp_get_attachment_image_src(get_field('image'), 'porfolio-image' );
	$portfolio_small_image = wp_get_attachment_image_src(get_field('thumbnail'), 'block-image' );
endif;

// Set Background Colour
if(get_field('background_colour')): 
	$background_colour = ' style="background-color:' . get_field('background_colour') . ' ;"';
	echo '<style>.single-portfolio .content__block-info:before, .single-portfolio .content__block-1:before, .single-portfolio .content__block-2:before, .single-portfolio .content__block-3:before, .single-portfolio .content__block-4:before, .single-portfolio .content__blocks:after{ background:' . get_field('background_colour') . '}</style>';
else:
	$background_colour = '';
endif;


?>
		
	<section class="single single__team"> 
		
		<div class="container">

			<div class="row">

				<article class="portfolio__single-article">


					<!-- Top Row -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">

						<div class="col-xxs-12 col-xs-6 pull-xs-right col-sm-6 pull-sm-right col-md-3 col-lg-3">
							<div class="block block--image">
								<img src="<?php echo $portfolio_small_image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3 portfolio__single-heading">
							<div class="block block--padding content__block-info"<?php echo $background_colour; ?>>

			                    <h2><?php the_title(); ?></h2>
			                    <div class="portfolio__single-information">
			                        <?php if (get_field('investment_date')): echo '<p><strong>Investment date:</strong> ' . get_field('investment_date') . '</p>'; endif; ?>
			                        <?php if (get_field('exit_date')): echo '<p><strong>Exit date:</strong> ' . get_field('exit_date') . '</p>'; endif; ?>
			                        <?php if (get_field('sector')): echo '<p><strong>Sector:</strong> ' . get_field('sector') . '</p>'; endif; ?>
				                    <?php if (get_field('company_website')): ?> 
										<p class="website">
											<strong>Company website:</strong> <a href="http://<?php echo get_field('company_website'); ?>" title="<?php echo get_field('company_website'); ?>" target="_blank"><?php echo get_field('company_website'); ?></a>
											<?php if (get_field('company_website_2')): echo '<br /><a href="http://' . get_field('company_website_2') . '" title="' . get_field('company_website_2') . '" target="_blank">' . get_field('company_website_2') . '</a>'; endif; ?>
										</p>
									<?php endif; ?>
				                    <?php if(get_field('logo')):
				                        $logo = wp_get_attachment_image_src(get_field('logo'), 'full' ); ?>
				                        <img src="<?php echo $logo[0]; ?>" title="<?php the_title(); ?>" class="portfolio__single-image" />
				                    <?php endif; ?>
			                    </div>

								<p class="portfolio__single-back"><a href="<?php echo get_post_type_archive_link('portfolio'); ?>" >&lsaquo; Back</a></p>

							</div>
						</div>

						<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
							<div class="block block--image">
								<img src="<?php echo $portfolio_large_image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>

					</div>
					</div>


					<!-- Bottom Row -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content__blocks">
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<div class="block block--padding content__block-1"<?php echo $background_colour; ?>>
										
										<?php
										if(get_field('headline')):
										?>
											<h2 class="portfolio__single-title">
												<?php echo get_field('headline'); ?>
											</h2>
										<?php
										endif;
										?>

										<?php
										echo get_field('column_1');
										?>

										<div class="hidden-md hidden-lg">
											<?php
											// Text 2
											if(get_field('column_2')): 
												echo get_field('column_2');
											endif;
											// Text 3
											if(get_field('column_3')): 
												echo get_field('column_3');
											endif;
											// Text 4
											if(get_field('column_4')): 
												echo get_field('column_4');
											endif;
											?>
										</div>

									</div>
								</div>

								<?php
								// Text 2
								if(get_field('column_2')): 
								?>
									<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
										<div class="block block--padding content__block-2"<?php echo $background_colour; ?>>
											<?php
											echo get_field('column_2');
											?>
										</div>
									</div>
								<?php
								endif;
								?>

								<?php
								// Text 3
								if(get_field('column_3')): 
								?>
									<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
										<div class="block block--padding content__block-3"<?php echo $background_colour; ?>>
											<?php
											echo get_field('column_3');
											?>
										</div>
									</div>
								<?php
								endif;
								?>

								<?php
								// Text 4
								if(get_field('column_4')): 
								?>
									<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
										<div class="block block--padding content__block-4"<?php echo $background_colour; ?>>
											<?php
											echo get_field('column_4');
											?>
										</div>
									</div>
								<?php
								endif;
								?>

							</div>
						</div>

						<div class="hidden-xxs col-xs-12 col-sm-12 hidden-md hidden-lg">
							<div class="block block--image">
								<img src="<?php echo $portfolio_large_image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>


					</div>
					</div>


				</article>


			</div>
		
		</div>

	</section>
	
<?php
endwhile;
endif;
get_footer();
?>