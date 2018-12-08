<?php get_header(); 

$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
$author->ID;

?>

<div class="main-header hide">
	<div class="container">
		<?php the_archive_title( '<h2 class="main-title">', '</h2>' ); ?>
	</div>
</div>

<div class="container">
	<div id="primary" class="content-area <?php echo '-'.$GLOBALS['s_blog_layout']; ?>">
		<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="entry-author -head clearfix">
					<div class="pic">
						<?php echo get_avatar( $author->ID, apply_filters( 'author_bio_avatar_size', 100 ) ); ?>
					</div><!--pic-->
					<div class="info">
						<?php the_archive_title( '<h1 class="page-title entry-title">', '</h1>' );?>
						<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
					</div><!--info-->
				</header><!--author-->

				<?php 
				if ((int)$GLOBALS['s_blog_columns'] > 1) {
					echo '<div class="seed-grid-'.$GLOBALS['s_blog_columns'].'">';
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content','card-excerpt');
					endwhile; 
					echo '</div>';
				} else {
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content');
					endwhile; 
				}
				?>

				<?php seed_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php 
	switch ($GLOBALS['s_blog_layout']) {
		case 'rightbar':
		get_sidebar('right'); 
		break;
		case 'leftbar':
		get_sidebar('left'); 
		break;
		case 'full-width':
		break;
		default:
		break;
	}
	?>
</div><!--container-->
<?php get_footer(); ?>