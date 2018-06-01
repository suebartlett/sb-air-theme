<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package air-light
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

        <!-- This is just theme info for the demo, so please
        remove these and make your own!

        Start by removing this comment and until the next comment: -->

		<div class="site-info">
			<span class="sb-footer">&copy; <?php echo date("Y");?> Sue Bartlett </span><span class="sb-footer">All rights reserved.</span>
			<span class="theme-info sb-footer">Made by <a href="http://rikdeakin.com" target="_blank" rel="external noopener">Rik</a>.
			</span>
		</div><!-- .site-info -->

        <!-- At least
        ... Until here. This comment included. -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<a href="#page" class="js-trigger top" data-mt-duration="300"><span class="screen-reader-text"><?php echo esc_html_e( 'Back to top', 'air-light' ); ?></span><?php include get_theme_file_path( '/svg/chevron-up.svg' ); ?></a>

<?php wp_footer(); ?>
</body>
</html>
