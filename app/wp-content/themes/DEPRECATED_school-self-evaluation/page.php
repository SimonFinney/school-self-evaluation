<?php

	/**
 	 * The template for displaying all pages.
 	 *
 	 * This is the template that displays all pages by default.
 	 * Please note that this is the WordPress construct of pages
 	 * and that other 'pages' on your WordPress site will use a
 	 * different template.
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

	get_header();	
	if (get_the_title() == 'Home' || get_the_title() == 'Baile') { }
	else get_sidebar();
	if (get_bloginfo('description') == "Primary Schools") $description =  __("<!--:en-->Primary Schools<!--:--><!--:ga-->Bunscoileanna<!--:-->");
	else $description =  __("<!--:en-->Post-Primary Schools<!--:--><!--:ga-->Iar-Bunscoileanna<!--:-->");
?>
	
		<p class="breadcrumb"><a href="<?php _e("<!--:en-->http://schoolself-evaluation.ie/<!--:--><!--:ga-->http://schoolself-evaluation.ie/gaeilge.php<!--:-->"); ?>" title="<?php _e("<!--:en-->Primary Schools/Post-Primary Schools<!--:--><!--:ga-->Bunscoileanna/Iar-Bunscoileanna<!--:-->"); ?>"><?php echo $description; ?></a> / <?php echo get_the_title(); ?></p>
		<?php if (get_the_title() == 'Home' || get_the_title() == 'Baile') { } else { ?>
			<div class="content">
		<?php 
			}
			while (have_posts()) : the_post();
				get_template_part('content', 'page');
			endwhile; // end of the loop.
			if (get_the_title() == 'Home' || get_the_title() == 'Baile') { }
			else { 
		?>			
		</div>
		<?php
			}
			get_footer();
		?>