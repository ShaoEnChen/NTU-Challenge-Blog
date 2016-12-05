<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Karta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) { the_post();
				get_template_part( 'template-parts/content-page', 'page' );
			}
			?>

			<!-- FB Button -->
			<div id="fb-button">
				<a href="https://www.facebook.com/ntuchallenge/" target="_blank">
					<img id="fb-icon" src="/blog/wp-content/uploads/2016/12/fb1.png">
				</a>
				<a href="https://www.facebook.com/ntuchallenge/" target="_blank">
					<img id="fb-icon-hover" src="/blog/wp-content/uploads/2016/12/fb2.png">
				</a>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer();
