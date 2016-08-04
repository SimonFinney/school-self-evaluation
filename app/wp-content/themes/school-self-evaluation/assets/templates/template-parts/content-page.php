<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */

?>

<article <?php post_class('article'); ?>>
	<header class="entry__header">
		<?php the_title('<h2>', '</h2>'); ?>
	</header>

	<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'school-self-evaluation' ),
			'after'  => '</div>',
		) );
	?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry__footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'school-self-evaluation' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer>
	<?php endif; ?>
</article>
