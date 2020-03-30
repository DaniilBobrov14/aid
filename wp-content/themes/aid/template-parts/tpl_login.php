<?php
/**Template Name: Авторизация
Template Post Type: page
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

    <div id="content" class="site-content">
        <section style="background-image: url('<?php echo wp_get_attachment_url(18); ?>')" class="user-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form name="loginform" action="<?php bloginfo('url') ?>/wp-login.php" method="post">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header align-items-center">
                                        <div class="icon-left-circle"></div>
                                        <a href="#" class="modal-title text-primary">Регистрация</a>
                                    </div>
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label name="log" for="formGroupExampleInput">Имя пользователя или email</label>
                                                <input id="user_login" type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label name="pwd" for="formGroupExampleInput2">Пароль</label>
                                                <input type="password" class="form-control" id="user_pass" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <input id="rememberme" name="rememberme" class="checkbox" type="checkbox" value="forever">
                                                <label class="label-text" for="checkbox">запомнить меня</label>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn button-login" name="wp-submit" id="wp-submit" value="Войти" />
                                        <input type="hidden" name="redirect_to" value="<?php bloginfo('url')?>" />
                                        <input type="hidden" name="testcookie" value="1" />
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

</body>
</html>