<?php get_header(); ?>
<?php
global $post;
$post = get_post();
$titlePost = $post->post_title;
$contentPost = $post->post_content;
$authorIDPost = $post->post_author;
?>

<section class="territory-scheme">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $contentPost; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
