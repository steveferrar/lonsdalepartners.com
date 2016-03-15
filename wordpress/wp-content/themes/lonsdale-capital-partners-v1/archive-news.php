<?php
/*
The template for displaying the NEWS archive page.
*/

get_header(); ?>
	
    <div class="content news-archive">
    	
        <h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>For us adding value is all about partnership. Our interest is to<br />use our experience &amp; network to work with management teams.<?php endif; ?></h1>
    	
        <div class="news-items">
    
    	<div class="image"></div>
		<?php 
		if ( have_posts() ) : 
		?>

            <?php
			$newsArgs = array( 'post_type' => 'news', 'post_status' => 'publish', 'posts_per_page' => -1 );
			$newsArticles = new WP_Query( $newsArgs );
			$i = 1;	
					
			while ( $newsArticles->have_posts() ) : $newsArticles->the_post();
			?>
            	
                <div class="block news-archive-<?php echo $i; ?><?php if ($i % 4): echo ''; else: echo ' last'; endif; ?>" <?php if(get_field('background_colour')): echo 'style="background-color:' . get_field('background_colour') . ' ;"'; endif; ?>>
                    <p class="title"><strong>News</strong> <span class="date"><?php echo get_the_date(); ?></span></p>
                    <h2 class="headline"><?php if(get_field('headline')): echo get_field('headline'); endif; ?></h2>
                    <p class="readmore"><a href="<?php echo get_permalink(); ?>" alt="<?php the_title(); ?>">Read more &gt;</a></p>
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