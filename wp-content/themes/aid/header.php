<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aid' ); ?></a>

    <header class="container-fluid main-red-menu">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-between">
                <?php
                wp_nav_menu([
                        'container' => 'nav',
                         'menu' => 'Menu 1',
                ]);
                get_search_form();
                ?>
                <!-- #site-navigation -->
            </div>
        </div>
    </header>

	<div id="content" class="site-content">
