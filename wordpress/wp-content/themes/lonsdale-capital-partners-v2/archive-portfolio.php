<?php
/*
The template for displaying the NEWS archive page.
*/

get_header(); ?>
	
    <div class="content portfolio-archive">
    	
        <h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>We work closely with management, having our Partners<Br />actively involved at Board level &amp; investing personally.
<?php endif; ?></h1>
    	
        <div class="portfolio-items">
        
		<?php 
		if ( have_posts() ) : 
		?>

            <?php
			$portfolioArgs = array( 'post_type' => 'portfolio', 'post_status' => 'publish', 'posts_per_page' => -1 );
			$portfolioArticles = new WP_Query( $portfolioArgs );
			$i = 0;	
					
			while ( $portfolioArticles->have_posts() ) : $portfolioArticles->the_post();
						
			?>
            
                <div class="portfolio-item portfolio-archive-<?php echo $i; ?> <?php if($i % 2): echo 'even'; endif; ?>">
                
                	<div class="block thumbnail">
						<?php $thumbnail = wp_get_attachment_image_src(get_field('thumbnail'), 'block-image' ); ?>
                    	<img src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" />
                    </div>
                    
                	
                    <div class="block text" style="background-color:<?php the_field('background_colour'); ?>;">
                    	<h2 class="title"><?php the_title(); ?></h2>
                        <div class="investment">
							<?php if (get_field('investment_date')): echo '<p>Investment date: ' . get_field('investment_date') . '</p>'; endif; ?>
                            <?php if (get_field('exit_date')): echo '<p>Exit date: ' . get_field('exit_date') . '</p>'; endif; ?>
                            <?php if (get_field('sector')): echo '<p>Sector: ' . get_field('sector') . '</p>'; endif; ?>
                        </div>
                        <?php //  if (get_field('company_website')): echo '<p class="website">Company website: <a href="http://' . get_field('company_website') . '" title="' . get_field('company_website') . '" target="_blank">' . get_field('company_website') . '</a></p>'; endif; ?>
						<?php if (get_field('company_website')): ?> 
							<p class="website">
								Company website: <a href="http://<?php echo get_field('company_website'); ?>" title="<?php echo get_field('company_website'); ?>" target="_blank"><?php echo get_field('company_website'); ?></a>
								<?php if (get_field('company_website_2')): echo '<br /><a href="http://' . get_field('company_website_2') . '" title="' . get_field('company_website_2') . '" target="_blank">' . get_field('company_website_2') . '</a>'; endif; ?>
							</p>
						<?php endif; ?>
					    <?php if(get_field('logo')):
							$logo = wp_get_attachment_image_src(get_field('logo'), 'full' ); ?>
                        	<img src="<?php echo $logo[0]; ?>" title="<?php the_title(); ?>" />
						<?php endif; ?>
                        <p class="readmore"><a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>">Read more &gt;</a></p>
                    </div>
                	
                
                
                
                </div>
            
			<?php
			$i++;
			endwhile;
			?>
			
		<?php 
		endif; 
		?>
        
        <div class="clearfix"></div>
        
        </div>

    </div><!-- .content -->
            
    <div class="clearfix"></div>
    
<?php get_footer(); ?>