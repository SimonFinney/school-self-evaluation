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
<html <?php language_attributes(); ?> data-app>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header class="header" role="banner">
      <section class="header__section">
        <h1 class="header__masthead">
          <a class="header__link" href="<?php echo esc_url( home_url('/') ); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </h1>

        <section class="header__user-controls">

          <?php

          wp_nav_menu(
            array(
              container_class => 'language-container',
              menu => 'language',
              menu_class => 'language-list',
              menu_id => 'languageList'
            )
          );

          get_search_form();
          ?>

          <ul class="layout-list">
            <li class="layout-list__item">
              <button class="layout-list__button" data-class>Normal text size</button>
            </li>

            <li class="layout-list__item">
              <button class="layout-list__button" data-class="large-text-size">Large text size</button>
            </li>

            <li class="layout-list__item">
              <button class="layout-list__button" data-class="high-contrast">High contrast view</button>
            </li>
          </ul>
        </section>

        <?php

          wp_nav_menu(
            array(
              container => 'nav',
              container_class => 'header__nav',
              items_wrap => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>',
              menu => 'navigation',
              menu_class => 'header__nav__list',
              menu_id => 'headerNavList'
            )
          );
        ?>
      </section>
    </header>
    <main class="main" role="main">
      <section class="main__content">

        <?php

        // Don't display this on the landing layout
        if (!is_page('home')) {

          $blog_list = wp_get_sites(
            array(
              limit => 1
            )
          );

          $current_blog_description = get_bloginfo('description');

        ?>

        <nav class="content__blog-navigation">


        <?php


          foreach ($blog_list as $blog) {
            switch_to_blog($blog['blog_id']);

        ?>

          <a class="switch-blog__link" href="<?php echo get_site_url(); ?>"><?php echo $current_blog_description; ?></a> / <?php echo the_title(); ?>

        <?php

            restore_current_blog();
          }

        ?>

        </nav>

  <?php } ?>
