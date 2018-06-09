<?php
/**
 * The template for displaying front page
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package air-light
 */

// Featured image.
$featured_image = '';
if ( has_post_thumbnail() ) :
	$featured_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
else :
	$featured_image = get_theme_file_uri( 'images/default.jpg' );
endif;

get_header(); ?>

<header class="entry-header-demo">

</header>

<div id="content" class="content-area">
  <main id="main" class="site-main">
		<?php if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							the_content();
						}
					} else {
						get_template_part( 'template-parts/content', 'none' );
					}  ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
