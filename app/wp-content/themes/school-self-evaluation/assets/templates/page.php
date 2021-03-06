<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */

get_header(); ?>

<section class="content__article">

  <?php while (have_posts()):
    the_post(); // Begin the loop

    get_template_part('template-parts/content', 'page');
  endwhile;
// End of the loop
?>

</section>

<?php
get_sidebar();
get_footer();

?>
