<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package School_Self-Evaluation
 */

if (!function_exists('school_self_evaluation_posted_on')) :

/**
 * Prints HTML with meta information for the current post datetime
 */
function school_self_evaluation_posted_on() {
	$time_string = '<time class="entry-meta__datetime" datetime="%1$s">%2$s</time>';

	$time_string = sprintf($time_string,
		esc_attr(get_the_date('c')),
		esc_html(get_the_date()),
		esc_attr(get_the_modified_date('c')),
		esc_html(get_the_modified_date())
	);

	$posted_on = sprintf(
		esc_html_x('Posted on %s', 'post date', 'school-self-evaluation'),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

  echo '<span class="entry-meta__date">' . $posted_on . '</span>'; // WPCS: XSS OK
}
endif;


if ( ! function_exists( 'school_self_evaluation_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function school_self_evaluation_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'school-self-evaluation' ) );
		if ( $categories_list && school_self_evaluation_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'school-self-evaluation' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'school-self-evaluation' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'school-self-evaluation' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

  edit_post_link(
    sprintf(

      // %s: Name of the current post
      esc_html__('Edit %s', 'school-self-evaluation'),
      the_title("<span class=\"entry-footer__title\">'", "'</span>", false)
    ),
    '<span class="entry-footer__edit-link">',
    '</span>'
  );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function school_self_evaluation_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'school_self_evaluation_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'school_self_evaluation_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so school_self_evaluation_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so school_self_evaluation_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in school_self_evaluation_categorized_blog.
 */
function school_self_evaluation_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'school_self_evaluation_categories' );
}
add_action( 'edit_category', 'school_self_evaluation_category_transient_flusher' );
add_action( 'save_post',     'school_self_evaluation_category_transient_flusher' );
