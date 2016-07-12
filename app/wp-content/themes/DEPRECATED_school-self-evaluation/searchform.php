<?php

	/**
 	 * The template for displaying search forms in Department of Education and Skills School Self-Evaluation
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

?>
		<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')) ?>">
		<input type="text" id="text" name="s" placeholder="<?php esc_attr_e('', 'Department_of_Education_and_Skills_School_Self-Evaluation'); ?>" onblur="this.value=!this.value?'Search the website...':this.value;" onclick="this.value='';" value="<?php _e("<!--:en-->Search the website...<!--:--><!--:ga-->Cuardaigh an suíomh se...<!--:-->"); ?>" />
		<input class="submit" type="submit" value="Go" />
	</form>