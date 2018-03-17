<?php
/**
 * Template part for displaying the search form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */

?>

<form class="search-form" action="<?php echo esc_url(home_url('/')) ?>" method="get" role="search">
  <label class="search-form__label" for="searchInput" hidden>
    <?php echo _x('Search for:', 'label'); ?>
  </label>
  <input id="searchInput" class="search-field" name="s" placeholder="<?php echo esc_attr_x('Search the website&hellip;', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>">
</form>
