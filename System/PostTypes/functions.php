<?php 

/**
  /////// Slider post type 
 */


function tnzeef_slider() {

	$labels = array(
		'name'               => __( 'الاسلايدر', 'YourColor tnzeef' ),
		'singular_name'      => __( 'الاسلايدر', 'YourColor tnzeef' ),
		'menu_name'          => __( 'الاسلايدر ', 'YourColor tnzeef' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
		),
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'tnzeef_slider' );


/**
  /////// Slider post type 
 */





/**
  /////// Services post type 
 */


function tnzeef_services() {

	$labels = array(
		'name'               => __( 'الخدمات', 'YourColor tnzeef' ),
		'singular_name'      => __( 'الخدمات', 'YourColor tnzeef' ),
		'menu_name'          => __( 'الخدمات ', 'YourColor tnzeef' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
		),
	);

	register_post_type( 'services', $args );
}

add_action( 'init', 'tnzeef_services' );


/**
  /////// Services post type 
**/




/**
  /////// AboutUs post type 
**/


function tnzeef_about() {

	$labels = array(
		'name'               => __( 'عن الشركة', 'YourColor tnzeef' ),
		'singular_name'      => __( 'عن الشركة', 'YourColor tnzeef' ),
		'menu_name'          => __( 'عن الشركة', 'YourColor tnzeef' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
		),
	);

	register_post_type( 'about', $args );
}

add_action( 'init', 'tnzeef_about' );


/**
  /////// AboutUs post type 
**/




/**
  /////// Offers post type 
**/


function tnzeef_offer() {

	$labels = array(
		'name'               => __( 'عروضنا', 'YourColor tnzeef' ),
		'singular_name'      => __( 'عروضنا', 'YourColor tnzeef' ),
		'menu_name'          => __( 'عروضنا', 'YourColor tnzeef' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'thumbnail',
			'editor',
		),
	);

	register_post_type( 'offers', $args );
}

add_action( 'init', 'tnzeef_offer' );


/**
  /////// Offers post type 
**/