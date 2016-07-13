<?php

	/**
 	 * The template for displaying the footer.
 	 *
 	 * Contains the closing of the id=main div and all content after
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

?>

	</div><!-- #content -->
	</div><!-- #main -->
		<footer>
			<div id="inspectorate-footer">
				<p><?php _e("<!--:en-->Promoting the Quality of Learning<!--:--><!--:ga-->Feabhas na Foghlama a Chur Chun Cinn<!--:-->"); ?></p>
			</div>
			<div id="footer-left">
				<?php wp_nav_menu(array('menu' => 'Footer', 'menu_class' => 'footer')); ?>
			</div>
			<div id="footer-right">
				<span>An Roinn Oideachais agus Scileanna | Department of Education and Skills</span>
			</div>
		</footer>
		<div id="adobe">
			<a href="http://www.adobe.com/go/getreader"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/get_adobe_reader.gif" alt="Get Adobe Reader" title="Adobe Reader, free PDF viewer download" /></a>
		</div>
		<?php wp_footer(); ?>
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/styleswitcher.js"></script>	
		<script>
			!function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
				if (!d.getElementById(id)) {
					js = d.createElement(s);
					js.id = id;
					js.src = p + '://platform.twitter.com/widgets.js';
					fjs.parentNode.insertBefore(js, fjs);
				}
			}
			(document, 'script', 'twitter-wjs');
		</script>
	</body>
</html>