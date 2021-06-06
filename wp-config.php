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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'electronics' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '71MYPtdlgUA@F_t@R>+WIVQRmvQ6J2j{0%ce@[#O>}H]n`%0i|vMcZy[qv#uk.:c' );
define( 'SECURE_AUTH_KEY',  '|)RSFuH?QJ^_=FI^cs@t!L8VDVi]w# #!-^?SW+m))HX;LHs`)|jhW6Nu1axMaDO' );
define( 'LOGGED_IN_KEY',    ']|tvzis;[3&3&{!C_5U07gHa5#Lx _YagrFA2,|<5Bbqr-vo!]s5S22(ALZP557>' );
define( 'NONCE_KEY',        '!CO+WI;;Y~bHM24~V^t=*4v_ic_IBlnTo%=4RNRe5679UC5VBTvLb)g5:Plo #9G' );
define( 'AUTH_SALT',        '-%@8A$#mW5SvJ,!P{gGO0Ht.ng57JXiK$-<(BP.(`W[Waq<M;R[WQS0|1d/^)7Ym' );
define( 'SECURE_AUTH_SALT', '-p+&frflHT?tl*`SB*|%>GfNT`Y9FXuR[+mxK]xD./=TH`Xa*#7er0Q._%7eb,9Z' );
define( 'LOGGED_IN_SALT',   '9:}?{~Ifq k, $iS;*y[]oaAxnJv__^k_`f*6WD(y0/;93c^n#xw.7W}..?>aap=' );
define( 'NONCE_SALT',       'CPF8xD;4[e#fD2FIA2^s=nL&KvDjmVG/>R6Hep^m|rV1+$=k[THb;_xMTSziwF;D' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
