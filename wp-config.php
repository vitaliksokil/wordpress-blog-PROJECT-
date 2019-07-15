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
define( 'DB_NAME', 'tida' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'tida' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Vitaliksokil2018' );

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
define( 'AUTH_KEY',         '{|@gMnS-,[HnhalS=#>aYQV(t;w$P:j`|g{h<|^;sX)l!^~`*d=:!:(zBtxm$eKp' );
define( 'SECURE_AUTH_KEY',  'NDe&NkSTYAlI7uJ3qY}Wt?Kp:0[cy%VlzGaR@AK@Px.dBH(].l:D*PsPZZUcZe4m' );
define( 'LOGGED_IN_KEY',    'q]+z>w &Nn&>@-z*CCuUn)1wq.}?b_YW8*VCz4U5ffjoblxj@UY01.>rAg_*3m$[' );
define( 'NONCE_KEY',        'WS$C:NyOdjotJwO<9>^B_}:XH^9_Lr`Z*R4pvx<dd+7&^J4N lm2@]85]&s>Jguz' );
define( 'AUTH_SALT',        'x$kk~I8W|`Q|>3RIFuWc/;!ji=X#y8=PC*eeTxgPN_X>y.TKO(FSkvz2#H/0|k?`' );
define( 'SECURE_AUTH_SALT', '1#B)j65Dob:PR#8{[y[p_K=7X-8m`>6o=.S-ppW_q^_)b1RNg:4I2{F+BHk|J$`f' );
define( 'LOGGED_IN_SALT',   't]zQ3@C]dA7^B[idKBsrx:IGaXy-]C7g&A69,BmJFg88NKp q/+|L;w}E5)VprF]' );
define( 'NONCE_SALT',       'jsAAWm9109I@Akb}(`tcNl(>p |Xt!17bghl)c~Wb#.+2%9W)@)8f8P:OkmLQ{yn' );

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
//define( 'WP_DEBUG', false );
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
