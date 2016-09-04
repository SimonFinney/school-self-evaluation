<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */

?>

<li class="search-results__list-item">
  <article <?php post_class('article'); ?>>
  	<header class="search-result__header">

  		<?php

      the_title(sprintf('<a class="search-result__link" href="%s" rel="bookmark">', esc_url(get_permalink())), '</a>');

      if ('post' === get_post_type()) :
  		    school_self_evaluation_posted_on();
  		endif;
      ?>
  	</header>

    <p>
      <?php school_self_evaluation_search_excerpt_highlight(); ?>
    </p>

  	<footer class="search-result__footer">
  	  <?php school_self_evaluation_entry_footer(); ?>
  	</footer>
  </article>
</li>
