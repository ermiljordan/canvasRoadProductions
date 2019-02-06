<?php
/**
 * canvasRoadProductions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package canvasRoadProductions
 */

if ( ! function_exists( 'crp_2019_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function crp_2019_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on canvasRoadProductions, use a find and replace
		 * to change 'crp_2019' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'crp_2019', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'crp_2019' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'crp_2019_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'crp_2019_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crp_2019_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'crp_2019_content_width', 640 );
}
add_action( 'after_setup_theme', 'crp_2019_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crp_2019_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'crp_2019' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'crp_2019' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'crp_2019_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crp_2019_scripts() {
	wp_enqueue_style( 'crp_2019-style', get_stylesheet_uri() );

	wp_enqueue_script( 'crp_2019-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'crp_2019-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'crp_2019-javascript', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'crp_2019_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
add_theme_support( 'post-thumbnails', array( 'page' ) ); // Add it for pages
set_post_thumbnail_size( 400, 400, true );

function get_video_thumbnail_uri( $video_uri ) {
	
	$thumbnail_uri = '';
	

	
	// determine the type of video and the video id
	$video = parse_video_uri( $video_uri );
	
	
	
	// get youtube thumbnail
	if ( $video['type'] == 'youtube' )
		$thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/hqdefault.jpg';
	
	// get vimeo thumbnail
	if( $video['type'] == 'vimeo' )
		$thumbnail_uri = get_vimeo_thumbnail_uri( $video['id'] );
	// get wistia thumbnail
	if( $video['type'] == 'wistia' )
		$thumbnail_uri = get_wistia_thumbnail_uri( $video_uri );
	// get default/placeholder thumbnail
	if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
		$thumbnail_uri = ''; 
	
	//return thumbnail uri
	return $thumbnail_uri;
	
}


/**
 * Parse the video uri/url to determine the video type/source and the video id
 */
function parse_video_uri( $url ) {
	
	// Parse the url 
	$parse = parse_url( $url );
	
	// Set blank variables
	$video_type = '';
	$video_id = '';
	
	// Url is http://youtu.be/xxxx
	if ( $parse['host'] == 'youtu.be' ) {
	
		$video_type = 'youtube';
		
		$video_id = ltrim( $parse['path'],'/' );	
		
	}
	
	// Url is http://www.youtube.com/watch?v=xxxx 
	// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
	// or http://www.youtube.com/embed/xxxx
	if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
	
		$video_type = 'youtube';
		
		parse_str( $parse['query'] );
		
		$video_id = $v;	
		
		if ( !empty( $feature ) )
			$video_id = end( explode( 'v=', $parse['query'] ) );
			
		if ( strpos( $parse['path'], 'embed' ) == 1 )
			$video_id = end( explode( '/', $parse['path'] ) );
		
	}
	
	// Url is http://www.vimeo.com
	if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
	
		$video_type = 'vimeo';
		
		$video_id = ltrim( $parse['path'],'/' );	
					
	}
	$host_names = explode(".", $parse['host'] );
	$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
	// Url is an oembed url wistia.com
	if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
	
		$video_type = 'wistia';
			
		if ( strpos( $parse['path'], 'medias' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );
	
	}
	
	// If recognised type return video array
	if ( !empty( $video_type ) ) {
	
		$video_array = array(
			'type' => $video_type,
			'id' => $video_id
		);
	
		return $video_array;
		
	} else {
	
		return false;
		
	}
	
}


 /* Takes a Vimeo video/clip ID and calls the Vimeo API v2 to get the large thumbnail URL.
 */
function get_vimeo_thumbnail_uri( $clip_id ) {
	$vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
	$vimeo_response = wp_remote_get( $vimeo_api_uri );
	if( is_wp_error( $vimeo_response ) ) {
		return $vimeo_response;
	} else {
		$vimeo_response = unserialize( $vimeo_response['body'] );
		return $vimeo_response[0]['thumbnail_large'];
	}
	
}
/**
 * Takes a wistia oembed url and gets the video thumbnail url.
 */
function get_wistia_thumbnail_uri( $video_uri ) {
	if ( empty($video_uri) )
		return false;
	$wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $video_uri;
	$wistia_response = wp_remote_get( $wistia_api_uri );
	if( is_wp_error( $wistia_response ) ) {
		return $wistia_response;
	} else {
		$wistia_response = json_decode( $wistia_response['body'], true );
		return $wistia_response['thumbnail_url'];
	}
	
}