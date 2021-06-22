<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package School_Self-Evaluation
 */

// Displays the Twitter feed only if it's the landing or contact section
if (is_front_page() || is_page('contact')) { ?>

<aside class="aside" role="complementary">
  <h3>Latest Tweets</h3>
  <a class="twitter-timeline" height="480" href="https://twitter.com/SSEinspectorate" data-chrome="noborders nofooter noheader transparent" data-dnt="true" data-link-color="#326598">Tweets by SSEinspectorate</a>
  <?php dynamic_sidebar('sidebar-1'); ?>
</aside>

<?php }
?>
