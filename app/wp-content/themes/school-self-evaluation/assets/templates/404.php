<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package School_Self-Evaluation
 */

 get_header();
 ?>

 <section class="content__article">
   <h2><?php esc_html_e('Oops!', 'school-self-evaluation'); ?></h2>
   <p><?php esc_html_e('It looks like that content can&rsquo;t be found in this location... Maybe try one of the links below or a search above?', 'school-self-evaluation'); ?></p>

   <?php
   the_widget('WP_Widget_Recent_Posts', "title=What's New", 'before_title=<h3>&after_title=</h3>');
   ?>
 </section>

 <?php

 get_sidebar();
 get_footer();
 ?>
