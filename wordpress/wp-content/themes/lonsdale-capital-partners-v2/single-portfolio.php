<?php
/*
The template for displaying a single NEWS article.
*/
get_header(); ?>
	
    <div class="content portfolio-single">
    	
        <h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>For us adding value is all about partnership. Our interest is to<br />use our experience &amp; network to work with management teams.<?php endif; ?></h1>
    	
        <div class="portfolio-item">

		<?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
               
                <div class="block thumbnail">
                    <?php $thumbnail = wp_get_attachment_image_src(get_field('thumbnail'), 'block-image' ); ?>
                    <img src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" />
                </div>
                
                <div class="block text" style="background-color:<?php the_field('background_colour'); ?>;">
                    <h2><?php the_title(); ?></h2>
                    <div class="investment">
                        <?php if (get_field('investment_date')): echo '<p>Investment date: ' . get_field('investment_date') . '</p>'; endif; ?>
                        <?php if (get_field('exit_date')): echo '<p>Exit date: ' . get_field('exit_date') . '</p>'; endif; ?>
                        <?php if (get_field('sector')): echo '<p>Sector: ' . get_field('sector') . '</p>'; endif; ?>
                    </div>
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
                </div>
               
                <div class="block image">
                    <?php $image = wp_get_attachment_image_src(get_field('image'), 'portfolio-image' ); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                </div>
            
                <div class="text-row" style="background-color:<?php the_field('background_colour'); ?>;">
                    <div class="block"><?php if(get_field('headline')): echo '<h2 class="headline">' . get_field('headline') . '</h2>'; endif; ?><?php if(get_field('column_1')): echo get_field('column_1'); endif;?></div>
                    <div class="block"><?php if(get_field('column_2')): echo get_field('column_2'); endif;?></div>
                    <div class="block"><?php if(get_field('column_3')): echo get_field('column_3'); endif;?></div>
                    <div class="block last"><?php if(get_field('column_4')): echo get_field('column_4'); endif;?></div>
                </div> 
                
            <?php endwhile; ?>
            
        <?php endif; ?>
        
        <div class="clearfix"></div>
        
        </div>
       
	</div>
    			
<?php get_footer(); ?>