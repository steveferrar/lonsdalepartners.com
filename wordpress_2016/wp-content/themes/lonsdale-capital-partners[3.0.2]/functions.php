<?php 
/** 
	Login Screen
*/


// Custom Login Stylesheet
	function my_login_stylesheet() {
		echo '<link rel="stylesheet" id="custom_wp_admin_css" href="' . get_bloginfo( 'stylesheet_directory' ) . '/css/style-login.css" type="text/css" media="all" />';
	};
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
	}
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
	Custom Editors
*/

//Edit tiny MCE to remove elements
	if (isset($wp_version)) {
		add_filter("mce_buttons", "extended_editor_mce_buttons", 0);
		add_filter("mce_buttons_2", "extended_editor_mce_buttons_2", 0);
	}

// First toolbar line
	function extended_editor_mce_buttons($buttons) {
		return array(
			"bold", 
			"italic", 
			"underline", 
			// "strikethrough",
			"separator",
			"bullist", 
			"numlist", 
			// "blockquote", 
			"hr", 
			// "removeformat", 
			"separator",
			"alignleft", 
			"aligncenter", 
			"alignright", 
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
	}
	

// Second toolbar line
	function extended_editor_mce_buttons_2($buttons) {
		return array(
		);
	}


/** 
	Admin Bar 
*/

// Remove Admin Bar Front End
	add_filter('show_admin_bar', '__return_false');


/** 
	Next / Previous Link (Menu Order)
*/

// Order by Menu Order
	function my_previous_post_where() {
		global $post, $wpdb;
		return $wpdb->prepare( "WHERE p.menu_order < %s AND p.post_type = %s AND p.post_status = 'publish'", $post->menu_order, $post->post_type);
	}
	add_filter( 'get_previous_post_where', 'my_previous_post_where' );
	
	function my_next_post_where() {
		global $post, $wpdb;
		return $wpdb->prepare( "WHERE p.menu_order > %s AND p.post_type = %s AND p.post_status = 'publish'", $post->menu_order, $post->post_type);
	}
	add_filter( 'get_next_post_where', 'my_next_post_where' );
	
	function my_previous_post_sort() {
		return "ORDER BY p.menu_order desc LIMIT 1";
	}
	add_filter( 'get_previous_post_sort', 'my_previous_post_sort' );
	
	function my_next_post_sort() {
		return "ORDER BY p.menu_order asc LIMIT 1";
	}
	add_filter( 'get_next_post_sort', 'my_next_post_sort' );


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
}
add_filter( 'body_class', 'add_slug_body_class' );


/** 
	pre_get_posts Update posts_per_page for News, Portfolio and Team Post Types
*/


function projects_post_count( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_post_type_archive('portfolio') || is_post_type_archive('team') ) {
        // Display all posts for PORTFOLIO and TEAM post types
        $query->set( 'posts_per_page', -1 );
        $query->set( 'post_status', 'publish');
        $query->set( 'orderby', 'menu_order');
        $query->set( 'order', 'ASC');
        return;
    }

    if ( is_post_type_archive('news') ) {
        // Display all posts for the NEWS post type
        $query->set( 'posts_per_page', -1 );
        $query->set( 'post_status', 'publish');
        $query->set( 'orderby', 'date');
        $query->set( 'order', 'DESC');
        return;
    }
}
add_action( 'pre_get_posts', 'projects_post_count', 1 );