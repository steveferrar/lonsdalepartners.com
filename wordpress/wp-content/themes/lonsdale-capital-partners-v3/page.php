<?php
/*
The template for displaying all GENERIC and most SPECIFIC pages.
*/
get_header(); ?>
    
	<?php 
	if(have_posts()):
    while(have_posts()): 
	the_post();
	?>
		
		<section>
		
			<div class="container">
		
				<div class="row">

					<?php


					// Investment Approach
					if( is_page(12) || is_page(20) || is_page(19) || is_page(27) ):
						echo get_template_part('part', 'investment-approach' );


					// Investors
					elseif( is_page(97) ):
						echo get_template_part('part', 'investors' );


					// All Other Pages
					else:
					?>
					
						<div class="col-xxs-12 col-xs-12 col-sm-12">
							<h1><?php echo get_the_title() ?></h1>
							<?php the_content(); ?>
						</div>
				
					<?php
					endif;
					?>
					
				</div>
				
			</div>
				
			<div class="clearfix"></div>
			
		</section>
	
	<?php
	endwhile;
	endif;
	?>
            
    <div class="clearfix"></div>
    
<?php get_footer(); ?>