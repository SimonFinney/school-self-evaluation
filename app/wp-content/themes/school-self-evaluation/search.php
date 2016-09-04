<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package School_Self-Evaluation
 */

get_header();
?>

	<section id="primary" class="content__article">

		<?php

		if (have_posts()) :

      $search_results_count = $wp_query->found_posts;
    ?>

			<header class="search-meta__header">
        <span class="search-meta__search-count">
          <?php printf($search_results_count); ?>
        </span>
				<span class="search-meta">
          <?php printf(esc_html__('search results for: %s', 'school-self-evaluation'), '<span class="search-meta__search-query">' . get_search_query() . '</span>'); ?>
        </span>
			</header>
      <ul class="search-results__list">

			<?php

      // Starts the loop
			while (have_posts()) : the_post();

				// Run the loop for the search to output the results
				get_template_part('template-parts/content', 'search');


      endwhile;

      ?>

      </ul>

      <?php

		else :

			get_template_part('template-parts/content', 'none');

		endif;
    ?>

  </section>

<?php

get_sidebar();
get_footer();
?>
