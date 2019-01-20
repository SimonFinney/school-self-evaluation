<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package School_Self-Evaluation
 */

get_header(); ?>

<section class="content__article">

  <?php while (have_posts()):
    the_post(); // Begin the loop

    get_template_part('template-parts/content', get_post_format());
  endwhile;
// End of the loop
?>

</section>

<?php
get_sidebar();
get_footer();

?>
