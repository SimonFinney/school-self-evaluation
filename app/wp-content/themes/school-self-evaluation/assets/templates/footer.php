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
      </section>
  	</main>

    <footer class="footer" role="contentinfo">
      <section class="footer__content">
        <section class="footer__inspectorate-meta">
          <img alt="An Roinn Oideachais | Department of Education" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png" width="255" height="100">
        </section>
        <span class="footer__meta">An Roinn Oideachais | Department of Education</span>
        <ul class="footer__social-media">
          <li class="social-media__list-item">
            <a class="social-media__link--facebook" href="https://www.facebook.com/DESInspectorate/" target="_blank">Facebook</a>
          </li>
          <li class="social-media__list-item">
            <a class="social-media__link--twitter" href="https://twitter.com/SSEinspectorate" target="_blank">Twitter</a>
          </li>
        </ul>
      </section>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
