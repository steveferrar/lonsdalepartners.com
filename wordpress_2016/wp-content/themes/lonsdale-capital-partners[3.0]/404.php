<?php
/**
	The template for displaying the 404 pages.
*/
get_header();
?>
		
<section class="404">

	<div class="container">

		<div class="row mobile_padding-sm">

		
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 page__text">
				<h1 class="hidden-xs hidden-sm">Sorry&hellip;</h1>
                <p>We don&rsquo;t seem to be able to find the page that you&rsquo;re looking for.</p>
				<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here to go back to the home page.</a></p>
			</div>
			

		</div>
		
	</div>
        
	<div class="clearfix"></div>

</section>
        
<div class="clearfix"></div>
    
<?php
get_footer();
?>