<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="archive-intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php the_archive_title( '<h5 class="archive-intro__title">', '</h5>' ); ?>
						<?php the_archive_description( '<div class="archive-intro__description">', '</div>' ); ?>
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

		<!-- FB Button -->
		<div id="fb-button">
			<a href="https://www.facebook.com/ntuchallenge/" target="_blank">
				<img id="fb-icon" src="/blog/wp-content/uploads/2016/12/fb1.png">
			</a>
			<a href="https://www.facebook.com/ntuchallenge/" target="_blank">
				<img id="fb-icon-hover" src="/blog/wp-content/uploads/2016/12/fb2.png">
			</a>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

