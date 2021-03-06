<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */

get_header();
if (have_posts()):
  if (is_home() && !is_front_page()): ?>
				<header>
					<h1>
            <?php single_post_title(); ?>
          </h1>
				</header>

			<?php endif; ?>

      <section class="content__article">
        <h2><?php echo __("[:en]What's new[:ga]Cad atá nua[:]?"); ?></h2>

      <?php
      $post_query = new WP_Query('posts_per_page=5');

      /* Start the Loop */
      while ($post_query->have_posts()):
        $post_query->the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part('template-parts/content', get_post_format());
      endwhile;

      the_posts_navigation();

else:
  get_template_part('template-parts/content', 'none');
endif;
?>

  </section>

<?php
get_sidebar();
get_footer();

?>
