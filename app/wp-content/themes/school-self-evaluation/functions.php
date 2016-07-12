<?php

	/**
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 */

	if (function_exists('register_sidebar'))
		register_sidebar(array(
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '',
			'after_title' => '',
		));

	function new_excerpt_more($more) {
		$more = __("<!--:en-->More<!--:--><!--:ga-->Níos mó<!--:-->");
		return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __($more) . '</a>';
	}

	add_filter('excerpt_more', 'new_excerpt_more');

	function highlight_search_results($text) {
     		if (is_search()) {
     			$sr = get_query_var('s');
     			$keys = explode(' ', $sr);
     			$text = preg_replace('/(' . implode('|', $keys) . ')/iu', '<strong>' . $sr . '</strong>', $text);
     		}
     		return $text;
	}

	add_filter('the_excerpt', 'highlight_search_results');

?>