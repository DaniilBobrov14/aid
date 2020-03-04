<?php get_header(); ?>

<section class="content-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-slick-wrapper">
                    <img class="slider-slick-img" src="/wp-content/themes/aid/assets/img/slider-images/CF000047.jpg" alt="">
                    <img class="slider-slick-img" src="/wp-content/themes/aid/assets/img/slider-images/EP8A5360.JPG" alt="">
                    <img class="slider-slick-img" src="/wp-content/themes/aid/assets/img/slider-images/EP8A5780.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!--content-slider -->
<section class="upcoming-events">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center">
                <a class="link-title-block" href="">
                    <h2 class="title-block">
                        Ближайшие Мероприятия
                    </h2>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr class="stroke-hr">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-deck">
                    <?php
                    global $post;
                    $posts = get_posts(array(

                        'category' => 2,
                    ));
                    foreach ($posts as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <a class="card-img-top" href="<?php the_permalink(); ?>">
                                    <img class="card-img-top" src='<?php the_post_thumbnail_url(); ?>'>
                                </a>
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="card-footer">
                                <a href="<?php the_permalink(); ?>" class="btn btn-red">Перейти к мероприятию</a>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="members-events">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="users-count-block">
                    <div class="icon-users"></div>
                    <span class="members-count">100+</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <span class="members-count-text">количество участников</span>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>