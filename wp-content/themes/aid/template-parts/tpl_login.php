<?php
/**Template Name: Авторизация
Template Post Type: page
 */
if (is_user_logged_in()) {

    wp_redirect(home_url());
    die;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<?php
$args = array (

        'echo' => true,
        'redirect' => site_url(),
        'form_id' => 'loginform',
        'label_username' => __('Username'),
        'label_password' => __('Password'),
        'label_remember' => __('Remember Me'),
        'label_log_in' => __('Log In'),
        'id_username' => 'user_login',
        'id_password' => 'user_pass',
        'id_remember' => 'rememberme',
        'id_submit' => 'wp-submit',
        'remember' => true,
        'value_username' => NULL,
        'value_remember' => false

);
?>

<?php
if (! is_user_logged_in()) {

?>
<body <?php body_class(); ?>>
<div id="page" class="site">

    <div id="content" class="site-content">
        <section style="background-image: url('<?php echo wp_get_attachment_url(18); ?>')" class="user-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="loginform" name="loginform" action="<?php bloginfo('url') ?>/wp-login.php" method="post">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header align-items-center">
                                        <a href="<?php echo $_COOKIE['prevUrl']; ?>">
                                            <div class="icon-left-circle"></div>
                                        </a>
                                        <a href="#" class="modal-title text-primary">Регистрация</a>
                                    </div>
                                    <div class="modal-body">
                                        <?php wp_login_form($args); ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer-dark bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                <span class="copyright-footer text-light">
                    © ЭРА 2020
                </span>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

    <?php get_footer(); ?>


<?php }
?>