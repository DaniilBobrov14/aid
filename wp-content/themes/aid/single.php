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
$authorIDPost = $post->post_author;
$dateTimePost = get_the_date();
$imgPost = get_the_post_thumbnail_url();
?>


<section class="single-post-aid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="post-title">
                    <?php echo $titlePost; ?>
                </h1>
                <hr class="stroke-hr">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img class="preview-img-post img-fluid rounded" src="<?php echo $imgPost ?>" alt="">
                <hr class="stroke-hr">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 content-col">
                <?php echo $contentPost; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr class="stroke-hr">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-between">
                <p class="author-post">
                    <?php the_author_meta('display_name' , '2');  ?>
                </p>
                <p class="date-time-post">
                    Дата публикации: <?php echo $dateTimePost; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr class="stroke-hr">
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>