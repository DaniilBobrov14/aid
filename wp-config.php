<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'aid' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rz_^J~aoa2BvRN0!Kahwy|1{MV[^X{qZ`m+? (7bSq-nurZ/c+K2m14}HqFvSiE|' );
define( 'SECURE_AUTH_KEY',  'Q5ttS%/Q$?$r:le{6, @NnV[1RfAhpe,fAI4FR&Qje5KcW>R~`/u8@:zm9bW}pIn' );
define( 'LOGGED_IN_KEY',    '%4k[Yksm27t` +r~wse$}xQWpih;7L7{?e-q4bgTilts5SOk)+#beWd]@!;=e22<' );
define( 'NONCE_KEY',        '=I0HS}SS<?zHfgdnd{7,|&W.kc7d1~2|z1QyI@Okop]{c!L9i:$W:3Onk?XM`U&P' );
define( 'AUTH_SALT',        'lC1O)O$}A?(/u6F#T8$#u2^:4 F>X/c}uXi9;Yx}!2E~gy[:QwpuD[JYLDd<0?!@' );
define( 'SECURE_AUTH_SALT', 'B^</ZPWkEq&nv#}hikQNV.%D-6-09~/@%9646s%0)(aut17h]8Bk=6;8M-&%I~&*' );
define( 'LOGGED_IN_SALT',   'km(Pbex$GiYQ^K+ogd%mm;uyY2mL7f}5V[;u:0$Q89^m!_A/.yJ;B7}(ZY]YvqEm' );
define( 'NONCE_SALT',       ')*;U}@no7j<ycnNfPGqkTq}u12Z:tlc*^I7gw<XHJ*I1OufG9n$mOGh<S%t};&=X' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
