<?php

	/**
 	 * The default template for displaying content
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

	if (is_search()) : // Only display Excerpts for Search 

?>

		<div id="search-result">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php the_excerpt(); ?>
		</div>		
	<?php endif; ?>