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
			<!-- end of about header -->
			<section class="about-story">
				<div class="container">
					<h2 class="story-captions_title">Our <span>story</span></h2>
					<div class="story-wrapper">
							<figure class="story-img_left story-figure">
								<img class="story-img lazy" src="<?php echo get_template_directory_uri(); ?>/images/jessica.JPG" alt="A lady standing by herself looking confused">
							</figure>
							<figure class="story-img_right story-figure">
								<img class="story-img lazy" src="<?php echo get_template_directory_uri(); ?>/images/jessica.JPG" alt="A lady standing by herself looking confused">
							</figure>
					</div> 
						<div class="story-parag">
							<!-- custom field this -->
						</div>
				</div>
			</section>
			<!-- end of about story -->
			<section class="about-connections">
				<div class="container">
					<h2 class="connection-caption_title">Connecting with <span>people</span></h2>
						<div class="connecting-wrapper">
							<figure class="connecting-img_left story-figure">
								<img class="connecting-img lazy" src="<?php echo get_template_directory_uri(); ?>/images/jessica.JPG" alt="A lady standing by herself looking confused">
							</figure>
							<figure class="connecting-img_right story-figure">
								<img class="connecting-img lazy" src="<?php echo get_template_directory_uri(); ?>/images/jessica.JPG" alt="A lady standing by herself looking confused">
							</figure>
						</div> 
						<div class="connecting-parag">
							<div class="connecting-parag_left">
								<!-- CUSTOM FIELD THIS SHIT -->
							</div>
							<div class="connecting-parag_right">
								<!-- CUSTOM FIELD THIS SHIT -->
							</div>
						</div>
				</div>
			</section>
			<!-- end of connections -->
			<section class="story-telling story-telling_wrapper">
				<div class="container">
					<h2>Story telling is our <span>language</span></h2>
</div class="story-telling_parag">
<!--  CUSTOM FIELD THIS SHIT -->
</div>
					<div class="camera-funk">
						<figure class="camera-1 camera-funk_img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
						</figure>
						<figure class="camera-2 camera-funk_img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
						</figure>
						<figure class="camera-2 camera-funk_img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
						</figure>
						<figure class="camera-2 camera-funk_img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
						</figure>
					</div>
				</div>
			</section>
			<section class="container">
				<div class="professional-wrapper">
					<h2>Painting with <span>light</span></h2>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
