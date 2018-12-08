<?php
/**
 * Loop Name: Content Post Detail
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-single'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php seed_posted_on(); ?>
			</div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array('before' => '<div class="page-links">' . esc_html__( 'Pages:', 'plant' ),'after'  => '</div>') ); ?>

		<?php if($GLOBALS['s_blog_show_profile']) :?>
			<div class="entry-author clearfix">
				<div class="pic">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'author_bio_avatar_size', 100 ) ); ?></a>
				</div><!--pic-->
				<div class="info">
					<h2 class="name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author(); ?></a></h2>
					<div class="desc"><?php the_author_meta( 'description' ); ?></div>
				</div><!--info-->
			</div><!--author-->
		<?php endif; ?>
	</div>

	<footer class="entry-footer">
		<?php seed_entry_footer(); ?>
	</footer>
</article>