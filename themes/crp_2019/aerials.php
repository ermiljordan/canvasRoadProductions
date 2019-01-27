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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
