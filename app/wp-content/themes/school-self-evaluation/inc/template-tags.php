<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package School_Self-Evaluation
 */

if (!function_exists('school_self_evaluation_posted_on')):
  /**
   * Prints HTML with meta information for the current post datetime
   */
  function school_self_evaluation_posted_on()
  {
    $time_string =
      '<time class="entry-meta__datetime" datetime="%1$s">%2$s</time>';

    $time_string = sprintf(
      $time_string,
      esc_attr(get_the_date('c')),
      esc_html(get_the_date()),
      esc_attr(get_the_modified_date('c')),
      esc_html(get_the_modified_date())
    );

    $posted_on = sprintf(
      esc_html_x('Posted on %s', 'post date', 'school-self-evaluation'),
      '<a href="' .
        esc_url(get_permalink()) .
        '" rel="bookmark">' .
        $time_string .
        '</a>'
    );

    echo '<span class="entry-meta__date">' . $posted_on . '</span>'; // WPCS: XSS OK
  }
endif;

if (!function_exists('school_self_evaluation_entry_footer')):
  /**
   * Prints HTML with meta information for the categories, tags and comments.
   */
  function school_self_evaluation_entry_footer()
  {
    edit_post_link(
      sprintf(
        esc_html__('Edit %s', 'school-self-evaluation'), // %s: Name of the current post
        the_title("<span class=\"entry-footer__title\">'", "'</span>", false)
      ),
      '<span class="entry-footer__edit-link">',
      '</span>'
    );
  }
endif;
