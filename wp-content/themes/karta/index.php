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
		<?php if ( have_posts() ) : ?>
			
			<?php if ( ! is_paged() ) : ?>
			<div class="latest-posts">
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

			<?php
			$post_counter = 0;
			while ( have_posts() ) : the_post();
				// 將 $post_counter 改為判斷<1（只有第一則為latest-posts__post）
				if ( $post_counter < 1 && ! is_paged() ) : ?>
					<?php get_template_part( 'template-parts/content-latest' ); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="masonry-grid">
								<div class="masonry-grid__sizer"></div>
								<div class="masonry-grid__gutter-sizer"></div>
					<?php ++$post_counter;
					continue; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
					
				<?php endif; ?>
				<?php endwhile; ?>
				<!-- 移除Karta前三則文章自成一個container的設定 -->
						</div>
					</div>
				</div>
			</div>

			<?php karta_pagination(); ?>
	<?php
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;  // If have posts.
	?>
	</main>
</div>

<?php get_footer();
