<?php
/**
	The main template file.
*/
get_header();
?>
	
	<?php
	if(have_posts()):
	?>
	
		<?php
		while(have_posts()):
		the_post();
		?>
				
			<section class="page">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
							<?php the_content(); ?>
						</div>
						
					</div>
					
				</div>
				
				<div class="clearfix"></div>
				
			</section>
			
		<?php
		endwhile;
		?>
		
	<?php
	endif;
	?>
			
	<div class="clearfix"></div>
	
<?php
get_footer();
?>