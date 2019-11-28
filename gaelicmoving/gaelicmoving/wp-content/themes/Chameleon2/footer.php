		<div id="footer">
			<div id="footer-content" class="clearfix">
				<div id="footer-widgets" class="clearfix">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
					<?php endif; ?>
				</div> <!-- end #footer-widgets -->
				<p id="copyright"><?php esc_html_e('Copyright ','Chameleon'); ?> <a href="http://www.Gaelicmoving.com" title="San Francisco Moving Company"> Gaelic Moving 2012</a></p>
			</div> <!-- end #footer-content -->
		</div> <!-- end #footer -->
	</div> <!-- end #container -->
	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); ?>
</body>
</html>