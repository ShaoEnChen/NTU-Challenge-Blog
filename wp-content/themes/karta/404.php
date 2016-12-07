<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Karta
 */

get_header(); ?>

<?php $host = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>
<?php if ( $host != "ntuchallenge.com/blog/" && $host != "ntuchallenge.com/blog/#" && $host != "ntuchallenge.com/blog/?csspreview=true" ) : ?>
	<div class="site-branding">
		<!-- <?php karta_logo(); ?> -->
		<a href="/blog">
			<img id="site-title" src="/blog/wp-content/uploads/2016/12/title-04-150dpi.png">
			<img id="site-title-sm" src="/blog/wp-content/uploads/2016/12/title-bg-05-150dpi.png">
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
<?php endif; ?>

<div id="primary">
	<main id="main" class="site-main" role="main">
		<div class="error-404 not-found">
			<div class="container container--custom">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="not-found__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'karta' ); ?></h1>
						<div class="not-found__content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'karta' ); ?></p>
							<div class="not-found__search-form">
								<?php get_search_form(); ?>
							</div>
						</div><!-- .page-content -->
					</div>
				</div>
			</div>
		</div><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
