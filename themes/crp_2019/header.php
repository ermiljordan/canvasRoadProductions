<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package canvasRoadProductions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'crp_2019' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="site-branding">
			<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' )); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="header-background">
				<div class="header container">
					<a href="<?php echo esc_url( home_url('/') ); ?>">
					<h1 class="site-title">Outdoor Collective</h1>
					</a>
					<nav>
						<div id="hamburger">
							<div class="hamburger-menu_wrapper">
								<div class="hambuger-menu">
									<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
									?>
								</div>
							</div>
									<div class="hamburger-icon">
										<button id="hamburger-icon_open">
											<div class="bar1"></div>
											<div class="bar2"></div>
											<div class="bar3"></div>
										</button>
										<div id="close-icon">
											<div></div>
										</div>
									</div>
								</div>
					</nav>
				</div><!-- #header -->	
			</div><!-- #header-background -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
