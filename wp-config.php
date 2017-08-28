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
define('DB_NAME', 'wp-blog1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't/;#GtY|H#Tkx7rB A8C#!_$$S7ZtsfIP4l*v&&}p>R$2+(P:s )Q3>v]qhL/YGI');
define('SECURE_AUTH_KEY',  'Pq5>=J;: Zm^]m(9bI.i-T,3D)/I;ZOxUn_[0W!K$DfL_3f;*Ly5Sj}b@gciCLIn');
define('LOGGED_IN_KEY',    ' VR4w^#U8/oj9+*P1d.?Q}/_mmK;D%{G_l_R<kGMMCYoo`8EC<&-1+sG6E4^6hAB');
define('NONCE_KEY',        'Zuud|80Po2I49PwsG21;<v>9kn^JLL9|{eP~K`C9&IDj8kH[jn>9($l6Mm_Ie0D`');
define('AUTH_SALT',        'H-4uo=4tK7G3Xk-NqNgx(HmGL5sDQ&i1M5*]RvS=nWs;;ipO`wJ@x`@tI:8e c%0');
define('SECURE_AUTH_SALT', 'loz59# Y::d(EAr@pF]Hn!*eH=Tv9jJ 8*YY5_TB45[h]BNm-ht6O}bHQ!wiD[D%');
define('LOGGED_IN_SALT',   ',4EG4NPuf PT[tFd@QPS&|rG0yp=w1j{N8I$)Wz:I,@5k}P%~u.>O%|tfa9=LW#k');
define('NONCE_SALT',       'cr8[QZ;.`5u& GOhlQv*%Ix<<EJ*JX%30M@s3[8AgdJ<zBd-{`T;Yo].~g;>Bq_&');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
