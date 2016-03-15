<?php
/*
The main template file.
*/
get_header(); ?>
			
	<section>
	
		<div class="row">
	
			<div class="container">
    
			<?php 
			if(have_posts()): 
			?>
			
				<?php 
				while(have_posts()): 
				the_post(); 
				?>
				
					<div class="col-xxs-12 col-xs-12 col-sm-12">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					
				<?php 
				endwhile;
				?>
        
			<?php 
			else: 
			?>
				
				<div class="col-xxs-12 col-xs-12 col-sm-12">
					<h1>Sorry...</h1>
					<p>There are no articles to display at the moment.</p>
					<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here</a> to go back to the home page.</p>
				</div>
        
			<?php 
			endif; 
			?>
				
			</div>
			
		</div>
            
    	<div class="clearfix"></div>
		
	</section>
    
<?php get_footer(); ?>