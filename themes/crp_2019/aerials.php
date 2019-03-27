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
        $value = get_field('aerial_video');
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
      <div class="container">
        <div class="aerial-header">
          <h2 class="aerial__yellow aerial-header_title header__title"><i>Aerial</i></h2>
        </div>
          <div class="aerial-info">
            <?php echo CFS()->get('aerial_info'); ?>
          </div>
        </div>
      </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
