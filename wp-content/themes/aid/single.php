<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aid
 */

get_header();
?>
<?php
global $post;
$post = get_post();
$titlePost = $post->post_title;
$contentPost = $post->post_content;
$authorPost = the_author();
$dateTimePost = $post->post_date;
$imgPost = get_the_post_thumbnail();
?>


<section class="single-post-aid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="post-title">
                    <?php echo $titlePost; ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="author-post">
                    <?php var_dump($authorPost); ?>
                </p>
                <hr class="stroke-hr">
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>