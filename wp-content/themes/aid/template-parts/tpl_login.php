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
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-center">
                                    <div class="icon-left-circle"></div>
                                    <a href="#" class="modal-title text-primary">Регистрация</a>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Имя пользователя или email</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Пароль</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
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