<?php
/**
	The template for displaying the 404 pages.
*/
get_header();
?>
		
<section class="404">

	<div class="container">

		<div class="row">
		
			<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<div class="block block--image">
				<img src="<?php bloginfo('template_url'); ?>/img/images/news-02.jpg" data-no-retina />
			</div>
			</div>
		
			<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-9 col-lg-9">
			<div class="block block--padding">

				<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<h2>Sorry&hellip;</h1>
	                <p>We don&rsquo;t seem to be able to find the page that you&rsquo;re looking for.</p>
					<p><br /><a href="<?php echo home_url(); ?>" title="Click Here" class="small">&lsaquo; Back to the home page</a></p>
				</div>
				</div>
			
			</div>	
			</div>	

		</div>
		
	</div>
        
	<div class="clearfix"></div>

</section>
        
<div class="clearfix"></div>
    
<?php
get_footer();
?>