<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scratchpad
 */

?>
		</div><!-- .wrap -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">

			<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
				<aside id="footer-widgets" class="widget-area" role="complementary">
					<div class="grid-container">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</aside><!-- #secondary -->
			<?php } ?>

			<!-- <div class="site-info">
				<?php get_template_part( 'images/inline', 'line.svg' ); ?>
				<?php scratchpad_social_menu(); ?>

				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'scratchpad' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'scratchpad' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'scratchpad' ), 'Scratchpad', '<a href="http://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
			</div> -->
			<!-- .site-info -->

			<div class="site-info">
				<?php get_template_part( 'images/inline', 'line.svg' ); ?>
				<?php scratchpad_social_menu(); ?>

				<a href="<?php echo esc_url( __( 'https://www.facebook.com/watergrass0402/', 'watergrass' ) ); ?>" target="_blank"><?php printf( esc_html__( '粉絲團: %s', 'watergrass' ), 'WaterGrass' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Blog: %1$s by %2$s.', 'watergrass' ), 'Watergrass', '<a href="https://www.facebook.com/watergrass0402/" rel="author" target="_blank">Gee Hsu</a>' ); ?>
			</div>

		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
