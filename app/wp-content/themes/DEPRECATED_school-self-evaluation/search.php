<?php

	/**
 	 * The template for displaying Search Results pages.
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

	global $wp_query;
	$total_results = $wp_query->found_posts;
	get_header();
	get_sidebar();
	if (get_bloginfo('description') == "Primary Schools") $description =  __("<!--:en-->Primary Schools<!--:--><!--:ga-->Bunscoileanna<!--:-->");
	else $description =  __("<!--:en-->Post-Primary Schools<!--:--><!--:ga-->Iar-Bunscoileanna<!--:-->");
	$search = __("<!--:en--> search results for: <!--:--><!--:ga--> torthaí an chuardaigh le haghaidh: <!--:-->");
?>

		<p class="breadcrumb"><a href="<?php _e("<!--:en-->http://schoolself-evaluation.ie/<!--:--><!--:ga-->http://schoolself-evaluation.ie/gaeilge.php<!--:-->"); ?>" title="<?php _e('<!--:en-->Primary Schools/Post-Primary Schools<!--:--><!--:ga-->Bunscoileanna/Iar-Bunscoileanna<!--:-->'); ?>"><?php echo $description; ?></a> / <span class="bold"><?php printf(__($total_results . '</span> ' . $search . ' <span class="bold">%s</span>', 'Department_of_Education_and_Skills_School_Self-Evaluation'), '<span>' . get_search_query() . '</span>'); ?></p>
		<?php if (have_posts()) : ?>
			<?php /* Start the Loop */ ?>
			<div class="content">
			<?php while (have_posts()) : the_post();

				/* 
			 	 * Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

				get_template_part('content', get_post_format());
			endwhile;
			$previous = __("<!--:en-->Previous<!--:--><!--:ga-->Roimhe seo<!--:-->");
			$next = __("<!--:en-->Next<!--:--><!--:ga-->Seo chugainn<!--:-->");
			posts_nav_link('', '<span class="previous">' . $previous . '</span>', '<span class="next">' . $next . '</span>');
		?>
		</div>
		<?php 
			else :
			$h2 = __("<!--:en-->No results available for selected criteria<!--:--><!--:ga-->Níl aon torthaí ar fáil do na critéir roghnaithe<!--:-->");
			$p = __("<!--:en-->Sorry, but there were no results that matched your search criteria. Please try again with some different keywords.<!--:--><!--:ga-->Tá brón orainn, ach ní raibh aon torthaí a mheaitseáil do chritéir chuardaigh. Bain triail as arís le roinnt focail éagsúla.<!--:-->");  
		?>
			<h2><?php _e($h2, 'Department_of_Education_and_Skills_School_Self-Evaluation'); ?></h2>
			<div class="content">
				<p><?php _e($p, 'Department_of_Education_and_Skills_School_Self-Evaluation'); ?></p>
			</div>					
		<?php endif; ?>
<?php get_footer(); ?>