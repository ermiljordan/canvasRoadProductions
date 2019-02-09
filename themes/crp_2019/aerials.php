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
<section>

<?php    
echo '<div class="videoContainer">'; 
  $value = get_field('event_video');
         if( $value ) {
                   
        echo $value;

       } else {

       $image = get_field('event_image');

        if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo    $image['alt']; ?>" /> 
                    <?php endif;
   echo '</div>';                       
					 }  

         ?>
</section>
<section>
<?php //For Use with Repeater Field 
	if(have_rows('videos')): while(have_rows('videos')): the_row();
		$video_embed_url = get_sub_field('video_embed', false, false);
		$thumbnail = get_sub_field('thumbnail');
		$thumbnail_url = $thumbnail['url'];
			echo '<div class="container thumbnail">';
			echo '<a href="' . get_permalink() . $video_embed_url . '"><img src="' . $thumbnail_url . '" /></a>';
			echo '</div>';
		endwhile; 
	else: 
		the_post_thumbnail('tinyThumb', array('alt' => $postTitle, 'title' => $postTitle)); 
	endif;
?>
	</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
