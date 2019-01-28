<?php
/**
 * Template name: aerials
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
// Get the video URL and put it in the $video variable
$videoID = get_post_meta($post->ID, 'video_url', true);
// Check if there is in fact a video URL
if ($videoID) {
	echo '<div class="videoContainer">';
	// Echo the embed code via oEmbed
	echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoID , array("width"=>1000,"height"=>800) ); 
	echo '</div>';
}
?>
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<?php 
		// Calls up the YouTube video thumbnail or, if no URL is provided, the featured image from WordPress
		
		// Add a container and a link around the video
		echo '<div class="tinyVideoThumb">';
		echo '<a href="' . get_permalink() . '" title="Go to ' . the_title() . '" rel="bookmark">';


		if ( $video_url ) { // if there is a video URL
			
			// Get the video URL from custom field
			$videoID = get_post_meta($post->ID, 'url_video', true); 
			// Query YouTube for video meta data
			$thumb_query_url = 'http://gdata.youtube.com/feeds/api/videos/' . $videoID . '?v=2&alt=jsonc';
			// Decode the json data from YouTube and put it in a readable format
			$json = json_decode(file_get_contents( $thumb_query_url ));
			// Echo out the thumbnail, give it height and weight and set the alternate description to post title
			echo '<img src="' . $json->data->thumbnail->sqDefault . '" width="60" height="45" alt="' . the_title() . '">';
			echo '</a>';
			echo '</div>';								
		}  
		?>
	<?php endwhile; else :?>
	<?php the_post_thumbnail('tinyThumb', array('alt' => $postTitle, 'title' => $postTitle)); ?>
<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
