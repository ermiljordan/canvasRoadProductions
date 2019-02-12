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
		<?php echo do_shortcode('[ea_youtube_gallery user="UC_x5XG1OV2P6uZZ5FSM9Ttw"]'); ?> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
