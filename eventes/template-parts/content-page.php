<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package eventes
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="pages-content">
        <?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eventes'),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->