<?php
/**
 * Template Name: Contact
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
    <section class="contact-hero_banner">
      <div class="contact-wrapper container">
        <div class="content-contact">
          <p class="content__email">General enquiries</p>
<!-- PUT CFS -->
        </div>
        <div class="content-address">
          <div class="content-address__str">
  <!-- ADDRESSES -->
          </div>
        </div>
        <div class="content-media">
          <div class="social-media__contents">
            <ul>
              <li>Youtube</li>
              <li>Instagram</li>
              <li>Facebook</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
