<?php
/**
 * Template name: Home
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
<section class="desktop-video_version">
<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<video
		vjs-fullscreen
    id="my-player"
    class="video-js"
		preload="auto"
		autoplay="true"
		loop="true"
		muted="true"
		width="100%"
    data-setup='{}'>
  <source src="http://localhost:8888/canvasRoadProductions/wp-content/uploads/2019/02/aerialTeaser-3.mp4" type="video/mp4"></source>

  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="http://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>
<section class="mobile-hero_version">
<!-- THIS SECTION WILL BE USED FOR MOBILE HERO-BANNER -->
</section>
<section class="canvas-info">
  <div class="container">
    <div class="canvas-info_parag">
      <?php echo CFS()->get('canvas_info'); ?>
    </div>
  </div>
  <div class="marquee" id="banner_move">
    <div>
      <span>Canvas</span>
      <span>Road</span>
      <span>Productions</span>
    </div>
  </div>
</section>
<section class="canvas-statement">
  <div class="canvas-statement_header container">
    <p class="statement-header">Imagination is our currency</p>
  </div>
</section>
<section class="canvas-statement_2">
  <div class="canvas-statement_2_header container">
    <div class="canvas-statement_2_content">
      <h2 class="statement-header_2">We are free from convention</h2>
      <?php echo CFS()->get('canvas_statement_info'); ?>
    </div>
  </div>
</section>
<?php
get_footer();
