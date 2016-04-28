<?php
/**
	The template for displaying the HEADER until <div id="page-wrapper">
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->

<head>
	
	<title>
		<?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'blanktheme' ), max( $paged, $page ) );
		?>
	</title>
	
	<?php // Meta SEO handled by plugin ?>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3.js"></script>

	<?php wp_head(); ?>
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<style type="text/css">
				.gradient {
					filter: none;
				}
			</style>
	<![endif]-->

	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/e168ca5e-cdf9-4418-9878-bf3c44890650.css"/>
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/e168ca5e-cdf9-4418-9878-bf3c44890650.js"></script>
	
</head>

<body <?php body_class(); ?>>

	<!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]--> 


	<div class="hidden-md hidden-lg">
		<div id="mobile-button" class="js-mobile-button">

			<div id="nav-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>

		</div>
	</div>


	<!-- Mobile Menu -->
	<div class="hidden-md hidden-lg">
		<div id="mobile-overlay" class="js-mobile-menu">
			
			<div class="mobile__logo">
				<div class="container">
					<div class="row">
						<a href="<?php echo get_home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
							<img src="<?php bloginfo('template_url'); ?>/img/lonsdale-capital-partners.png" alt="<?php bloginfo( 'name' ); ?>" />
						</a>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="mobile__menu">
							<nav id="mobile-navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<!-- Header -->
	<header id="header" class="">

		<div class="container">
			
			<div class="row">
				
				<!-- Logo -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header__logo">
					<a href="<?php echo get_home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
						<img src="<?php bloginfo('template_url'); ?>/img/lonsdale-capital-partners.png" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				</div>
				
				<!-- Navigation -->
				<nav class="hidden-xs hidden-sm col-md-12 col-lg-12 header__navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
	
			</div>

		</div>

	</header>
	
	<div id="page-wrapper" class="">
		
		<section class="content__heading">
		
			<div class="container">
		
				<div class="row">
	
					<div class="col-xs-12 col-xs-12 col-lg-12 col-sm-12">

						<?php if(get_field('page_heading')): ?>
							<h1><?php echo get_field('page_heading'); ?></h1>
						<?php else: ?>
							<h1>Lonsdale Capital Partners is an experienced &amp; hands on private equity company concentrating on the smaller end of the market.</h1>
						<?php endif; ?>
					</div>
				
				</div>
				
			</div>
				
			<div class="clearfix"></div>
			
		</section>

		<?php // footer.php: </div> ?>