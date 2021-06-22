<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package School_Self-Evaluation
 */
?>

<section class="content__article">
	<header class="entry__header">
		<h2>
      <?php esc_html_e('No updates found', 'school-self-evaluation'); ?>
    </h2>
	</header>

		<?php if (is_home() && current_user_can('publish_posts')): ?>

			<p>
        <?php printf(
          wp_kses(
            __(
              'Ready to publish an update? <a href="%1$s">Start here</a>.',
              'school-self-evaluation'
            ),
            ['a' => ['href' => []]]
          ),
          esc_url(admin_url('post-new.php'))
        ); ?>
      </p>

		<?php elseif (is_search()): ?>

			<p>
        <?php esc_html_e(
          'Sorry, but no content matched your search terms. Please try again with some different keywords.',
          'school-self-evaluation'
        ); ?>
      </p>

		<?php else: ?>

			<p>
        <?php esc_html_e(
          "It seems we can&rsquo;t find the content you're looking for. Perhaps searching could help.",
          'school-self-evaluation'
        ); ?>
      </p>

		<?php endif;
?>
