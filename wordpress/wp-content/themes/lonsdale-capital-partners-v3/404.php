<?php
/*
The template for displaying the 404 pages.
*/
get_header(); ?>
			
	<section>
	
		<div class="row">
	
			<div class="container">
				
				<div class="col-xxs-12 col-xs-12 col-sm-12">
					<h1>Whoops!</h1>
					<p>We don&rsquo;t seem to be able to find the page that you&rsquo;re looking for.</p>
					<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here</a> to go back to the home page.</p>
				</div>
				
			</div>
			
		</div>
			
		<div class="clearfix"></div>
		
	</section>
    
<?php get_footer(); ?>