<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aid
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container">
		<div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <span class="copyright-footer">
                    © ЭРА 2020
                </span>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    jQuery(function ($) {

        if ($('.registration-link').hasClass('login-in-link')) {

            $.ajax({

                url : '<?php echo admin_url("admin-ajax.php") ?>',
                type : 'POST',
                data : {
                    action : 'prevUrl',
                    prevUrl : document.location.href
                },

            })

        }
    })
</script><!--script for getting previous url-->

<script>
    jQuery(function ($) {

        if ($('footer').hasClass('site-footer-dark')) {

            $('.site-footer').remove();

        }

    })
</script> <!--script for deleting light theme footer-->
</body>
</html>
