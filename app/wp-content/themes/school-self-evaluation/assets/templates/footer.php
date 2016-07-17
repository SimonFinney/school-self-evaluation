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
      <?php
        wp_nav_menu(
          array(
            container => 'nav',
            container_class => 'footer__nav',
            items_wrap => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>',
            menu => 'footer',
            menu_class => 'footer__nav__list',
            menu_id => 'footerNavList'
          )
        );
      ?>
      <span>An Roinn Oideachais agus Scileanna | Department of Education and Skills</span>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
