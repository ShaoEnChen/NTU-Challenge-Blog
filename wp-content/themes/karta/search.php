<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
		<div class="archive-intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h5 class="archive-intro__title"><?php printf( esc_html__( 'Search Results for: %s', 'karta' ), '<span>' . get_search_query() . '</span>' ); ?></h5>
					</div>
				</div>
			</div>
		</div>

		<?php if ( have_posts() ) : ?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="masonry-grid">
						<div class="masonry-grid__sizer"></div>
						<div class="masonry-grid__gutter-sizer"></div>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>

		<?php karta_pagination() ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</main>
</div>

<?php get_footer();
