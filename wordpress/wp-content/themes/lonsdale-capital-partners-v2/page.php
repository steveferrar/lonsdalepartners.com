<?php
/*
The template for displaying all GENERIC and most SPECIFIC pages.
*/
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>   
            
	<?php if(is_page(12) || is_page(20)): // Investment Criteria: Overview, Investment Criteria: How We Add Value ?>
    <div class="content investment-criteria">
    
    	<h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>We invest in a wide variety of sectors, in companies that are cash generative &amp; where the business model is a platform for growth.<?php endif; ?></h1>
        
        <div class="column">
        
        	<div class="block sub-nav">
	            <h2>Investment Approach</h2>
            	<p><a href="<?php echo get_permalink(12);?>" title="Overview" class="overview">Overview</a></p>
            	<p><a href="<?php echo get_permalink(19);?>" title="What We Do" class="what-we-do">What We Do</a></p>
            	<p><a href="<?php echo get_permalink(20);?>" title="How We Add Value" class="how-we-add-value">How We Add Value</a></p>
            	<p><a href="<?php echo get_permalink(27);?>" title="Where We Are Different" class="where-we-are-different">Where We Are Different</a></p>
            </div>
            
            <div class="block small-image">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-01.jpg" alt="<?php the_title(); ?>" />
            </div>
            
        </div>
        
        <div class="large-text">
       		
            <div class="block"><?php if(get_field('headline')): echo '<h2 class="headline">' . get_field('headline') . '</h2>'; endif; ?><?php if(get_field('column_1')): echo get_field('column_1'); endif;?></div>
            <div class="block"><?php if(get_field('column_2')): echo get_field('column_2'); endif;?></div>
       		<div class="block last"><?php if(get_field('column_3')): echo get_field('column_3'); endif;?></div>
		</div>      

    </div>
    
    <?php elseif(is_page(19)): // Investment Criteria: What We Do, Investment Criteria: Where We Are Different ?>
    <div class="content investment-criteria">
    
    	<h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>We invest in a wide variety of sectors, in companies that are cash generative &amp; where the business model is a platform for growth.<?php endif; ?></h1>
        
        <div class="column">
        
        	<div class="block sub-nav">
	            <h2>Investment Approach</h2>
            	<p><a href="<?php echo get_permalink(12);?>" title="Overview" class="overview">Overview</a></p>
            	<p><a href="<?php echo get_permalink(19);?>" title="What We Do" class="what-we-do">What We Do</a></p>
            	<p><a href="<?php echo get_permalink(20);?>" title="How We Add Value" class="how-we-add-value">How We Add Value</a></p>
            	<p><a href="<?php echo get_permalink(27);?>" title="Where We Are Different" class="where-we-are-different">Where We Are Different</a></p>
            </div>
            
            <div class="block small-image">
            </div>
        
        </div>
            
        <div class="block large-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-02.jpg" alt="<?php the_title(); ?>" />
        </div>
        
        <div class="block small-text"><?php if(get_field('headline')): echo '<h2 class="headline">' . get_field('headline') . '</h2>'; endif; ?><?php the_content(); ?></div>

    </div>
    
    <?php elseif(is_page(27)): // Investment Criteria: What We Do, Investment Criteria: Where We Are Different ?>
    <div class="content investment-criteria">
    
    	<h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>We will look at taking both majorities or minority positions in the companies that we back.<?php endif; ?></h1>
        
        <div class="column">
        
        	<div class="block sub-nav">
	            <h2>Investment Approach</h2>
            	<p><a href="<?php echo get_permalink(12);?>" title="Overview" class="overview">Overview</a></p>
            	<p><a href="<?php echo get_permalink(19);?>" title="What We Do" class="what-we-do">What We Do</a></p>
            	<p><a href="<?php echo get_permalink(20);?>" title="How We Add Value" class="how-we-add-value">How We Add Value</a></p>
            	<p><a href="<?php echo get_permalink(27);?>" title="Where We Are Different" class="where-we-are-different">Where We Are Different</a></p>
            </div>
            
            <div class="block small-image">
            </div>
        
        </div>        
        
        <div class="block small-text" style="margin-right:4px; background:#80acf7;"><?php if(get_field('headline')): echo '<h2 class="headline">' . get_field('headline') . '</h2>'; endif; ?><?php the_content(); ?></div>

        <div class="block large-image last">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-02.jpg" alt="<?php the_title(); ?>" />
        </div>
        
    </div>
    
    <?php elseif(is_page(9)): // Team: Archive ?>
    <div class="content team">
    
    	<h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>The team comprises three founders - Alan Dargan, Ross Finegan &amp; David Gasparro - a team with complementary skill sets.<?php endif; ?></h1>
        
		<div class="team-container">
		
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
			
			<div class="clearfix bottom"></div>
		
        </div>

    </div>
        
    <?php elseif(is_page(97)): // Investors ?>
    
    <?php if(is_user_logged_in()): ?>
    
        <div class="content investors">
        
            <h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>We’ve helped build the strategy, globalise, rebranded &amp; performed add-on acquisitions.<?php endif; ?></h1>
            
            <div class="block large">
            
            	<h2>Downloads</h2>
        		
                <div class="downloads">
                <?php /*
                */?>
                
                <?php
                if(get_field("documents")):
                ?>             	
                    <?php
                    $inv = 1;
                    while(has_sub_field("documents")):
                    ?>
                                    
						<?php
                        if(get_sub_field("file") && get_sub_field('title')):
                        $file = get_sub_field('file');
                        ?>
                        
                        <div class="download download-<?php echo $inv; ?>">
                            <p class="title"><a href="<?php echo $file; ?>" title="<?php echo get_sub_field('title'); ?>" target="_blank"><?php echo get_sub_field('title'); ?></a></p>
                            <?php if(get_sub_field('description')): echo '<p class="description">' . get_sub_field('description') . '</p>'; endif; ?>
                            <p class="downloadbutton"><a href="<?php echo $file; ?>" title="<?php echo get_sub_field('title'); ?>" target="_blank">Click here to download</a></p>
                        </div>
                        <?php
                        endif;
                        ?>
                    
                    <?php
                    $inv++; 
                    endwhile;
                    ?>
                 
                <?php 
                endif; 
                ?>
                </div>
                
            </div>
            
            <div class="column">
            
                <div class="block image">
                </div>
                
                <div class="block colour">
                </div>
                
            </div>
            
        </div>
    
    <?php else: ?>
    
        <div class="content investors">
        
            <h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>We&rsquo;ve helped build the strategy, developed, globalised,<br />rebranded &amp; performed add-on acquisitions to new business.<?php endif; ?></h1>
            
            <div class="block large-image">
            </div>
            
            <div class="column">
            
                <div class="block login-form">
                    <h2>User Login</h2>
                     <?php $args = array(
                            'echo'           => true,
                            'redirect'       => get_permalink(97), 
                            'form_id'        => 'loginform',
                            'label_username' => __( 'Username' ),
                            'label_password' => __( 'Password' ),
                            'label_remember' => __( 'Remember Me' ),
                            'id_username'    => 'user_login',
                            'id_password'    => 'user_pass',
                            'id_remember'    => 'rememberme',
                            'id_submit'      => 'wp-submit',
                            'remember'       => true,
                            'value_username' => NULL,
                            'value_remember' => false
                    ); ?> 
                    <?php wp_login_form( $args ); ?> 

                </div>
                
                <div class="block colour">
                </div>
                
            </div>
            
        </div>
        
    <?php endif; ?>
    
    <?php elseif(is_page(14)): // Contact Us ?>
    <div class="content contact">
    
		<?php 
		/*
        if(get_field('thumbnail', 43)):
            $team_image_1_src = wp_get_attachment_image_src(get_field('thumbnail', 43), 'block-image' );
            $team_image_1 = $team_image_1_src[0];
        else:
            $team_image_1 = get_stylesheet_directory_uri() . './img/team-01.jpg';
        endif; 
        if(get_field('thumbnail', 48)):
            $team_image_2_src = wp_get_attachment_image_src(get_field('thumbnail', 48), 'block-image' );
            $team_image_2 = $team_image_2_src[0];
        else:
            $team_image_2 = get_stylesheet_directory_uri() . './img/team-02.jpg';
        endif; 
        if(get_field('thumbnail', 50)):
            $team_image_3_src = wp_get_attachment_image_src(get_field('thumbnail', 50), 'block-image' );
            $team_image_3 = $team_image_3_src[0];
        else:
            $team_image_3 = get_stylesheet_directory_uri() . './img/team-03.jpg';
        endif; 
        if(get_field('thumbnail', 52)):
            $team_image_4_src = wp_get_attachment_image_src(get_field('thumbnail', 52), 'block-image' );
            $team_image_4 = $team_image_4_src[0];
        else:
            $team_image_4 = get_stylesheet_directory_uri() . './img/team-04.jpg';
        endif; 
        if(get_field('thumbnail', 54)):
            $team_image_5_src = wp_get_attachment_image_src(get_field('thumbnail', 54), 'block-image' );
            $team_image_5 = $team_image_5_src[0];
        else:
            $team_image_5 = get_stylesheet_directory_uri() . './img/team-05.jpg';
        endif; 
        if(get_field('thumbnail', 57)):
            $team_image_6_src = wp_get_attachment_image_src(get_field('thumbnail', 57), 'block-image' );
            $team_image_6 = $team_image_6_src[0];
        else:
            $team_image_6 = get_stylesheet_directory_uri() . './img/team-06.jpg';
        endif; 
        */
		?>
          
    	<h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>Our passion is to help good quality businesses &amp; management teams grow their franchises, providing the finance &amp; expertise.<?php endif; ?></h1>

		<div class="contact-container">
		
			<div class="contact-left">
				<div class="block small-text" style="background-color:#4f6aad;"><?php the_content(); ?></div>
				<div class="block small-text" style="background-color:#1e90dc;"><p>Lonsdale Capital Partners LLP,<br />21 Upper Brook Street,<br />London, W1K 7PY</p></div>
				<div class="block small-text" style="background-color:#00cffa;"><p>If you require any further information, please do not hesitate to contact Lonsdale Capital Partners. Alternatively fill in our contact form below.</p><p>Thank you</p></div>
				<div class="block google-map"><a href="https://www.google.co.uk/maps/place/Lonsdale+Capital+Partners+LLP/@51.5112818,-0.1558687,15z/data=!4m2!3m1!1s0x48760533b3985d63:0x38662e4b6b3890ae" title="Find us on Google" target="_blank"></a></div>
				<div class="form-content"><?php echo do_shortcode('[contact-form-7 id="5" title="Contact"]'); // Contact Form ?></div>
			</div>
			
			<div class="contact-right">
				<?php 
				if(get_field('team')): 
				$i = 1;	
				while(has_sub_field('team')): 
				?>
					<?php 
					if(get_sub_field('thumbnail')): 
					$team_image = wp_get_attachment_image_src(get_sub_field('thumbnail'), 'block-image' ); 
					?>
						<div class="block <?php if(0 == ($i % 2)) { ?> last<?php }; ?>"><a href="<?php echo get_sub_field('link'); ?>" title="<?php get_sub_field('title'); ?>" class=""><img src="<?php echo $team_image[0]; ?>" alt="<?php get_sub_field('name'); ?>" /></a></div>
					<?php 
					endif; 
					?>
				<?php
				$i++;
				endwhile;
				endif; 
				?>
		   
			</div>
			
			<div class="clearfix"></div>
   		
		</div>
		
    </div>
    
    <?php endif; ?>
    
<?php 
endwhile; endif;
get_footer();
?>