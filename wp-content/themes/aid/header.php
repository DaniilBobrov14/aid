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
<?php change_qr_key_login_active_status(); ?>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <header class="container-fluid main-red-menu">
        <div class="row">
            <div class="col-lg-10 col-md-2 d-flex justify-content-between">
                <?php
                wp_nav_menu([
                        'container' => 'nav',
                         'menu' => 'Menu 1',
                ]);
//                get_search_form();
                ?>
                <!-- #site-navigation -->
            </div>
            <div class="col-lg-2 col-md-10 d-flex align-items-center justify-content-end">
                <?php
                if (is_user_logged_in() ) {

                    get_template_part('template-parts/login_in_user');

                }

                else {

                    get_template_part('template-parts/login_in');

                }
                ?>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#" aria-controls="#" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                </nav>
                <!--

                <a href="<?php echo get_page_uri(140)?>" class="login-in-link registration-link-mobile">
                    <span class="icon-login"></span>
                </a>
                -->
            </div>
            <!-- #site-login -->
        </div>
    </header>

	<div id="content" class="site-content">
