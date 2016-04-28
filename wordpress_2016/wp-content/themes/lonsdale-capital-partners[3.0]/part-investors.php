<?php
/**
	The template part for displaying the INVESTORS page.
*/

if(is_user_logged_in()):
?>


	<!-- Image / Colour Block -->
	<div class="col-xs-12 col-sm-12 col-md-3 pull-md-right col-lg-3 pull-lg-right">
	<div class="row">

		<div class="col-xxs-12 hidden-xs hidden-sm col-md-12 col-lg-12">
			<div class="block block--image">
				<img src="<?php bloginfo('template_url'); ?>/img/images/investors-02.jpg" data-no-retina />
			</div>
		</div>

		<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
			<div class="block block--colour bg--blue-grey">
				<img src="<?php bloginfo('template_url'); ?>/img/block--242x242.png" data-no-retina />
			</div>
		</div>

		<div class="hidden-xxs col-xs-12 col-sm-12 hidden-md hidden-lg">
			<div class="block block--image">
				<img src="<?php bloginfo('template_url'); ?>/img/images/investors-03.jpg" data-no-retina />
			</div>
		</div>

	</div>
	</div>


	<!-- Downloads -->
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<div class="block block--tall block--padding bg--blue-turquoise">

			<h2>Downloads</h2>

			<div class="download__items">

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
						
						<a href="<?php echo $file; ?>" title="<?php echo get_sub_field('title'); ?>" target="_blank" class="download__item download__item-<?php echo $inv; ?>">
							<p class="download__item-title"><?php echo get_sub_field('title'); ?></p>
							<?php if(get_sub_field('description')): echo '<p class="download__item-description">' . get_sub_field('description') . '</p>'; endif; ?>
							<p class="download__item-button">Click here to download</p>
						</a>
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
	</div>

		
<?php 
else: 
?>


	<!-- Image -->
	<div class="hidden-xs hidden-sm col-md-9 col-lg-9">
		<div class="block block--image block--tall">
			<img src="<?php bloginfo('template_url'); ?>/img/images/investors-01.jpg" data-no-retina />
		</div>
	</div>


	<!-- Image / Form -->
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
	<div class="row">

		<div class="col-xxs-12 col-xs-6 col=sm-6 hidden-md hidden-lg">
			<div class="block block--image">
				<img src="<?php bloginfo('template_url'); ?>/img/images/investors-02.jpg" data-no-retina />
			</div>
		</div>

		<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-12 col-lg-12">
			<div class="block block--padding bg--blue-turquoise">
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
		</div>

		<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
			<div class="block block--colour bg--blue-grey">
				<img src="<?php bloginfo('template_url'); ?>/img/block--242x242.png" data-no-retina />
			</div>
		</div>
	
	</div>
	</div>


<?php
endif;
?>