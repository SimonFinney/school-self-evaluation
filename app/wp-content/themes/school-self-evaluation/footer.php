<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package School_Self-Evaluation
 */

?>

  	</main>

    <footer role="contentinfo">
      <span>Promoting the Quality of Learning</span>
      <nav role="navigation">
        <?php wp_nav_menu(
          array(
            menu => 'footer'
          )
        ); ?>
      </nav>
      <span>An Roinn Oideachais agus Scileanna | Department of Education and Skills</span>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
