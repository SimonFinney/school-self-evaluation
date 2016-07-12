<?php
	/**
 	 * The Sidebar containing the main widget area.
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */
?>

	<div id="sidebar">
		<?php if (!dynamic_sidebar('sidebar-1')) : ?>
			<ul class="questions">

				<?php wp_get_archives(array('type' => 'postbypost')); ?>

			</ul>
			<ul id="adobe-pdf">

				<?php if (get_bloginfo('description') == "Primary Schools") { ?>

<li><a href="http://schoolself-evaluation.ie/primary/wp-content/uploads/2015/11/SSE-primary-Update-6-final.pdf" target="_blank">SSE Update Issue 6</a></li>				
				<li><a href="http://schoolself-evaluation.ie/primary/wp-content/uploads/2015/05/SSE-Update-Primary-Issue-5.pdf" target="_blank">SSE Update Issue 5</a></li>				
<li><a href="http://schoolself-evaluation.ie/primary/wp-content/uploads/2014/12/SSE-UPDATE-Issue-4.pdf" target="_blank">SSE Update Issue 4</a></li>				
<li><a href="http://schoolself-evaluation.ie/primary/wp-content/uploads/2014/04/SSE-UPDATE-P-Issue-3-April-2014-1.pdf" target="_blank">SSE Update Issue 3</a></li>
				<li><a href="http://schoolself-evaluation.ie/primary/wp-content/uploads/2013/11/SSE-UPDATE-P-Issue-2-30-Oct-2.pdf" target="_blank">SSE Update Issue 2</a></li>
				<li><a href="http://schoolself-evaluation.ie/primary/wp-content/uploads/2013/05/Primary-SSE-update.pdf" target="_blank">SSE Update Issue 1</a></li>

			 	<?php } else if (get_bloginfo('description') == "Post-Primary Schools") { ?>

<li><a href="http://schoolself-evaluation.ie/post-primary/wp-content/uploads/2015/11/SSE-Update-Issue-6-post-primary.pdf" target="_blank">SSE Update Issue 6</a></li>		
				<li><a href="http://schoolself-evaluation.ie/post-primary/wp-content/uploads/2015/05/SSE-UPDATE-PP-Issue-5.pdf" target="_blank">SSE Update Issue 5</a></li>				
<li><a href="http://schoolself-evaluation.ie/post-primary/wp-content/uploads/2014/12/SSE-UPDATE-PP-Issue-4.pdf" target="_blank">SSE Update Issue 4</a></li>				
<li><a href="http://schoolself-evaluation.ie/post-primary/wp-content/uploads/2014/04/SSE-UPDATE-PP-Issue-3l.pdf" target="_blank">SSE Update Issue 3</a></li>
				<li><a href="http://schoolself-evaluation.ie/post-primary/wp-content/uploads/2013/11/SSE-UPDATE-PP-Issue-2.pdf" target="_blank">SSE Update Issue 2</a></li>
				<li><a href="http://schoolself-evaluation.ie/post-primary/wp-content/uploads/2013/05/Post-primary-SSE-update.pdf" target="_blank">SSE Update Issue 1</a></li>

				<?php } ?>
			
			</ul>
		<?php endif; // end sidebar widget area ?>
	</div>
	