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
					<h2 class="about-header_caption">Canvas Road <span>Productions <i>Credit<i></span></h2>
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
							<?php echo CFS()->get('our_story_info'); ?>
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
							<?php echo CFS()->get('connecting_left_info'); ?>
							</div>
							<div class="connecting-parag_right">
							<?php echo CFS()->get('connecting_right_info'); ?>
							</div>
						</div>
				</div>
			</section>
			<!-- end of connections -->
			<section class="story-telling story-telling_wrapper">
				<div class="container">
					<div class="story-tell_header">
						<h2 class="story-telling_cap">Story telling is our <span>language</span></h2>
					</div>
						<div class="story-telling_parag">
						<?php echo CFS()->get('story_telling_info'); ?>
						</div>
						<div class="camera-funk">
							<figure class="camera-1 camera-funk_img">
								<img class="cameras" src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
							</figure>
							<figure class="camera-2 camera-funk_img">
								<img class="cameras" src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
							</figure>
							<figure class="camera-2 camera-funk_img">
								<img class="cameras" src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
							</figure>
							<figure class="camera-2 camera-funk_img">
								<img class="cameras" src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
							</figure>
							<figure class="camera-2 camera-funk_img">
								<img class="cameras" src="<?php echo get_template_directory_uri(); ?>/images/camera.png" alt="film camera">
							</figure>
						</div>
				</div>
				<div class="story-telling_banner">
					<div class="banner-title banner-tittle--rotate js-block" data-block="title-block" data-vertical="true">
						<div class="banner-title_inner">
							<span>	
							Creative direction
							<div></div>
							Professional
							<div></div>
							Story teller
							<div></div>
						</span>
						<span>	
							Creative direction
							<div></div>
							Professional
							<div></div>
							Story teller
							<div></div>
						</span>
						</div>
					</div>
				</div>
			</section>
			<!-- End of story telling -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
