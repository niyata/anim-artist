<?php 
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seed
 * iworn test edit
 */

get_header(); ?>

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="container entry-img"><?php the_post_thumbnail('full'); ?></div>
						
			<div class="container">
				<header class="entry-header">
					<h1 class="entry-title" style="background-color: <?php the_field('color'); ?>;"><?php echo "<i class='fab fa-font-awesome'></i> "; ?><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="row">
						<div class="col-sm-9">
							<?php the_content(); ?>
							<div class="post-type-pagination">
								<?php $prev_post = get_previous_post();
									if($prev_post) {
									$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
									echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="single-pre">&laquo; Previous post<br /><strong>&quot;'. $prev_title . '&quot;</strong></a>' . "\n";
									}

									$next_post = get_next_post();
									if($next_post) {
									$next_title = strip_tags(str_replace('"', '', $next_post->post_title));
									echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="single-next">Next post &raquo;<br /><strong>&quot;'. $next_title . '&quot;</strong></a>' . "\n";
									}
								?>	</div>
							
						</div>
						
						<div class="col-sm-3">
							<table class="table table-bordered">
							
							<!-- add anim avatar , author -->
							<tr><th id="anim-avatar"><?php echo get_avatar(get_the_author_meta('ID'), 76 )?> </th>
								<td><span class="author-show">
										<strong>สร้างสรรค์โดย:&nbsp;
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
										<?php echo get_the_author_meta('user_nicename') ?></a>
										</strong>
									</span>
								</td>
							</tr>
							<!-- end anim avatar , or anim author -->					
							
								<tr><th>Year</th><td><?php the_field('year'); ?></td></tr> 	
								
								<?php   
									$terms = get_the_terms( $post->ID , 'project_category' );
									if ( $terms != null ){
										echo '<tr><th>Style</th><td>';
										foreach( $terms as $term ) {
											if (($term->slug) != 'featured') {
												echo '<a href="'. get_term_link( $term ) .'" style="color:'.get_field('color').'";>'. $term->name .'</a><br>';
												unset($term);
											}
										}
										echo '</td></tr>';
									} 
								?>

								<?php 
									
									$terms = get_the_terms( $post->ID , 'anim_project_name' );
									$proj_count = $term->post_count;
									$proj_count= 0;
									$proj_count++;
									
									if ( $terms != null ){
										echo '<tr class="anim-proj-row"><th>Project</th>
												<td class="style-proj-name">';
												foreach( $terms as $term ) {
													echo '<ul style="margin: 0 0 -0em; color:'.get_field(color).'";>
													<li><a href="'.get_term_link( $term ) .'" style="color:'.get_field('color').'";>'. $term->name .'</a></li></ul>';
												}
										echo '</td></tr>';
									}
								?>
								<tr><th>Color</th><td><span class="project-color" style="background-color: <?php the_field('color'); ?>;"></span></td></tr>
								</table>
						</div>
					</div>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php seed_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div><!--container-->
		</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
