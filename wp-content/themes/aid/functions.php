<?php
/**
 * aid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aid
 */

if ( ! function_exists( 'aid_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aid_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on aid, use a find and replace
		 * to change 'aid' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aid', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'aid' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'aid_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'aid_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aid_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'aid_content_width', 640 );
}
add_action( 'after_setup_theme', 'aid_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aid_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aid' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'aid' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aid_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aid_scripts() {
	wp_enqueue_style( 'aid-style', get_stylesheet_uri() );

	wp_enqueue_style('aid-bootstrap-js', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style('aid-scss-style' , get_template_directory_uri() . '/css/style.css');

	wp_enqueue_style('aid-slick-style' , get_template_directory_uri() . '/assets/css/slick.css');

	wp_enqueue_script( 'aid-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script('jquery');

	wp_enqueue_script( 'aid-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('aid-bootstrap-js' , get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array() , '4.4.1' , true);

	wp_enqueue_script('aid-slick-slider' , get_template_directory_uri() . '/assets/js/slick.min.js' , array() , '1.8.1' , true );

	wp_enqueue_script('aid-slider-js' , get_template_directory_uri() . '/assets/js/slider.js');

//	wp_enqueue_script('aid-formValidate-js' , get_template_directory_uri() . '/assets/js/formValidate.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aid_scripts' );

/** restrict admin  **/

function restrict_admin() {

    if (! current_user_can('manage_options') && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF']) {

        wp_redirect(site_url());

    }

}

add_action('admin_init' , 'restrict_admin' , 1);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Filters for functions wordpress
 */

add_filter('excerpt_length' , function ($more) {
    return 20;
});

add_filter('wp_nav_menu_items' , 'add_new_menu_item', 10, 2);

function add_new_menu_item($nav, $args) {

    $newmenuitem = '<li class="menu-item"><a class="home-link" href="'. home_url() . '">Эра</a></li>';
    $nav = $newmenuitem.$nav;
    return $nav ;
}

## Оставляет пользователя на той же странице при вводе неверного логина/пароля в форме авторизации wp_login_form()
add_action( 'wp_login_failed', 'my_front_end_login_fail' );
function my_front_end_login_fail($username) {
    $referrer = $_SERVER['HTTP_REFERER'];  // откуда пришел запрос

    // Если есть referrer и это не страница wp-login.php
    if( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
        wp_redirect( add_query_arg('login', 'failed', $referrer ) );  // редиркетим и добавим параметр запроса ?login=failed
        exit;
    }
}

// предварительная проверка поля
add_filter( 'registration_errors', 'my_validate_user_data' );
function my_validate_user_data( $errors ){
    $referrer = $_SERVER['HTTP_REFERER'];
//    if (empty($_POST['user_fullname']))
//    {
//        wp_redirect( add_query_arg('register', 'failed=fullname', $referrer ) );  // редиркетим и добавим параметр запроса ?login=failed
//
//    }
//    elseif (empty($_POST['user_login']))
//    {
//        wp_redirect(add_query_arg('register' , 'failed=login', $referrer));
//    }
//    elseif (empty($_POST['user_email']))
//    {
//        wp_redirect(add_query_arg('register' , 'failed=email' , $referrer));
//    }
//    elseif (empty($_POST['user_password']) or empty($_POST['user_passwordVerify']))
//    {
//        wp_redirect(add_query_arg('register' , 'failed=password' , $referrer));
//    }
//    elseif ($_POST['user_password'] !== $_POST['user_passwordVerify'])
//    {
//        wp_redirect(add_query_arg('register' , 'failed=passwordVerify', $referrer));
//    }

    return $errors;
}

// обновление метаданных пользователя
add_action( 'user_register', 'my_user_registration' );
function my_user_registration( $user_id ) {
//     $_POST['user_fullname'] проверена заранее...
    update_user_meta( $user_id, 'user_fullname', $_POST['user_fullname']);//ФИО
    update_user_meta($user_id , 'nickname' , $_POST['user_login']);//отображаемый никнейм
    wp_set_password($_POST['passwordVerify'] , $user_id);//устанавливает пароль
}