<?php
/*
The template for displaying the HOME page.
*/
get_header(); ?>

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
            $image_blocks_1_image = get_stylesheet_directory_uri() . '/img/blocks/home-01.jpg';
        endif;
        
        $image_blocks_2_image_src_dir = $image_blocks_2['image' ];
        if(!empty($image_blocks_2_image_src_dir)) :
            $image_blocks_2_image_src = wp_get_attachment_image_src( $image_blocks_2_image_src_dir, 'block-image' );
            $image_blocks_2_image = $image_blocks_2_image_src[0];
        else:
            $image_blocks_2_image = get_stylesheet_directory_uri() . '/img/blocks/home-02.jpg';
        endif;
        
        $image_blocks_3_image_src_dir = $image_blocks_3['image' ];
        if(!empty($image_blocks_3_image_src_dir)) :
            $image_blocks_3_image_src = wp_get_attachment_image_src( $image_blocks_3_image_src_dir, 'block-image' );
            $image_blocks_3_image = $image_blocks_3_image_src[0];
        else:
            $image_blocks_3_image = get_stylesheet_directory_uri() . '/img/blocks/home-03.jpg';
        endif;
        
        $image_blocks_4_image_src_dir = $image_blocks_4['image' ];
        if(!empty($image_blocks_4_image_src_dir)) :
            $image_blocks_4_image_src = wp_get_attachment_image_src( $image_blocks_4_image_src_dir, 'block-image' );
            $image_blocks_4_image = $image_blocks_4_image_src[0];
        else:
            $image_blocks_4_image = get_stylesheet_directory_uri() . '/img/blocks/home-04.jpg';
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
	
	<?php 
	if(have_posts()):
	while(have_posts()): 
	the_post(); 
	?>


		<section class="content__grid content__grid--home">
		
			<div class="container">
		
				<div class="row">
					
					<!-- 1 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="content__block content__block--image">
						<img src="<?php echo $image_blocks_1_image; ?>" <?php if(!empty($image_blocks_1_title)): echo 'alt="' . $image_blocks_1_title . '" id="panel_1"' ; endif;?> data-no-retina />
					</div>
					</div>
	
					<!-- 2 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="content__block content__block--text blue--light">
						<?php if(!empty($text_blocks_1_text)): echo $text_blocks_1_text; endif; ?>
					</div>
					</div>
	
					<!-- 3 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pull-xs-right pull-sm-right">
					<div class="content__block content__block--image">
        				<img src="<?php echo $image_blocks_2_image; ?>" <?php if(!empty($image_blocks_2_title)): echo 'alt="' . $image_blocks_2_title . '" id="panel_2"' ; endif;?> data-no-retina />
					</div>
					</div>
	
					<!-- 4 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pull-xs-left pull-sm-left">
					<div class="content__block content__block--text blue--teal">
						<?php if(!empty($text_blocks_2_text)): echo $text_blocks_2_text; endif; ?>
					</div>
					</div>
				
				</div>
		
				<div class="row">
	
					<!-- 5 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pull-xs-right pull-sm-right">
					<div class="content__block content__block--text blue--strong">
						<?php if(!empty($text_blocks_3_text)): echo $text_blocks_3_text; endif; ?>
					</div>
					</div>
	
					<!-- 6 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pull-xs-left pull-sm-left">
					<div class="content__block content__block--image">
        				<img src="<?php echo $image_blocks_3_image; ?>" <?php if(!empty($image_blocks_3_title)): echo 'alt="' . $image_blocks_3_title . '" id="panel_3"' ; endif;?> data-no-retina />
					</div>
					</div>
	
					<!-- 7 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="content__block content__block--text blue--pastel">
						<?php if(!empty($text_blocks_4_text)): echo $text_blocks_4_text; endif; ?>
					</div>
					</div>
	
					<!-- 8 -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<div class="content__block content__block--image">
						<img src="<?php echo $image_blocks_4_image; ?>" <?php if(!empty($image_blocks_4_title)): echo 'alt="' . $image_blocks_4_title . '" id="panel_4"' ; endif;?> data-no-retina />
					</div>
					</div>
				
				</div>
				
			</div>
				
			<div class="clearfix"></div>
			
		</section>
		
    <?php
	endwhile;
	endif;
	?>
	
	<?php // the_content(); ?>
		
<?php get_footer(); ?>