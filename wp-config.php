<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'hotelchik' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'romstar744' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'romano64' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X!EHBpn{2R4Q>tL<jp8_d}U=t gQN:[oH,Di0`4ptkM^a`YST/;(N-,#&p3YVI!2' );
define( 'SECURE_AUTH_KEY',  '2Bhb~gDT9-|IN,OAX&1_c;Z[K^_i/6Cm?M@oR,;a,D}H=~dqikT~q!gnhw_NCa/V' );
define( 'LOGGED_IN_KEY',    'YGh;FAGQ>dVwO[<[g`9$q8u2QDqwxAZ_HPnO!35zFd|U[5:**@LhZRNm(|SfUw!=' );
define( 'NONCE_KEY',        '|i-f:W@9u+iW*Z8ue.2q+Z]#+$oPHZSXLcxg2AskaM|T+H==S$Kx<+G83`BO,Eo8' );
define( 'AUTH_SALT',        '7)L@N|yWMluEt%y3_+IkdcvB_S]LGkQO iLW;]_rfyhEm%&ND-fK)u<ap@|qP@PP' );
define( 'SECURE_AUTH_SALT', '=`VdQP}`xQ6J!G_5)Rh!r~>TJE_vyb:`OE)&Pw]dj/BS<5E4)La@4BHM<X.HGZ:<' );
define( 'LOGGED_IN_SALT',   '0/n)Nuh[gNwrPUi9L6S/j.b3#]g4KxH7zi6Bxeco24_dxSC})g3M&2Rb|uc])X0`' );
define( 'NONCE_SALT',       '$:~Ef^s;LX{IWa6[^hnOjujH,aHLZev7sUqwPjIlEH#WeXZbrT:1Wx9/rY=61E #' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
