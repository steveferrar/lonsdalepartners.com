<?php
/**
	The template for displaying the HOME page.
*/
get_header();


/* -- Set Up Images ---------- */

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
	$image_blocks_1_image = wp_get_attachment_image_src( $image_blocks_1['image' ], 'block-image' );
	$image_blocks_2_image = wp_get_attachment_image_src( $image_blocks_2['image' ], 'block-image' );
	$image_blocks_3_image = wp_get_attachment_image_src( $image_blocks_3['image' ], 'block-image' );
	$image_blocks_4_image = wp_get_attachment_image_src( $image_blocks_4['image' ], 'block-image' );


/* -- Set Up Text ---------- */
                
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

		<section>

			<div class="container">

				<div class="row">
						

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row">

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<a href="<?php echo $image_blocks_1_link; ?>" class="block block--image home__block--image js-home-block">
								<img src="<?php echo $image_blocks_1_image[0]; ?>" data-no-retina />
								<div class="home__block--overlay">
									<div>
										<p><strong><?php echo $image_blocks_1_title; ?></strong></p>
										<p><?php echo $image_blocks_1_text; ?></p>
										<p class="small">Read More &rsaquo;</p>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="block block--padding home__block--text content__block-1">
								<?php echo $text_blocks_1_text; ?>
							</div>
						</div>
						
					</div>
					</div>
						

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row">

						<div class="col-xxs-12 col-xs-6 pull-xs-right col-sm-6 pull-sm-right col-md-6 col-lg-6">
							<a href="<?php echo $image_blocks_2_link; ?>" class="block block--image home__block--image js-home-block">
								<img src="<?php echo $image_blocks_2_image[0]; ?>" data-no-retina />
								<div class="home__block--overlay">
									<div>
										<p><strong><?php echo $image_blocks_2_title; ?></strong></p>
										<p><?php echo $image_blocks_2_text; ?></p>
										<p class="small">Read More &rsaquo;</p>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="block block--padding home__block--text content__block-2">
								<?php echo $text_blocks_2_text; ?>
							</div>
						</div>
						
					</div>
					</div>
						

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row">

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 pull-md-right col-lg-6 pull-lg-right">
							<a href="<?php echo $image_blocks_3_link; ?>" class="block block--image home__block--image js-home-block">
								<img src="<?php echo $image_blocks_3_image[0]; ?>" data-no-retina />
								<div class="home__block--overlay">
									<div>
										<p><strong><?php echo $image_blocks_3_title; ?></strong></p>
										<p><?php echo $image_blocks_3_text; ?></p>
										<p class="small">Read More &rsaquo;</p>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="block block--padding home__block--text content__block-3">
								<?php echo $text_blocks_3_text; ?>
							</div>
						</div>
						
					</div>
					</div>
						

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="row">

						<div class="col-xxs-12 col-xs-6 pull-xs-right col-sm-6 pull-sm-right col-md-6 pull-md-right col-lg-6 pull-lg-right">
							<a href="<?php echo $image_blocks_4_link; ?>" class="block block--image home__block--image js-home-block">
								<img src="<?php echo $image_blocks_4_image[0]; ?>" data-no-retina />
								<div class="home__block--overlay">
									<div>
										<p><strong><?php echo $image_blocks_4_title; ?></strong></p>
										<p><?php echo $image_blocks_4_text; ?></p>
										<p class="small">Read More &rsaquo;</p>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="block block--padding home__block--text content__block-4">
								<?php echo $text_blocks_4_text; ?>
							</div>
						</div>
						
						
					</div>
					</div>

						
					<div class="clearfix"></div>
			
				</div>

			</div>

		</section>
			
	<?php
	endwhile;
	endif;
	?>
			
	<div class="clearfix"></div>
	
<?php
get_footer();
?>