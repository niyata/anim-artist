<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seed
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area <?php echo '-'.$GLOBALS['s_blog_layout']; ?>">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title entry-title text-center">
						<?php 
							if (is_category()) {
								echo single_cat_title();
							} elseif (is_tax()) {
								$taxonomy = get_queried_object();
								echo  $taxonomy->name;
							}
						?>
					</h1>
	
				</header><!-- .page-header -->
				<div class="seed-grid-<?php echo $GLOBALS['s_blog_columns']; ?> seed-grid-mobile-2">
					<?php 
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content','caption');
					endwhile; 
					?>
				</div>

				<?php seed_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!--container-->
<?php get_footer(); ?>
