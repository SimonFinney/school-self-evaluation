<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */

?>

<article <?php post_class('article'); ?>>
	<header class="entry__header">
		<?php
			if (is_single()) {
			  the_title('<h2>', '</h2>');
			} else {
			  the_title('<h2><a class="entry-header__link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>');
			}

		if ('post' === get_post_type()) : ?>
		<section class="entry__meta">
			<?php school_self_evaluation_posted_on(); ?>
		</section><!-- .entry__meta -->
		<?php
		endif; ?>
	</header><!-- .entry__header -->

	<section class="entry__content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'school-self-evaluation' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'school-self-evaluation' ),
				'after'  => '</div>',
			) );
		?>

	<footer class="entry__footer">
	   <?php school_self_evaluation_entry_footer(); ?>
	</footer>
</article>
