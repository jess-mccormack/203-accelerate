<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );


// Create custom post types function
function create_custom_post_types() {

		// create a case study custom post type
		register_post_type ('case_studies',
				array(
						'labels' => array (
								'name' => __( 'Case Studies' ),
								'singular_name' => __( 'Case Study' )
							),
						'public' => true,
						'has_archive' => true,
						'rewrite' => array(
								'slug' => 'case-studies'
								),
						)
				);

		// create a case study custom post type
		/* register_post_type ('services',
				array(
						'labels' => array (
								'name' => __( 'Services' ),
								'singular_name' => __( 'Service' )
							),
						'public' => true,
						'has_archive' => true,
						'rewrite' => array(
								'slug' => 'services'
								),
						)
				); */
}

// Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );

add_filter( 'body_class','accelerate_child_body_classes' );
function accelerate_child_body_classes( $classes ) {
 if (is_page('contact-us') ) {
   $classes[] = 'contact-us';
 }

   return $classes;

}
