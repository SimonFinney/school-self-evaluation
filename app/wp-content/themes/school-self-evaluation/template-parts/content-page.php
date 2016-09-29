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

		<?php

    the_title('<h2>', '</h2>');

    $child_pages  = wp_list_pages('title_li=&child_of=' .$post->ID . '&depth=1&echo=0');
    if ($child_pages) :
    ?>

    <nav class="entry-header__nav">
      <ul class="content__subnavigation">
          <?php echo $child_pages; ?>
      </ul>
    </nav>

  <?php

    endif;
  ?>

	</header>

  <?php

    $child_pages = get_pages(array('child_of' => $post->ID));

    if (empty($post->post_content) && (count($child_pages) === 0)) {
  ?>

  <p>
    <?php esc_html_e("This section is currently being developed, please check back soon and we'll have added new material.", 'school-self-evaluation'); ?>
  </p>

  <?php

    }

    the_content();

    if ($post->post_parent) :
      $parent_page = $post->post_parent;
      $parent_link = get_permalink($parent_page);
      $parent_title = get_the_title($parent_page);
  ?>

  <a href="<?php echo $parent_link; ?>">Back to <?php echo $parent_title; ?></a>

  <?php

    endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'school-self-evaluation' ),
			'after'  => '</div>',
		) );
	?>

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry__footer">
  		<?php

				edit_post_link(
					sprintf(

						// %s: Name of the current post
						esc_html__('Edit %s', 'school-self-evaluation'),
						the_title("<span class=\"entry-footer__title\">", "</span>", false)
					),
					'<span class="entry-footer__edit-link">',
					'</span>'
				);
			?>
		</footer>
	<?php endif; ?>
</article>
