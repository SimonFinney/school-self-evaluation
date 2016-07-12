<?php

	/**
 	 * The Header for our theme.
 	 *
 	 * Displays all of the <head> section and everything up until <div id="main">
 	 *
 	 * @package WordPress
 	 * @subpackage Department_of_Education_and_Skills_School_Self-Evaluation
 	 * @since Department of Education and Skills School Self-Evaluation 1.0
 	 */

?>
<!DOCTYPE html>
	<!--[if IE 6]>
		<html id="ie6" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 7]>
		<html id="ie7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 8]>
		<html id="ie8" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
		<html <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initial-scale=.3">
		<title><?php

			/*
	 	 	 * Print the <title> tag based on what is being viewed.
	 		 */

			global $page, $paged;
			if (is_search()) echo 'Search - ';
			else wp_title('-', true, 'right');

			// Add the blog name.

			$site_name = __("<!--:en-->School Self-Evaluation<!--:--><!--:ga-->Féinmheastóireacht Scoile<!--:-->"); 
			if (get_bloginfo('description') == "Primary Schools") { $description =  __("<!--:en-->Primary Schools<!--:--><!--:ga-->Bunscoileanna<!--:-->"); }
			else if (get_bloginfo('description') == "Post-Primary Schools") { $description =  __("<!--:en-->Post-Primary Schools<!--:--><!--:ga-->Iar-Bunscoileanna<!--:-->"); }				
			echo $description . ' | ' . $site_name;
		?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" title="normaltextsize" />
		<link rel="alternate stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/largetextsize.css" title="largetextsize" />
		<link rel="alternate stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/highcontrastview.css" title="highcontrastview" />
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>		
		<![endif]-->
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php

			/* Always have wp_head() just before the closing </head>
	 	 	 * tag of your theme, or you will break many plugins, which
	 	 	 * generally use this hook to add elements to <head> such
	 	 	 * as styles, scripts, and meta tags.
	 	 	 */

			wp_head();
		?>
	</head>
	<body>
		<header>
			<div id="header-holder">
				<div id="header-left">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/<?php _e("<!--:en-->DepartmentofEducationandSkillsSchoolSelf-Evaluationlogo<!--:--><!--:ga-->DepartmentofEducationandSkillsFheinmheastoireachtScoilelogo<!--:-->"); ?>.png" alt="<?php _e("<!--:en-->School Self-Evaluation logo<!--:--><!--:ga-->Fhéinmheastóireacht Scoile lógó<!--:-->"); ?>" title="<?php _e("<!--:en-->School Self-Evaluation<!--:--><!--:ga-->Fhéinmheastóireacht Scoile<!--:-->"); ?>" /></a>
					<nav>
						<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
						<?php wp_nav_menu(array('menu' => 'Navigation')); ?>
					</nav>
					<?php // get_search_form(); ?>
				</div>
				<div id="header-right">
					<a href="#" class="highcontrastview" onclick="setActiveStyleSheet('highcontrastview'); return false;" title="High Contrast View">A</a>
					<a href="#" class="largetextsize" onclick="setActiveStyleSheet('largetextsize'); return false;" title="Large Text Size">A</a>
					<a href="#" class="normaltextsize" onclick="setActiveStyleSheet('normaltextsize'); return false;" title="Normal Text Size">A</a>
					<a class="language" href="<?php
									if (qtrans_getLanguage() == 'en') {
										echo qtrans_convertURL('', 'ga');
								?>" title="Athraigh an teanga">Gaeilge
								<?php
									}
									else { 
										echo qtrans_convertURL('', 'en');
								?>" title="Change the language">English
								<?php } ?></a>
					<a class="twitter" href="https://twitter.com/SSEinspectorate" target="_blank"><img alt="Follow us on Twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Twitter-Icon.png"></a>
					<?php get_search_form(); ?>
					<img id="inspectorate" src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php _e("<!--:en-->DepartmentofEducationandSkillsInspectoratelogo<!--:--><!--:ga-->DepartmentofEducationandSkillsAnChigireachtlogo<!--:-->"); ?>.png" alt="<?php _e("<!--:en-->Department of Education and Skills Inspectorate logo<!--:--><!--:de-->An Roinn Oideachais agus Scileanna An Chigireacht lógó<!--:-->"); ?>" />					
				</div>
			</div>
		</header>
		<div id="main">
			<div id="content">