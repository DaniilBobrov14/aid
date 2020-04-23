<?php

/**
 * Upload excel file to wordpress directory and registration on mysql
 *
 */

/** Load WordPress Bootstrap */
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

$currentYear = date('Y');

$currentMonth = date('m');

if (isset($_POST['excel_file_upload'])) {

    $uploadPath = __DIR__ . "/../wp-content/uploads/$currentYear/$currentMonth"; //загрузка файла по текущему году и месяцу

    $files = $_FILES;

    $done_files = array();

    foreach ($files as $file) {

        $file_name = $file['name'];

        if (move_uploaded_file($file['tmp_name'], "$uploadPath/$file_name")) {

            $done_files[] = realpath("$uploadPath/$file_name");

        }

    }

    $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');

    $filePath = "$uploadPath/$file_name"; //конечный путь до загруженного файла

    $fileType = wp_check_filetype($filePath , null); //проверка типа файла

    $wp_upload_dir = wp_upload_dir();

    /** Добавление загруженного файла в mysql и в медиатеку wordpress */

    $attachment = array (

        'guid' => $wp_upload_dir['url'] . '/' . basename($filePath),
        'post_mime_type' => $fileType['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', basename( $filePath )),
        'post_content' => '',
        'post_status' => 'inherit'

    );

    $attach_id = wp_insert_attachment($attachment , $filePath); //функция добавления файла в медиатеку

    require_once( ABSPATH . 'wp-admin/includes/image.php' );

    $attach_data = wp_generate_attachment_metadata($attach_id , $filePath); //генерация метаданных в mysql

    wp_update_attachment_metadata($attach_id , $attach_data); //обновление метаданных в mysql

    die( json_encode( $data ) );

}