<?php

	/**
 	 * The template for displaying 404 pages (Not Found).
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

	get_header();
	if (get_bloginfo('description') == "Primary Schools") $description =  __("<!--:en-->Primary Schools<!--:--><!--:ga-->Bunscoileanna<!--:-->");
	else $description =  __("<!--:en-->Post-Primary Schools<!--:--><!--:ga-->Iar-Bunscoileanna<!--:-->"); 
?>
		<p class="breadcrumb"><a href="<?php _e("<!--:en-->http://schoolself-evaluation.ie/<!--:--><!--:ga-->http://schoolself-evaluation.ie/gaeilge.php<!--:-->"); ?>" title="<?php _e("<!--:en-->Primary Schools/Post-Primary Schools<!--:--><!--:ga-->Bunscoileanna/Iar-Bunscoileanna<!--:-->"); ?>"><?php echo $description; ?></a> / <?php _e("<!--:en-->Page not found<!--:--><!--:ga-->Leathanach ní bhfuarthas an<!--:-->"); ?></p>
		<h2><?php _e('Page not found', 'Department_of_Education_and_Skills_School_Self-Evaluation'); ?></h2>
		<p><?php _e('<?php _e("<!--:en-->There was an <span class="bold">error</span> or the page you requested was <span class="bold">not found</span>.<!--:--><!--:ga-->There was an <span class="bold">error</span> or the page you requested was <span class="bold">not found</span>.<!--:-->"); ?>', 'Department_of_Education_and_Skills_School_Self-Evaluation'); ?></p>
<?php get_footer(); ?>