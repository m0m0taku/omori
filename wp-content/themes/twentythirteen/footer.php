<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->			
		<footer id="colophon" class="site-footer" role="contentinfo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/main-visual/group-companies_02.png" alt=""/>
			<div class="site-info">
				<ul class="list-inline">
					<li class="text-uppercase">All Rights Reserved. Copyright © 2015</li>
					<li class="text-uppercase">Ever Gain & Omori Forwarding Ltd.</li>
				</ul>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>