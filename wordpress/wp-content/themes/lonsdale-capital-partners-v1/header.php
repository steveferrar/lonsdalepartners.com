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
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
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
        
        <meta name="description" content="Lonsdale Capital Partners - Creating Value Through Partnership" />
        <meta name="keywords" content="Small companies, Lonsdale, Gasparro, Finegan, Dargan, Evans, Crinion, buy outs, MBO, growth capital, value add, businesses, management teams, partnership, market leadingprivate equity, investment, acquisitions, strategy, smaller end, personal" /> 
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        
		<link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
         
        <meta name="site_name" property="og:site_name" content="Lonsdale Capital Partners" />  
        <meta name="description" property="og:description" content="Lonsdale Capital Partners operates exclusively at the smaller end of the private equity market in the UK and Northern Europe. We generally look to buy and build companies with an enterprise value of &pound;10m - &pound;50m." />  
        <meta name="type" property="og:type" content="website" />   
        <meta name="image" property="og:image" content="<?php bloginfo('template_url'); ?>/img/fbog.jpg" /> 
		
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>	
        
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/e168ca5e-cdf9-4418-9878-bf3c44890650.css"/>
        <script type="text/javascript" src="http://fast.fonts.net/jsapi/e168ca5e-cdf9-4418-9878-bf3c44890650.js"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]--> 
        
    <!-- Content -->
	<div id="main-wrapper">
		
        <div id="header-wrapper">
        <header>
        
            <a href="<?php echo home_url(); ?>" class="logo" title="Lonsdale Capital Partners"><h1>Lonsdale Capital Partners</h1></a>
        	
            <nav>
            	<!--
                <a href="<?php echo home_url(); ?>" title="Home" class="home">Home</a>
                <a href="<?php echo get_permalink(12); ?>" title="Investment Approach" class="investment-criteria">Investment Approach</a>
                <a href="<?php echo get_permalink(9); ?>" title="Team" class="team">Team</a>
                <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" title="Portfolio" class="portfolio">Portfolio</a>
                <a href="<?php echo get_post_type_archive_link('news'); ?>" title="News" class="news">News</a>
                <a href="<?php echo get_permalink(97); ?>" title="Investors" class="investors"><?php if(is_user_logged_in()): echo 'Investors'; else: echo 'Investor Login'; endif; ?></a>
                <a href="<?php echo get_permalink(14); ?>" title="Contact Us" class="contact-us">Contact Us</a>
                -->
                <?php echo wp_nav_menu( array('container' => false, 'menu' => 'main-menu' , 'menu_class' => 'menu') ); ?>
        	</nav>
        
            <div class="clearfix"></div>
        
        </header>
        </div>
        
		<div id="content-wrapper">