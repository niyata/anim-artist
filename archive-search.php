<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package plant
 */

get_header(); ?>

<div class="main-header">
	<div class="container">
		<h2 class="main-title"><?php printf( esc_html__( 'ผลลัพธ์สำหรับ: %s', 'plant' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
	</div>
</div>

<div class="container -rightbar">
	<div id="primary" class="content-area -rightbar">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php seed_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('right'); ?>
</div><!--container-->
<?php get_footer(); ?>