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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'easeaxd' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12151728zX' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         ',??-GI~ brr1<ey.Ks1z+t&TYA!<Ta^]`1=satY{-V_i+eN$ktKirN^F=nfc2{mG' );
define( 'SECURE_AUTH_KEY',  'O(v;z8E^tmD%XdlhEA~=h`F&^pXd-l:B4Hz};6S-IE+LL$?nq;L=Au22Dt>y:Yc8' );
define( 'LOGGED_IN_KEY',    ',);*&f&pHyWBKWKuR(A[_!Se;Ol`G&atoa~yzF7z)-?Yd<O^/1TTWbd1x;(SD5OO' );
define( 'NONCE_KEY',        'x{RlQ5/%aH.5 tH&0v>sOk^/y^jKtMmlco?DEFy?h nb[t[N$MND]Sd:<l:4bfl*' );
define( 'AUTH_SALT',        '8p83;CEZN1>C`?b<Paeic@?.!#J`/<m/~a!_=h`sa$<}-D@smAS[V:Y5sQ$B d7%' );
define( 'SECURE_AUTH_SALT', '45D 3l3Bq-7.raQc4}+%C3:.^6K:C,qx,hrHJBa%FQ37_v2^wU7ww^0sG/rNXsAE' );
define( 'LOGGED_IN_SALT',   'CQ:K2} ~da*b.BZpRM/zwBjVDqj>1uhE4_i7N;q9K}om&p+w4_pr]y*SU!n16Y#K' );
define( 'NONCE_SALT',       '&FL6!]O-$#IU$d3m%_Wky[bT]G,<_dp>9TKNcCxeYkf ;t`rTU^7i~u0WNpwPJ8d' );

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
