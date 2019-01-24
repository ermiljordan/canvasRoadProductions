<?php
/**
 * Template name: about
 * 
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
			<section class="about-crp">
				<div class="about-wrapper">
					<h2 class="about-header-caption">Canvas Road Productions <span class="yellow-stripe">Credit<span></h2>
				</div>
			</section>
			<section class="about-story">
				<div class="story-wrapper">
					<h2 class="story-captions">Our <span>story</span></h2>
				</div>
			</section>
			<section class="about-connections">
				<div class="connections-wrapper">
					<h2 class="connection-caption">Connecting with <span>people</span></h2>
				</div>
			</section>
			<section class="about-professional">
				<div class="professional-wrapper">
					<h2>We are <span>professionals</span></h2>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
