<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package canvasRoadProductions
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function crp_2019_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'crp_2019_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function crp_2019_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'crp_2019_pingback_header' );

/** 
 * Hero banners
 * */ 

function crp_2019_dynamic_css() {
	switch(true) {
		case is_page('about');
		$hero = CFS()->get('about_hero_image');
		$custom_css = "
					.about-crp {
						background:
						linear-gradient( to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.9) 100% ),
						url({$hero}) no-repeat center bottom;
						background-size: cover, cover; 	
					};";
					break;
					default;
					$custom_css = "";
					break;
				}
			wp_add_inline_style('crp-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'crp_2019_dynamic_css');