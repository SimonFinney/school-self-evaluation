<?php
	/**
 	 * The Template for displaying all single posts.
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

	get_header();
	get_sidebar();
	if (get_bloginfo('description') == "Primary Schools") $description =  __("<!--:en-->Primary Schools<!--:--><!--:ga-->Bunscoileanna<!--:-->");
	else $description =  __("<!--:en-->Post-Primary Schools<!--:--><!--:ga-->Iar-Bunscoileanna<!--:-->"); 
?>

<p class="breadcrumb"><a href="<?php _e("<!--:en-->http://schoolself-evaluation.ie/<!--:--><!--:ga-->http://schoolself-evaluation.ie/gaeilge.php<!--:-->"); ?>" title="<?php _e("<!--:en-->Primary Schools/Post-Primary Schools<!--:--><!--:ga-->Bunscoileanna/Iar-Bunscoileanna<!--:-->"); ?>"><?php echo $description; ?></a> / <?php echo get_the_title(); ?></p>
<div class="content">
<h1><?php echo get_the_title(); ?></h1>
<?php 
	while (have_posts()) : the_post();
		the_content();
?>	
		<span class="previous"><?php next_post_link('%link', '%title'); ?></span>
		<span class="next"><?php previous_post_link('%link', '%title'); ?></span>
		</div>
<?php
	endwhile; // end of the loop.
	get_footer();
?>