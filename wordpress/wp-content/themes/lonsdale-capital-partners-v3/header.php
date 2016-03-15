<?php
/**
 * The Header for the theme: displays all of the <head> section and everything up till <div class="page-content">.
*/
?>

<!DOCTYPE html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<head>
	
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <title><?php global $page, $paged; wp_title( '|', true, 'right' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";  if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'blanktheme' ), max( $paged, $page ) ); ?></title>
    
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png" />

	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>Lonsdale Capital Partners" />
    <meta name="type" property="og:type" content="Website" />
	<meta property="og:url" content="<?php echo home_url(); ?>" />
    <meta name="image" property="og:image" content="<?php bloginfo('template_url'); ?>/img/fbog.jpg" /> 
    <meta name="site_name" property="og:site_name" content="Lonsdale Capital Partners" />
	<meta name="description" property="og:description" content="" />
	
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!--[if gte IE 9]>
		  <style type="text/css">
				.gradient {
				  	filter: none;
				}
		  </style>
	<![endif]-->

	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/e168ca5e-cdf9-4418-9878-bf3c44890650.css"/>
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/e168ca5e-cdf9-4418-9878-bf3c44890650.js"></script>
    
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    
	<?php wp_head(); ?>
    
</head>

<body <?php body_class('no-js'); ?>>
	
    <!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]--> 

	<div id="wrapper">
	
		<!-- Header -->
		<header id="header" class="header">

			<div class="container">

				<div class="row">

					<div class="col-xs-12 col-sm-12 hidden-md hidden-lg header__button">
						<a href="" class="js-menu-button">
							<span class="header__button--open fa fa-bars"></span>
							<span class="header__button--close fa fa-times"></span>
						</a>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header__logo">
						<a href="<?php echo home_url(); ?>" title="Lonsdale Capital Partners">
							<img src="<?php bloginfo('template_url'); ?>/img/lonsdale-capital-partners.png" alt="Lonsdale Capital Partnes" />
						</a>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header__navigation">
						<div class="js-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</div>
					</div>

				</div>

			</nav>

		</header>

		<div id="content" class="content">
		
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
