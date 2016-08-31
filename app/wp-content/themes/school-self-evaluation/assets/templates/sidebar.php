<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package School_Self-Evaluation
 */

 if (is_front_page()) {
?>

<aside class="aside" role="complementary">
  <h3>Latest Tweets</h3>
  <a class="twitter-timeline" height="480" href="https://twitter.com/SSEinspectorate" data-chrome="noborders nofooter noheader transparent" data-link-color="#326598">Tweets by SSEinspectorate</a>
  <?php dynamic_sidebar('sidebar-1'); ?>
</aside>

<?php } ?>
