<?php /* Functions.php */

// ACTIONS
	add_action('login_enqueue_scripts', 'my_login_stylesheet' );

// FILTERS
	add_filter('login_headerurl', 'my_login_logo_url');
	add_filter('login_headertitle', 'my_login_logo_url_title');


/** Login Stylesheet */

// Custom Login Stylesheet	  
	function my_login_stylesheet() { ?>
		<link rel="stylesheet" id="custom_wp_admin_css"	 href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/style-login.css'; ?>" type="text/css" media="all" />
	<?php };
		
// Custom Login Logo URL	
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	};
	
	function my_login_logo_url_title() {
		return 'London Capital Partners';
	};



/** Menus */

// Registger Menus
	register_nav_menus( array(
		'main_menu' => 'Main Menu'
	) );


/** Images */

// Set post thumbnail size
	
	if(function_exists('add_image_size')) { 
		add_image_size( 'block-image', 242, 242, true);
		add_image_size( 'team-image', 734, 242, true);
		add_image_size( 'portfolio-image', 488, 242, true);
	};


/** Editor */

//Edit tiny MCE to remove elements
	if (isset($wp_version)) {
		add_filter("mce_buttons", "extended_editor_mce_buttons", 0);
		add_filter("mce_buttons_2", "extended_editor_mce_buttons_2", 0);
	}

// First toolbar line
	function extended_editor_mce_buttons($buttons) {
		return array(
			"bold", "italic", "underline", "strikethrough", "separator",
			"bullist", "numlist", "separator",
			"justifyleft", "justifycenter", "justifyright", "seperator",
			"undo", "redo", "separator",
			"link", "unlink", "separator"
		);
	}

// Second toolbar line
	function extended_editor_mce_buttons_2($buttons) {
		return array(
		);
	}


/** Admin Bar */

// Remove Admin Bar Front End
	add_filter('show_admin_bar', '__return_false');