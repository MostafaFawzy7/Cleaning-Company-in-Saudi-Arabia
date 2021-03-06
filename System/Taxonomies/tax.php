<?php 

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function album_cat() {

	$labels = array(
		'name'                  => _x( 'التصنيفات', 'التصنيفات', 'YourColor Engineer' ),
		'singular_name'         => _x( 'التصنيف', 'التصنيف', 'YourColor Engineer' ),

		'menu_name'             => __( ' التصنيفات', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'tax_category', array(  ), $args );
}

add_action( 'init', 'album_cat' );
add_action( 'init', 'ServTaxonomies' );
function ServTaxonomies() {
	///////////////////
	// Series
	///////////////////
	$labels = array(
		'name' => __('الخدمات', 'YourColor' , 'post type general name'),
		'menu_name' => __('الخدمات', 'YourColor' , 'post type general name'),
	);
	register_taxonomy('servicePost',array('post'), array(
		'public' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'servicePost'),
	));
}

add_action( 'init', 'cityTax' );
function cityTax() {
	///////////////////
	// Series
	///////////////////
	$labels = array(
		'name' => __('المدن', 'YourColor' , 'post type general name'),
		'menu_name' => __('المدن', 'YourColor' , 'post type general name'),
	);
	register_taxonomy('city',array('post'), array(
		'public' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'city'),
	));
}