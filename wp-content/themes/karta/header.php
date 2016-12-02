<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Karta
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?><?php if ( is_page() ) { karta_background_image_url(); } ?>>
	<div id="page" class="site">
			<header id="masthead" class="site-header" role="banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="site-branding">
								<!-- <?php karta_logo(); ?> -->
								<a href="/blog">
									<img id="site-title" src="wp-content/uploads/2016/12/title-04.png">
									<img id="site-title-sm" src="wp-content/uploads/2016/12/title_bg-03.png">
								</a><!-- Custom logo -->

								<nav id="site-navigation" class="main-navigation" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu1">
										<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'karta' ); ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="menu1">
								
								<?php
								if (has_nav_menu('primary')) {
									wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-navigation__menu', 'container' => '', 'menu_id' => 'primary-menu', 'walker' => new Karta_Walker_Nav_Menu ) );
								}

								if ( is_active_sidebar( 'modals-1' ) ) {
									dynamic_sidebar( 'modals-1' );
								}
								?>
								</div>
							</nav><!-- #site-navigation -->
							</div><!-- .site-branding -->
						</div>
					</div>
				</div>
				
				<!-- 最新文章 -->
				<?php if ( have_posts() ) : ?>
					<?php if ( ! is_paged() ) : ?>
						<div class="latest-posts">
							<img id="latest-post-img" src="wp-content/uploads/2016/12/latest-article.png">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
			
					<?php else : ?>
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="masonry-grid">
										<div class="masonry-grid__sizer"></div>
										<div class="masonry-grid__gutter-sizer"></div>
			
					<?php endif; ?>
					<?php get_template_part( 'template-parts/content-latest' ); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				
			</header><!-- #masthead -->

			<div id="content" class="site-content">
