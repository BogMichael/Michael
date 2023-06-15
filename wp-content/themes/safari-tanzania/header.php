<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package safari-tanzania
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="/wp-content/themes/safari-tanzania/fonts/Inter/stylesheet.css">
    <link rel="stylesheet" href="/wp-content/themes/safari-tanzania/css/swiper.min.css">
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
        <div class="container">
            <div class="header_left">
                <!-- logo -->
                <div class="logo">
                    <a href="/">
                        <div class="black_circle">
                        </div>
                        <strong class="logo_name">SAFARI</strong>
                    </a>
                </div><!-- end logo -->
                
                <div class="menu_toggle">
                    <div class="menu_toggle_line"></div>
                </div>
				<?php wp_nav_menu(
					[
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					]
				);?>
				<!-- <nav class="menu">
                    <ul class="menu_items">
                        <li class="menu_item">
                            <a href="#">Home</a>
                        </li>
                        <li class="menu_item">
                            <a href="#">Top destinations</a>
                        </li>
                        <li class="menu_item">
                            <a href="#">Travel information</a>
                        </li>
                        <li class="menu_item">
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </nav> -->
            </div>
            <div class="button-b">
                <a class="popmake-72">Book a tour</a>
            </div>
        </div>
    </header>