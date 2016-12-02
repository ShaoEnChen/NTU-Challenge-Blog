<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Karta
 */

global $wp_query;

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<img id="latest-post-img-sm" src="wp-content/uploads/2016/12/latest-article.png">
				<!-- Recent Articles -->
				<img id="recent-post-img" src="wp-content/uploads/2016/12/recent-article.png">
				<div class="col-xs-12">
					<div class="masonry-grid">
						<div class="masonry-grid__sizer"></div>
						<div class="masonry-grid__gutter-sizer"></div>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>	
					<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>

		<?php karta_pagination(); ?>
				<?php else : 
					get_template_part( 'template-parts/content', 'none' ); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif;  // If have posts.
		?>
		
		<!-- FB Button -->
		<div id="fb-button">
			<a href="https://www.facebook.com/ntuchallenge/" target="_blank">
				<img id="fb-icon" src="wp-content/uploads/2016/12/fb1.png">
			</a>
			<a href="https://www.facebook.com/ntuchallenge/" target="_blank">
				<img id="fb-icon-hover" src="wp-content/uploads/2016/12/fb2.png">
			</a>
		</div>
	</main>
</div>

<?php get_footer();