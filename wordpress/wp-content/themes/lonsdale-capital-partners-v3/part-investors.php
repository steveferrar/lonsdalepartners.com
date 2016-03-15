<?php
/**
	The template part for displaying the INVESTORS sections.
*/
?>

	
	<?php
	// Logged In Users
	if(is_user_logged_in()):
	?>

		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pull-md-right pull-lg-right">

			<div class="hidden-xs hidden-sm content__block content__block--image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/investors-01.jpg" alt="<?php the_title(); ?>" data-no-retina />
			</div>

			<div class="clearfix"></div>

			<div class="content__block">
			</div>

		</div>

		<div class="col-xs-6 col-sm-6 hidden-md hidden-lg">

			<div class="content__block content__block--image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/investors-01.jpg" alt="<?php the_title(); ?>" data-no-retina />
			</div>

		</div>

		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			
			<div class="content__block content__block--text content__block--large">

				<h2>Downloads</h2>

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

	
	<?php
	// Non-Logged In Users
	else:
	?>

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pull-md-right pull-lg-right">

			<div class="content__block content__block--login">

				<h2>User Login</h2>

				<?php 
					$args = array(
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
					);
					wp_login_form( $args );

				?>

			</div>

			<div class="clearfix"></div>

			<div class="hidden-xs hidden-sm content__block">
			</div>

		</div>

		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			
			<div class="content__block content__block--image content__block--large">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blocks/investors-02.jpg" alt="<?php the_title(); ?>" data-no-retina />
			</div>

		</div>
		
	<?php endif; ?>