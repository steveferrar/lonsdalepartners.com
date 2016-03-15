<?php

/** 
	Login Stylesheet
*/

// Custom Login Stylesheet	 
	function my_login_stylesheet() { ?>
		<link rel="stylesheet" id="custom_wp_admin_css"	 href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/style-login.css'; ?>" type="text/css" media="all" />
	<?php };
	add_action('login_enqueue_scripts', 'my_login_stylesheet' );
		
// Custom Login Logo URL	
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	};
	add_filter('login_headerurl', 'my_login_logo_url');
	
// Custom Login Title
	function my_login_logo_url_title() {
		return 'Lonsdale Capital Partners';
	};
	add_filter('login_headertitle', 'my_login_logo_url_title');
	

/** 
	Menus
*/

// Register Header Menu
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	  register_nav_menu('investment-approach-menu',__( 'Investment Approach Menu' ));
	};
	add_action( 'init', 'register_my_menu' );


/** 
	Images
*/

// Set post thumbnail size
	if(function_exists('add_image_size')) { 
		add_image_size( 'block-image', 242, 242, true);
		add_image_size( 'team-image', 734, 242, true);
		add_image_size( 'portfolio-image', 488, 242, true);
	};


/** 
	Editor
*/

//Edit tiny MCE to remove elements
	if (isset($wp_version)) {
		add_filter("mce_buttons", "extended_editor_mce_buttons", 0);
		add_filter("mce_buttons_2", "extended_editor_mce_buttons_2", 0);
	};

// First toolbar line
	function extended_editor_mce_buttons($buttons) {
		return array(
			"bold", 
			"italic", 
			"underline", 
			"strikethrough",
			"separator",
			"bullist", 
			"numlist", 
			// "blockquote", 
			"hr", 
			// "removeformat", 
			"separator",
			"justifyleft", 
			"justifycenter", 
			"justifyright", 
			"seperator",
			"undo", 
			"redo", 
			"separator", 
			"link", 
			"unlink", 
			"separator", 
			"code", 
			"separator"
		);
	};
	
// Second toolbar line
	function extended_editor_mce_buttons_2($buttons) {
		return array(
		);
	};


/** 
	Admin Bar
*/

// Remove Admin Bar Front End
	add_filter('show_admin_bar', '__return_false');


/** 
	Add Page Slug to <body> Classes
*/

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
};
add_filter( 'body_class', 'add_slug_body_class' );

