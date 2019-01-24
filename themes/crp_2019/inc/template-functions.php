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
					.about-crp{
						height: 100%
						background:
						linear-gradient( to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.9) 100% ),
						url({$hero}) no-repeat center bottom;
						background-size: cover, cover; 
					};";
					break;
					default:
					$custom_css = "";
					break;
				}
			wp_add_inline_style('crp-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'crp_2019_dynamic_css');

/** 
 * This will make photo gallery posty type
 * */ 
add_action( 'init', 'add_gallery_post_type' );
function add_gallery_post_type() {
    register_post_type( 'zm_gallery',
            array(
                'labels' => array(
                                'name' => __( 'Gallery' ),
                                'singular_name' => __( 'Gallery' ),
                                'all_items' => __( 'All Images')
                            ),
                'public' => true,
                'has_archive' => false,
                'exclude_from_search' => true,
                'rewrite' => array('slug' => 'gallery-item'),
                'supports' => array( 'title', 'thumbnail' ),
                'menu_position' => 4,
                'show_in_admin_bar'   => false,
                'show_in_nav_menus'   => false,
                'publicly_queryable'  => false,
                'query_var'           => false
            )
    );
}
/**
 * This will take the thumbnail of the image
 */
function zm_get_backend_preview_thumb($post_ID) {
	$post_thumbnail_id = get_post_thumbnail_id($post_ID);
	if ($post_thumbnail_id) {
			$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
			return $post_thumbnail_img[0];
	}
}
/**
 * Configuration for the column.
 */
function zm_preview_thumb_column_head($defaults) {
	$defaults['featured_image'] = 'Image';
	return $defaults;
}
add_filter('manage_posts_columns', 'zm_preview_thumb_column_head');
/**
 * this is a hook to create the column and loads the thumbnail
 */
function zm_preview_thumb_column($column_name, $post_ID) {
	if ($column_name == 'featured_image') {
			$post_featured_image = zm_get_backend_preview_thumb($post_ID);
					if ($post_featured_image) {
							echo '<img src="' . $post_featured_image . '" />';
					}
	}
}
add_action('manage_posts_custom_column', 'zm_preview_thumb_column', 10, 2);