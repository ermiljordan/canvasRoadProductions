<?php
/**
 * Template name: Portfolio
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canvasRoadProductions
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

		// Calls up the YouTube video thumbnail or, if no URL is provided, the featured image from WordPress

		// Add a container and a link around the video
		echo '<div class="tinyVideoThumb">';
		echo '<a href="' . get_permalink() . '" title="Go to ' . the_title() . '" rel="bookmark">';
		
		if ( $video_url ) { // if there is a video URL
			
			// Get the video URL from custom field
			$videoID = get_post_meta($post->ID, 'video_url', true); 
			// Query YouTube for video meta data
			$thumb_query_url = 'http://gdata.youtube.com/feeds/api/videos/' . $videoID . '?v=2&alt=jsonc';
			// Decode the json data from YouTube and put it in a readable format
			$json = json_decode(file_get_contents( $thumb_query_url ));
			// Echo out the thumbnail, give it height and weight and set the alternate description to post title
			echo '<img src="' . $json->data->thumbnail->sqDefault . '" width="60" height="45" alt="' . the_title() . '">';
			echo '</a>';
			echo '</div>';				
						
}
endwhile;

		else :

			the_post_thumbnail('custom-post-thumbnail', array('alt' => $postTitle, 'title' => $postTitle)); 
												

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
