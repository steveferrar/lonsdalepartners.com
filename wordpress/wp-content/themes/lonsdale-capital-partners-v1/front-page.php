<?php
/*
The template for displaying the HOME page.
*/
get_header(); ?>
            
    <div class="content home">
    
    	<h1><?php if(get_field('page_heading')): echo get_field('page_heading'); else : ?>Lonsdale Capital Partners is an experienced &amp; hands on private equity company concentrating on the smaller end of the market.<?php endif; ?></h1>
		
		<?php
         // Image Blocks
        $image_blocks = get_field('image_blocks' );
            
            // Get Rows
            $image_blocks_1 = $image_blocks[0];
            $image_blocks_2 = $image_blocks[1];
            $image_blocks_3 = $image_blocks[2];
            $image_blocks_4 = $image_blocks[3];
                
                // Get Titles
                $image_blocks_1_title = $image_blocks_1['title'];
                $image_blocks_2_title = $image_blocks_2['title'];
                $image_blocks_3_title = $image_blocks_3['title'];
                $image_blocks_4_title = $image_blocks_4['title'];
                
                // Get Text
                $image_blocks_1_text = $image_blocks_1['text'];
                $image_blocks_2_text = $image_blocks_2['text'];
                $image_blocks_3_text = $image_blocks_3['text'];
                $image_blocks_4_text = $image_blocks_4['text'];
                
                // Get Links
                $image_blocks_1_link = $image_blocks_1['link'];
                $image_blocks_2_link = $image_blocks_2['link'];
                $image_blocks_3_link = $image_blocks_3['link'];
                $image_blocks_4_link = $image_blocks_4['link'];
                
                // Get Images
                $image_blocks_1_image_src_dir = $image_blocks_1['image' ];
                if(!empty($image_blocks_1_image_src_dir)) :
                    $image_blocks_1_image_src = wp_get_attachment_image_src( $image_blocks_1_image_src_dir, 'block-image' );
                    $image_blocks_1_image = $image_blocks_1_image_src[0];
                else:
                    $image_blocks_1_image = get_stylesheet_directory_uri() . '/img/home-01.jpg';
                endif;
                
                $image_blocks_2_image_src_dir = $image_blocks_2['image' ];
                if(!empty($image_blocks_2_image_src_dir)) :
                    $image_blocks_2_image_src = wp_get_attachment_image_src( $image_blocks_2_image_src_dir, 'block-image' );
                    $image_blocks_2_image = $image_blocks_2_image_src[0];
                else:
                    $image_blocks_2_image = get_stylesheet_directory_uri() . '/img/home-02.jpg';
                endif;
                
                $image_blocks_3_image_src_dir = $image_blocks_3['image' ];
                if(!empty($image_blocks_3_image_src_dir)) :
                    $image_blocks_3_image_src = wp_get_attachment_image_src( $image_blocks_3_image_src_dir, 'block-image' );
                    $image_blocks_3_image = $image_blocks_3_image_src[0];
                else:
                    $image_blocks_3_image = get_stylesheet_directory_uri() . '/img/home-03.jpg';
                endif;
                
                $image_blocks_4_image_src_dir = $image_blocks_4['image' ];
                if(!empty($image_blocks_4_image_src_dir)) :
                    $image_blocks_4_image_src = wp_get_attachment_image_src( $image_blocks_4_image_src_dir, 'block-image' );
                    $image_blocks_4_image = $image_blocks_4_image_src[0];
                else:
                    $image_blocks_4_image = get_stylesheet_directory_uri() . '/img/home-04.jpg';
                endif;
                
                
         // Text Blocks
        $text_blocks = get_field('text_blocks' );
            
            // Get Rows
            $text_blocks_1 = $text_blocks[0];
            $text_blocks_2 = $text_blocks[1];
            $text_blocks_3 = $text_blocks[2];
            $text_blocks_4 = $text_blocks[3];
                
                // Get Text
                $text_blocks_1_text = $text_blocks_1['text'];
                $text_blocks_2_text = $text_blocks_2['text'];
                $text_blocks_3_text = $text_blocks_3['text'];
                $text_blocks_4_text = $text_blocks_4['text'];
        ?>
			
        <div class="block image">
        	<img src="<?php echo $image_blocks_1_image; ?>" <?php if(!empty($image_blocks_1_title)): echo 'alt="' . $image_blocks_1_title . '" id="panel_1"' ; endif;?> />
           	<div class="contenthover">
            	<div class="panel">
                    <p><strong><?php if(!empty($image_blocks_1_title)): echo $image_blocks_1_title; endif;?></strong></p>
                    <p><?php if(!empty($image_blocks_1_text)): echo $image_blocks_1_text; endif;?></p>
                    <p><?php if(!empty($image_blocks_1_link)): echo '<p class="readmore"><a href="' . $image_blocks_1_link . '" alt="Read More">Read More &gt;</a></p>'; endif;?></p>
				</div>
			</div>
        </div>
        
        <div class="block text" style="background:#75ACD2;"><?php if(!empty($text_blocks_1_text)): echo $text_blocks_1_text; endif; ?></div>
       
        <div class="block image">
        	<img src="<?php echo $image_blocks_2_image; ?>" <?php if(!empty($image_blocks_2_title)): echo 'alt="' . $image_blocks_2_title . '" id="panel_2"' ; endif;?> />
           	<div class="contenthover">
            	<div class="panel">
                    <p><strong><?php if(!empty($image_blocks_2_title)): echo $image_blocks_2_title; endif;?></strong></p>
                    <p><?php if(!empty($image_blocks_2_text)): echo $image_blocks_2_text; endif;?></p>
                    <?php if(!empty($image_blocks_2_link)): echo '<p class="readmore"><a href="' . $image_blocks_2_link . '" alt="Read More">Read More &gt;</a></p>'; endif;?>
            	</div>
			</div>
        </div>
        
        <div class="block text last" style="background:#0F4866;"><?php if(!empty($text_blocks_2_text)): echo $text_blocks_2_text; endif; ?></div>
        
        <div class="block text" style="background:#0F1671;"><?php if(!empty($text_blocks_3_text)): echo $text_blocks_3_text; endif; ?></div>
       
        <div class="block image">
        	<img src="<?php echo $image_blocks_3_image; ?>" <?php if(!empty($image_blocks_3_title)): echo 'alt="' . $image_blocks_3_title . '" id="panel_3"' ; endif;?> />
           	<div class="contenthover">
            	<div class="panel">
                    <p><strong><?php if(!empty($image_blocks_3_title)): echo $image_blocks_3_title; endif;?></strong></p>
                    <p><?php if(!empty($image_blocks_3_text)): echo $image_blocks_3_text; endif;?></p>
                    <?php if(!empty($image_blocks_3_link)): echo '<p class="readmore"><a href="' . $image_blocks_3_link . '" alt="Read More">Read More &gt;</a></p>'; endif;?>
            	</div>
			</div>
        </div>
        
        <div class="block text" style="background:#2B5295;"><?php if(!empty($text_blocks_4_text)): echo $text_blocks_4_text; endif; ?></div>
       
        <div class="block image last">
        	<img src="<?php echo $image_blocks_4_image; ?>" <?php if(!empty($image_blocks_4_title)): echo 'alt="' . $image_blocks_4_title . '" id="panel_4"' ; endif;?> />
           	<div class="contenthover">
            	<div class="panel">
                    <p><strong><?php if(!empty($image_blocks_4_title)): echo $image_blocks_4_title; endif;?></strong></p>
                    <p><?php if(!empty($image_blocks_4_text)): echo $image_blocks_4_text; endif;?></p>
                    <?php if(!empty($image_blocks_4_link)): echo '<p class="readmore"><a href="' . $image_blocks_4_link . '" alt="Read More">Read More &gt;</a></p>'; endif;?>
            	</div>
			</div>
        </div>
        
        <div class="clearfix"></div>

    </div><!-- .content -->
            
    <div class="clearfix"></div>
			
<?php get_footer(); ?>