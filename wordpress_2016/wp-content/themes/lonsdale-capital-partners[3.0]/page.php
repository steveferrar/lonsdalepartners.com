<?php
/*
The template for displaying all GENERIC and most SPECIFIC pages.
*/
get_header();
if ( have_posts() ) : 
while ( have_posts() ) : 
the_post();
?>  
		
	<section class="page"> 
		
		<div class="container">

			<div class="row">

			
				<?php
				// Investment Approach: Overview
				// Investment Approach: How We Add Value 
				if(is_page(12) || is_page(20)): 
				get_template_part('part', 'investment-approach-1');


				// Investment Approach: What We Do
				elseif(is_page(19)):
				get_template_part('part', 'investment-approach-2');


				// Investment Approach: Where We Are Different
				elseif(is_page(27)):
				get_template_part('part', 'investment-approach-3');


				// Investors
				elseif(is_page(97)):
				get_template_part('part', 'investors');


				// Contact Us
				elseif(is_page(14)):
				get_template_part('part', 'contact-us');


				// All Other Pages
				else:
				get_template_part('part', 'generic-page');


				endif; 
				?>


			</div>
		
		</div>

	</section>
	
<?php 
endwhile; 
endif;
get_footer();
?>