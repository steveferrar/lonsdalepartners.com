<?php
/*
	Plugin Name: CPT Plugin
	Author: Steve Ferrar
	Version: 1.0
*/

$cptPluginsInit = new cptPlugins();

class cptPlugins {

	function __construct() {
		add_action('init', array($this, 'cptInit'));
		add_theme_support('thumbnails');
		
	}
	
	function cptInit() {			
		
		register_post_type(
			'portfolio',
			array(
				'labels' => array(
					'name' => 'Portfolio',
					'singular_name' => 'Portfolio'
				),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'hierarchical' => true, // Heirachical, drag/drop option
				'menu_position' => null,
				'has_archive' => true,
				'capability_type' => 'post',
				'supports' => array(
					'title',
					'editor'
				)
			)
		);	
		
		register_post_type(
			'news',
			array(
				'labels' => array(
					'name' => 'News',
					'singular_name' => 'News'
				),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'hierarchical' => false, // Non heirachical, removed drag/drop option
				'menu_position' => null,
				'has_archive' => true,
				'capability_type' => 'post',
				'supports' => array(
					'title',
					'editor'
				)
			)
		);				
		
		register_post_type(
			'team',
			array(
				'labels' => array(
					'name' => 'Team',
					'singular_name' => 'Team'
				),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'hierarchical' => true, // Heirachical, drag/drop option
				'menu_position' => null,
				'has_archive' => true,
				'capability_type' => 'post',
				'supports' => array(
					'title',
					'editor'
				)
			)
		);
	}
};

?>