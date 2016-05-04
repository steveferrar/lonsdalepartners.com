<?php
/**
	The template for displaying the NEWS single.
*/
get_header();
if ( have_posts() ) :
while ( have_posts() ) : 
the_post();

// Set Background Colour
if(get_field('background_colour')): 
	$background_colour = ' style="background-color:' . get_field('background_colour') . ' ;"';
	echo '<style>.single-news .content__block-info:before, .single-news .content__block-1:before, .single-news .content__block-2:before, .single-news .content__block-3:before, .single-news .content__block-4:before{ background:' . get_field('background_colour') . '}</style>';
else:
	$background_colour = '';
endif;
?>
		
	<section class="content__content archive news__single"> 
		
		<div class="container">

			<div class="row">

				<article class="news__single-article">


					<!-- Images / Header (Mobile) -->
					<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
					<div class="row">

						<div class="col-xxs-12 col-xs-6 pull-xs-right col-sm-6 pull-sm-right hidden-md hidden-lg">
							<div class="block block--image">
								<img src="<?php bloginfo('template_url'); ?>/img/images/news-02.jpg" data-no-retina />
							</div>
						</div>

						<a href="<?php echo get_post_type_archive_link('news'); ?>" class="col-xxs-12 col-xs-6 col-sm-6 col-md-12 col-lg-12 news__single-heading">
							<div class="block block--padding content__block-info"<?php echo $background_colour; ?>>

								<p class="news__single-date">
									<strong>News</strong>
									<span><?php the_date(); ?></span>
								</p>
															
								<?php
								if(get_field('headline')):
								?>
									<h2 class="news__single-title">
										<?php echo get_field('headline'); ?>
									</h2>
								<?php
								endif;
								?>

								<p class="news__single-back">&lsaquo; Back</p>

							</div>
						</a>

					</div>
					</div>


					<!-- Content -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<div class="block block--xl-tall block--tall block--padding content__block-1"<?php echo $background_colour; ?>>

								<a href="<?php echo get_post_type_archive_link('news'); ?>" class="hidden-xs hidden-sm news__single-heading">

									<p class="news__single-date">
										<strong>News</strong>
										<span><?php the_date(); ?></span>
									</p>
																
									<?php
									if(get_field('headline')):
									?>
										<h2 class="news__single-title">
											<?php echo get_field('headline'); ?>
										</h2>
									<?php
									endif;
									?>

									<p class="news__single-back">&lsaquo; Back</p>

								</a>

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

									<?php
									if(get_field('column_4')):
										echo get_field('column_4');
									endif;
									?>

								</div>
							
							</div>
						</div>
						
						<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
							<div class="block block--xl-tall block--padding content__block-2"<?php echo $background_colour; ?>>

								<?php
								if(get_field('column_2')):
									echo get_field('column_2');
								endif;
								?>

							</div>
						</div>
						
						<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
							<div class="block block--padding content__block-3"<?php echo $background_colour; ?>>

								<?php
								if(get_field('column_3')):
									echo get_field('column_3');
								endif;
								?>

							</div>
						</div>
						
						<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
							<div class="block block--padding content__block-3"<?php echo $background_colour; ?>>

								<?php
								if(get_field('column_4')):
									echo get_field('column_4');
								endif;
								?>

							</div>
						</div>

						<div class="hidden-xs hidden-sm col-md-6 col-lg-6">
							<div class="block block--image block--tall">
								<img src="<?php bloginfo('template_url'); ?>/img/images/news-01.jpg" data-no-retina />
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