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
		//For Use with Repeater Field 
		 $videos = get_field('videos');
		 $videos_raw = get_field('videos', FALSE, FALSE);
			
		
		//Add the Thubmnail to the $videos object
			
			foreach($videos_raw as $key => $video_raw) : 
		
					$videos[$key]['video_thumb'] = get_video_thumbnail_uri($video_raw['field_5c5a561fd96f8']); //Replace 'field_5449746362c3d' with your field's Field key (obtainable by going to screen options in the fields admin, and setting 'Show Field Key' to 'Yes')
		
			endforeach;
			
		
		
		//Loop through the $videos object
			foreach($videos as $video): ?>
			
				<?php //Lightbox Link via Thumbnail ?>
				<a href="#lightbox"><img src="<?php echo $video['video_thumb']; ?>"/></a>
				
				<?php //Lightbox Element with Video Embed Code ?>
				<div id="lightbox" class="embed-container">
				<?php echo $video['video'] ?>
				</div>
			
			<?php endforeach; ?>
	<?php endwhile; ?>
<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
