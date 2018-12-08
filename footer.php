<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seed
 */
?>
</div><!--site-content-->

<?php if (is_active_sidebar( 'footbar' ) ) : ?>
	<aside id="footbar" class="site-footbar" role="complementary">
		<div class="container">
			<?php dynamic_sidebar( 'footbar' ); ?>
		</div>
	</aside><!--site-footbar-->

<?php else: ?>
	<div class="site-footer-space"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
			</div><!--site-info-->
		</div><!--container-->
	</footer><!--site-footer-->

<?php endif; ?>

</div><!--site-canvas-->
</div><!--#page-->

<?php wp_footer(); ?>

</body>
</html>
