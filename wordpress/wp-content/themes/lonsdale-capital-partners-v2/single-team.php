<?php
/*
The template for displaying a single Team article.
*/
get_header(); ?>

	<!-- Team -->
    <div class="content team">
    
    	<h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>The team comprises three founders - Alan Dargan, Ross Finegan &amp; David Gasparro - a team with complementary skill sets.<?php endif; ?></h1>
        
        <div class="column">
        
        	<div class="block sub-nav">
            
	            <h2>Team</h2>
                
				<?php if(get_field('sidebar', 9)): echo get_field('sidebar', 9); endif; ?>                
                
            </div>
        
        </div>
		
		<?php if(get_field('image')): $team_large_image = wp_get_attachment_image_src(get_field('image'), 'team-image' ); endif; ?> 
			
        <div class="team">
		
			<?php 
			// Top Text
			if (get_field('text_position') == 'Top'): ?> 
			
				<div class="large-text top" <?php if(get_field('background_colour')): echo 'style="background-color:' . get_field('background_colour') . ' ;"'; endif; ?>>
					<div class="block">
						<h2><?php the_title(); ?></h2>
						<?php if(get_field('email_address')): echo '<p><a href="mailto:' . get_field('email_address') . '" title="' . get_the_title() . '" class="email-address">' . get_field('email_address') . '</a></p>'; endif;?>
						<?php if(get_field('phone')): echo '<p>T ' . get_field('phone') . '</p>'; endif; ?>
						<!-- LinkedIn -->
						<?php if(get_field('linkedin')): ?><p><a href="<?php echo get_field('linkedin'); ?>" target="_blank"><img src="http://www.lonsdalepartners.com/wordpress/wp-content/themes/lonsdale-capital-partners-v2/img/logo-linkedin.png" /></a></p><?php endif; ?>
					</div>
					<div class="block"><?php if(get_field('column_1')): echo get_field('column_1'); endif;?></div>
					<div class="block last"><?php if(get_field('column_2')): echo get_field('column_2'); endif;?></div>
				</div> 
			
				<div class="image"><img src="<?php echo $team_large_image[0]; ?>" alt="<?php the_title(); ?>" /></div>
		   
			
			<?php 
			// Bottom Text
			// elseif (get_field('text_position') == 'Bottom'):
			else: ?>
			
				<div class="image"><img src="<?php echo $team_large_image[0]; ?>" alt="<?php the_title(); ?>" /></div>
			
				<div class="large-text bottom" <?php if(get_field('background_colour')): echo 'style="background-color:' . get_field('background_colour') . ' ;"'; endif; ?>>
					<div class="block">
						<h2><?php the_title(); ?></h2>
						<?php if(get_field('email_address')): echo '<p><a href="mailto:' . get_field('email_address') . '" title="' . get_the_title() . '" class="email-address">' . get_field('email_address') . '</a></p>'; endif;?>
						<?php if(get_field('phone')): echo '<p>T ' . get_field('phone') . '</p>'; endif; ?>
						<!-- LinkedIn -->
						<?php if(get_field('linkedin')): ?><p><a href="<?php echo get_field('linkedin'); ?>" target="_blank"><img src="http://www.lonsdalepartners.com/wordpress/wp-content/themes/lonsdale-capital-partners-v2/img/logo-linkedin.png" /></a></p><?php endif; ?>
					</div>
					<div class="block"><?php if(get_field('column_1')): echo get_field('column_1'); endif;?></div>
					<div class="block last"><?php if(get_field('column_2')): echo get_field('column_2'); endif;?></div>
				</div> 
			
			<?php endif; ?>
       
        </div>

    </div>
    
    			
<?php get_footer(); ?>