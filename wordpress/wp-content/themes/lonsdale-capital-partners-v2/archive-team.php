<?php
/*
The template for displaying the NEWS archive page.
*/

get_header(); ?>
	
    <div class="content team">
    
    	<h1><?php if(get_field('page_heading', 9)): echo get_field('page_heading', 9); else : ?>The team comprises three founders - Alan Dargan, Ross Finegan &amp; David Gasparro - a team with complementary skill sets.<?php endif; ?></h1>
        
		<div class="team-container">
			
			<img src="<?php echo get_template_directory_uri(); ?>/img/team-container-bottom.jpg" class="team-container-bottom" />
		
			<div class="column">
			
				<div class="block sub-nav">
				
					<h2>Team</h2>
					
					<?php if(get_field('sidebar', 9)): echo get_field('sidebar', 9); endif; ?>                
				
				</div>
			
			</div>
				
			<div class="team-shots">
			
				<?php 
				if ( have_posts() ) : 
				?>
		
					<?php
					$teamArgs = array( 'post_type' => 'team', 'post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order' );
					$teamArticles = new WP_Query( $teamArgs );
					$i = 1;	
							
					while ( $teamArticles->have_posts() ) : $teamArticles->the_post();
					?>
						<?php 
						if(get_field('thumbnail')):
							$team_image = wp_get_attachment_image_src(get_field('thumbnail'), 'block-image' );
						else:
							$team_image = wp_get_attachment_image_src(get_field('image'), 'block-image' );
						endif;
						?>
						<div class="block <?php if(0 == ($i % 3)) { ?> last<?php }; ?>"><a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>" class="alan-dargan"><img src="<?php echo $team_image[0]; ?>" alt="<?php the_title(); ?>" /></a></div>
					<?php
					$i++;
					endwhile;
					?>
					
				<?php 
				endif; 
				?>
			
			</div>
			
			<div class="clearfix"></div>
		
        </div>

    </div>
                
    <div class="clearfix"></div>
    
<?php get_footer(); ?>