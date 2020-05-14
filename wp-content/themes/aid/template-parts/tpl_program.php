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
                <!-- table template -->
                <table class="table table-striped table-bordered table-program">
                    <tbody>
                    <tr class="table-row">
                        <td class="date-cell">
                            13 мая
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            10:00 - 12:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            12:00 - 13:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            13:00 - 15:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="date-cell">
                            14 мая
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            10:00 - 12:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            12:00 - 13:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            13:00 - 15:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="date-cell">
                            15 мая
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            10:00 - 12:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            12:00 - 13:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="time-cell">
                            13:00 - 15:00
                        </td>
                        <td class="content-cell">
                            какое-то событие
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
