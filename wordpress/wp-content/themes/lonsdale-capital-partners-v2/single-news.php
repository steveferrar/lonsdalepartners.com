<?php
/*
The template for displaying a single NEWS article.
*/
get_header(); ?>
	
    <div class="content news-single">
    	
        <h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>For us adding value is all about partnership. Our interest is to<br />use our experience &amp; network to work with management teams.<?php endif; ?></h1>
    	
        <div class="news-items">

		<?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
            
                <div class="news-tall-column" <?php if(get_field('background_colour')): echo 'style="background-color:' . get_field('background_colour') . ' ;"'; endif; ?>>
                	<div class="block">
                        <p class="title"><strong>News</strong> <span><?php echo get_the_date(); ?></span></p>
                        <h2 class="headline"><?php if(get_field('headline')): echo get_field('headline'); endif; ?></h2>
                        <p class="backbutton"><a href="<?php echo get_post_type_archive_link('news'); ?>" title="All News">&lt; Back</a></p>
                    	<?php if(get_field('column_1')): echo get_field('column_1'); endif;?>
                    </div>
                    <div class="block"><?php if(get_field('column_2')): echo get_field('column_2'); endif;?></div>
                </div>  
            
                <div class="news-short-column" <?php if(get_field('background_colour')): echo 'style="background-color:' . get_field('background_colour') . ' ;"'; endif; ?>>
                    <div class="block"><?php if(get_field('column_3')): echo get_field('column_3'); endif;?></div>
                    <div class="block"><?php if(get_field('column_4')): echo get_field('column_4'); endif;?></div>
                </div> 
                
            <?php endwhile; ?>
            
        <?php endif; ?>
        
        <div class="clearfix"></div>
        
        </div>
       
	</div>
    			
<?php get_footer(); ?>