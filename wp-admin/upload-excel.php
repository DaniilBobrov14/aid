<?php

$currentYear = date('Y');

$currentMonth = date('m');

if (isset($_POST['excel_file_upload'])) {

    $uploadPath = __DIR__ . "/../wp-content/uploads/$currentYear/$currentMonth";

    $files = $_FILES;

    $done_files = array();

    foreach ($files as $file) {

        $file_name = $file['name'];

        if (move_uploaded_file($file['tmp_name'], "$uploadPath/$file_name")) {

            $done_files[] = realpath("$uploadPath/$file_name");

        }

    }

    $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');

//    $filePath = "$uploadPath/$file_name";
//
//    $fileType = wp_check_filetype(basename($filePath) , null);
//
//    var_dump($fileType);
//
//    $wp_upload_dir = wp_upload_dir();
//
//    $attachment = array (
//
//        'guid' => $wp_upload_dir['url'] . '/' . basename($filePath),
//        'post_mime_type' => $fileType['type'],
//        'post_title' => preg_replace('/\.[^.]+$/', '', basename( $filePath )),
//        'post_content' => '',
//        'post_status' => 'inherit'
//
//    );
//
//    $attach_id = wp_insert_attachment($attachment , $filePath);
//
//    require_once( ABSPATH . 'wp-admin/includes/file.php' );
//
//    $attach_data = wp_generate_attachment_metadata($attach_id , $filePath);
//
//    wp_update_attachment_metadata($attach_id , $attach_data);

    die( json_encode( $data ) );

}