<?php
/**
	The template for displaying the PORTFOLIO taxonomies.
*/
get_header();
if ( have_posts() ) :

$term =	$wp_query->queried_object;
echo '<style>body.term-'.$term->slug.' li.term-'.$term->slug.'{ color:#FFFFFF; }</style>';

?>  
		
	<section class="archive archive__portfolio taxonomy taxonomy__portfolio"> 
		
		<div class="container">

			<div class="row">


					<!-- Filter -->
					<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
						<div class="block block--auto block--padding portfolio__close">
							<p><a href="<?php echo get_post_type_archive_link('portfolio'); ?>"><i class="fa fa-times" aria-hidden="true"></i> Clear All Filters</a></p>
						</div>
					</div>

					<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
						<div class="block block--tall block--padding portfolio__menu">

							<h2>Filter Our Portfolio by Sector</h2>
							
							<p><a href="<?php echo get_post_type_archive_link('portfolio'); ?>"><i class="fa fa-times" aria-hidden="true"></i> Clear All Filters</a></p>

							<h3>Status</h3>
							<?php
							$terms = get_terms( 'status' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
							    $count = count( $terms );
							    $i = 0;
							    $term_list = '<ul>';
							    foreach ( $terms as $term ) {
							        $i++;
							        $term_list .= '<li class="term-' . $term->slug . '"><a href="' . esc_url( get_term_link( $term ) ) . '" title="' . $term->name . '">' . $term->name . '</a></li>';
							    }
							    $term_list .= '</ul>';
							    echo $term_list;
							}
							?>

							<h3>Sector</h3>
							<?php
							$terms = get_terms( 'sector' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
							    $count = count( $terms );
							    $i = 0;
							    $term_list = '<ul>';
							    foreach ( $terms as $term ) {
							        $i++;
							        $term_list .= '<li class="term-' . $term->slug . '"><a href="' . esc_url( get_term_link( $term ) ) . '" title="' . $term->name . '">' . $term->name . '</a></li>';
							    }
							    $term_list .= '</ul>';
							    echo $term_list;
							}
							?>

							<h3>Fund</h3>
							<?php
							$terms = get_terms( 'fund' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
							    $count = count( $terms );
							    $i = 0;
							    $term_list = '<ul>';
							    foreach ( $terms as $term ) {
							        $i++;
							        $term_list .= '<li class="term-' . $term->slug . '"><a href="' . esc_url( get_term_link( $term ) ) . '" title="' . $term->name . '">' . $term->name . '</a></li>';
							    }
							    $term_list .= '</ul>';
							    echo $term_list;
							}
							?>

							<!--<h2 class="back"><a href="<?php echo get_post_type_archive_link('portfolio'); ?>">All Sectors</a></h2>-->
				
						</div>
					</div>


					<!-- Portfolio Items -->
					<?php
					$i = 1;	
					while ( have_posts() ) :
					the_post();
					if(get_field('thumbnail')):
						$portfolio_image = wp_get_attachment_image_src(get_field('thumbnail'), 'block-image' );
					else:
						$portfolio_image = wp_get_attachment_image_src(get_field('image'), 'block-image' );
					endif;

					// Set Background Colour
				 	if(get_field('background_colour')): 
				 		$background_colour = ' style="background-color:' . get_field('background_colour') . ' ;"';
			 		else:
			 			$background_colour = '';
					endif;
					?>

						<div class="col-xxs-12 col-xs-6<?php if(0 == ($i % 2)) { ?> pull-xs-right<?php }; ?> col-sm-6<?php if(0 == ($i % 2)) { ?> pull-sm-right<?php }; ?> hidden-md hidden-lg">
							<a class="block block--image" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
								<img src="<?php echo $portfolio_image[0]; ?>" alt="<?php the_title(); ?>" />
							</a>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<a class="block block--padding" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"<?php echo $background_colour; ?>>

			                    <h2><?php the_title(); ?></h2>
			                    <div class="portfolio__single-information">
			                        <?php if (get_field('investment_date')): echo '<p><strong>Investment date:</strong> ' . get_field('investment_date') . '</p>'; endif; ?>
			                        <?php if (get_field('exit_date')): echo '<p><strong>Exit date:</strong> ' . get_field('exit_date') . '</p>'; endif; ?>
			                        <?php if (get_field('sector')): echo '<p><strong>Sector:</strong> ' . get_field('sector') . '</p>'; endif; ?>
				                    <?php if (get_field('company_website')): ?> 
										<p class="website">
											<strong>Company website:</strong> <?php echo get_field('company_website'); ?>
											<?php if (get_field('company_website_2')): echo '<br />' . get_field('company_website_2'); endif; ?>
										</p>
									<?php endif; ?>
				                    <?php if(get_field('logo')):
				                        $logo = wp_get_attachment_image_src(get_field('logo'), 'full' ); ?>
				                        <img src="<?php echo $logo[0]; ?>" title="<?php the_title(); ?>" class="portfolio__single-image" />
				                    <?php endif; ?>
			                    </div>

								<p class="portfolio__single-back">Read More &rsaquo;</p>

							</a>
						</div>

					<?php
					$i++;
					endwhile;
					?>


			</div>
		
		</div>

	</section>
	
<?php
endif;
get_footer();
?>