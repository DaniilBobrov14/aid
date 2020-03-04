<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aid
 */

get_header();
?>

<section class="upcoming-events-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center">
                <h2 class="title-block">
                    Все Ближайшие Мероприятия
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-deck">
                    <?php
                    global $post;
                    $posts = get_posts(array(
                            'category' => 2
                    ));
                    foreach ($posts as $post) {
                        setup_postdata($post);

                    ?>
                    <div class="card">
                        <a class="card-img-top" href="<?php the_permalink(); ?>">
                            <img class="card-img-top" src='<?php the_post_thumbnail_url(); ?>'>
                        </a>
                        <div class="card-body">
                            <a class="link-card-title" href="<?php the_permalink(); ?>">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                            </a>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <small class="text-muted">
                                    C
                                    <span class="event-start"> <? the_field('event_start')?></span>
                                    по
                                    <span class="event-end"> <?php the_field('event_end')?></span>
                                </small>
                            </p>
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
<?php get_footer(); ?>