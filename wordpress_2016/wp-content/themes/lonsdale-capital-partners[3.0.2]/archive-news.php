<?php
/**
	The template for displaying the NEWS archive.
*/
get_header();
if ( have_posts() ) :
?>  
		
	<section class="archive news__archive"> 
		
		<div class="container">

			<div class="row">


				<!-- Image -->
				<div class="col-xxs-12 col-xs-6 pull-xs-right col-sm-6 pull-sm-right hidden-md hidden-lg">
					<div class="block block--image">
						<img src="<?php bloginfo('template_url'); ?>/img/images/news-02.jpg" data-no-retina />
					</div>
				</div>

				<!-- Articles -->
				<div class="news__archive-articles">

					<?php
					$i = 1;	
					while ( have_posts() ) :
					the_post();

					// Set Background Colour
				 	if(get_field('background_colour')): 
				 		$background_colour = ' style="background-color:' . get_field('background_colour') . ' ;"';
			 		else:
			 			$background_colour = '';
					endif;
					?>

						<article class="news__archive-article">

							<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3 <?php if( $i == 2 || $i == 4 ){ ?> col-md-offset-6  col-lg-offset-6<?php }; ?><?php if( $i == 3 || $i == 5 ){ ?> clear-md clear-lg<?php }; ?>">
								<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>" class="block block--padding"<?php echo $background_colour; ?>>
									
									<p class="news__archive-date">
										<strong>News</strong>
										<span><?php the_date(); ?></span>
									</p>
									
									<?php
									if(get_field('headline')):
									?>
										<h2 class="news__archive-title">
											<?php echo get_field('headline'); ?>
										</h2>
									<?php
									endif;
									?>

									</h3>

									<p class="news__archive-readmore">Read more &rsaquo;</p>

								</a>
							</div>

						</article>

					<?php
					$i++;
					endwhile;
					?>
				
				</div>


			</div>
		
		</div>

	</section>
	
<?php
endif;
get_footer();
?>