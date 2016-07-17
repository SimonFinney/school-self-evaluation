<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package School_Self-Evaluation
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header class="header" role="banner">
      <h1>
        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>

      <nav role="navigation">
        <?php wp_nav_menu(array('navigation')); ?>
      </nav>

      <ul>
        <li>
          <button>High contrast view</button>
        </li>
        <li>
          <button>Large text size</button>
        </li>
        <li>
          <button>Normal text size</button>
        </li>
      </ul>

      <a href="/ga">Change the language</a>

      <?php get_search_form(); ?>

      <img alt="Department of Education and Skills Inspectorate" src="<?php echo get_stylesheet_directory_uri(); ?>/images/#">
    </header>
    <main>
