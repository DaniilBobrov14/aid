<?php

/**
 * Upload excel file to wordpress directory and registration on mysql
 *
 */

/** Load WordPress Bootstrap */
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

/** Load Composer */

require_once ($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

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

//    die( json_encode( $data ) );

    /** Прочтение данных из Excel файла */

    $inputFileType = 'Xlsx';
    $inputFileName = $filePath;
    $sheetname = 'Data Sheet #1';

    /** Фильтр для прочтения строк в Excel */

    class ReadFiler implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {

        public function readCell($column, $row, $worksheetName = '')
        {
            // TODO: Implement readCell() method.

            if ($row >= 2) {

                //чтобы задать фильтр по колонне нужно прописать условие in_array($column, range('A' , 'A')) в if

                return true ;

            }

            return false ;
        }

    }

    $readFilter = new ReadFiler();

    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

    $reader->setReadFilter($readFilter);

    $spreadSheet = $reader->load($inputFileName);

    $dataExcel = $spreadSheet->getActiveSheet()->toArray(); //данные из excel файла разбитые в массиве

    foreach ($dataExcel as $row) {

        $login = $row[0];

        $fullName = $row[1];

        $email = $row[2];

        $password = $row[3];

        $user_qr_key_login = get_user_qr_key_login(32); //создание qr ключа для авторизации

        $qr_key_login_active = 'false' ; //значение активации qr кода по умолчанию

        if ($login != NULL or $fullName != NULL or $email != NULL or $password != NULL or $fullName != NULL) {

            $user_id = wp_create_user($login , $password, $email); //создается юзер

            $user_qr_key_login_link = site_url() . '/?user_qr_key_login=' . $user_qr_key_login . '&user_id' . $user_id  ; //ссылка по которой пользователи могут переходить для активации

            if (is_wp_error($user_id) ) {

                echo $user_id->get_error_message();
            }

            else {

                ##После успешной регистрации обновляются мета данные юзера

                update_user_meta( $user_id, 'user_fullname', $fullName);//ФИО

                update_user_meta($user_id , 'nickname' , $login);//Никнейм или логин

                update_user_meta($user_id , 'qr_key_login' , $user_qr_key_login);

                update_user_meta($user_id , 'qr_key_login_link' , $user_qr_key_login_link);

                update_user_meta($user_id , 'qr_key_login_active' , $qr_key_login_active);

            }

        }

    }

}