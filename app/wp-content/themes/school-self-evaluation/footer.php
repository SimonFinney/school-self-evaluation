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
          <img alt="Department of Education and Skills Inspectorate" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/image_inspectorate-logo.png">
          <span class="footer__tagline">Promoting the Quality of Learning</span>
        </section>
        <span class="footer__meta">An Roinn Oideachais agus Scileanna | Department of Education and Skills</span>
      </section>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
