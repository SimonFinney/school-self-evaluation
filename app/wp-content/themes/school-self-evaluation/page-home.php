<?php
/**
 * The template for displaying the front page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */

get_header();
?>

<section class="content__article--front-page">

  <?php

while (have_posts()) : the_post(); // Begin the loop

  the_content();

endwhile; // End of the loop

$blog_list = wp_get_sites(
  array(
    offset => 1
  )
);

?>

  <nav class="front-page__navigation">


  <?php


    foreach ($blog_list as $blog) {
      switch_to_blog($blog['blog_id']);

  ?>

    <a class="switch-blog__link" href="<?php echo get_site_url(); ?>">
      <?php echo get_bloginfo('description'); ?>
    </a>

  <?php

      restore_current_blog();
    }

  ?>

  </nav>
</section>

<?php

get_footer();
?>
