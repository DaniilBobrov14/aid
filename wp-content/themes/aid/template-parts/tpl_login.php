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
                        <?php
                        if (! isset($_GET['action']) or $_GET['action'] !== 'register')
                        {
                           ?>
                            <form id="loginform" name="loginform" action="<?php bloginfo('url') ?>/wp-login.php" method="post">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header align-items-center">
                                            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                                                <div class="icon-left-circle"></div>
                                            </a>
                                            <a href="<?php echo site_url('/login?action=register') ?>" class="modal-title text-primary registration-link">Регистрация</a>
                                        </div>
                                        <div class="modal-body">
                                            <?php wp_login_form($args); ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                        }
                        else
                            {
                             ?>
                                <form id="registerform" action="<?php echo site_url('wp-login.php?action=register'); ?>" method="post">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header align-items-center">
                                                <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                                                    <div class="icon-left-circle"></div>
                                                </a>
                                                <a href="<?php echo site_url('/login'); ?>" class="modal-title text-primary login-link">Авторизоваться</a>
                                            </div>
                                            <div class="modal-body">
                                                <p class="registration-username">
                                                    <label for="user_login">Имя пользователя</label>
                                                    <input type="text" name="user_login" id="user_login" class="input" value="" size="20" style="" placeholder="Придумайте имя пользователя">
                                                    <span hidden class="text-danger user_login_empty">Имя пользователя не введено</span>
                                                </p>
                                                <p class="registration-fullname">
                                                    <label for="user_fullname">ФИО</label>
                                                    <input type="text" name="user_fullname" id="user_fullname" class="input" value="" size="20" style="" placeholder="Иванов Иван Иванович">
                                                    <span hidden class="text-danger user_fullname_empty">ФИО не введено</span>
                                                </p>
                                                <p class="registration-email">
                                                    <label for="user_email">E-mail</label>
                                                    <input type="email" name="user_email" id="user_email" class="input" value="" size="25" placeholder="Введите адрес электронной почты">
                                                    <span hidden class="text-danger user_email_empty">Электронная почта не введена</span>
                                                </p>
                                                <input type="hidden" name="redirect_to" value="<?php echo site_url(); ?>">
                                                <p class="registration-password">
                                                    <label for="user_password">Пароль</label>
                                                    <input type="password" name="user_password" id="user_password" class="input" value="" size="25" placeholder="Придумайте пароль">
                                                    <span hidden class="text-danger user_password_empty">Пароль не введен</span>
                                                </p>
                                                <p class="registration-passwordVerify">
                                                    <label for="user_passwordVerify">Подтвердите пароль</label>
                                                    <input type="password" name="user_passwordVerify" id="user_passwordVerify" class="input" value="" size="25" placeholder="Подтвердите пароль">
                                                    <span hidden class="text-danger user_passwordVerify_empty">Пароль не подтвержден</span>
                                                </p>
                                                <p id="reg_passmail" class="text-muted">Подтверждение регистрации будет отправлено на ваш e-mail.</p>
                                                <p class="submit">
                                                    <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Зарегистрироваться">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <?php
                            }
                        ?>
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