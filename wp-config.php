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
define( 'DB_NAME', 'shop_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kUUKL?u,%gh=M=LT<~jJ[VE1JMv/(1OpZqApTu7]OQk.}@0kAl?2hw^S0nUHqoxS' );
define( 'SECURE_AUTH_KEY',  '#|E2V!i _@[7 @-Ik7!<yT]3ezJ>huZhJp-Q6hdD(+^M ?<DEV*h>8SS78m z]W(' );
define( 'LOGGED_IN_KEY',    'h#!aBs9_H,,C0&?PK^$gCcn,TRXpiCD*VcZ,.nI4IY0m=+_IIIeGkJO1%qDDF{S ' );
define( 'NONCE_KEY',        'xq9HCwe;m^$C@=BP4d4BoiG! qH<K g&*D)Vc<+?kyh#pZ&<TkcmDk<cf_C-SV?N' );
define( 'AUTH_SALT',        '=o#Ir$o5=V%#yPIhij+OcYZDv@i;41|Pcm9(`RvT#xB{T3(Dt7Q6ygml6x%t~uKi' );
define( 'SECURE_AUTH_SALT', '1&q[/{um+!NrE0zQr2&S _?b29Wol8qN}o9b1]UYM*<EY)Ge4Hso0=|a+sT!gk42' );
define( 'LOGGED_IN_SALT',   ' QI5YosRLiok!gJ(v[r[)%#|r_j1D&BdO$vVjWUHZ)dgL%EqyYp7$1B4u!f<wJ=t' );
define( 'NONCE_SALT',       'CkCq2E|Wek4#3-BkTdx -~_Jy%N~22yv7)<@P-lmP[wa sKRLz21Nu_qGmKLCW#*' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
