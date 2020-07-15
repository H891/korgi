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
define( 'DB_NAME', 'pr1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '0YYFnZrk&yw4{[*`RJ64(Jk0R%,jui4Pw:XP9vWq|C-U8,Rh%SbR=y/!AI^%Hi)!' );
define( 'SECURE_AUTH_KEY',  'dk`4,g$xvop&jv>qCMF{%16*nd1}J7b:m]qS3!c &DOReQ5;Ba)WC>ZDhL2BDwge' );
define( 'LOGGED_IN_KEY',    'X/_g0=WZ [D@@o4^^cy6j~pB $$;-}x)__bF<`nzTskfNareh<g%$=KccA5QcD:V' );
define( 'NONCE_KEY',        'lgCuIiE uu]aG>NpJtzvUqnE6=!j%O[o_^[=XVw29qRwbX=vQw4>EGiQ&gwo+fQn' );
define( 'AUTH_SALT',        '+%e%8G0|}Hz7])ayg1gGY#p ZHIoH]ce?NGhIgF[oQS|YGbU/|yWoQ>TX/$1(!Q`' );
define( 'SECURE_AUTH_SALT', 'v9d+x/1LC2ZO;Ggk~X]M{e7}wFq7OzuN0?0>K:6o6}jg)q$#_K]<8U_x[^YCP{dm' );
define( 'LOGGED_IN_SALT',   'j(W3Yyuy4` %VHuZ=?EXYt,U[zpIl7Om7p<ZjL(C6nK!x-Q<N;b&2(Wk0=h=[zE;' );
define( 'NONCE_SALT',       '5)%<Tk|9DUKVqngIzK>6fe)Q>]($~H8WF5d0@7$/3-,G;5g=N}CJMxNTR9 7}uIn' );

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
