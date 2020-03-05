<?php
/**
Template Name: Программа
Template Post Type: page
 */
get_header();
?>

<?php
global $post;
$post = get_post();
$titlePage = $post->post_title;
$contentPage = $post->post_content;
?>

<section class="program">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title">
                    <?php echo $titlePage; ?>
                </h1>
                <hr class="stroke-hr">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php echo $contentPage; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
