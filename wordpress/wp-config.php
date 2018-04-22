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
define('DB_NAME', 'shop');

/** Имя пользователя MySQL */
define('DB_USER', 'shop');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'kubemeke18');

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
define('AUTH_KEY',         'Jdom/1b 0@N.VUR&qHtn.@0[ nHLHrX9ZbN)W}E(i7Mt (phsJ ?1nsSCFq8EZu{');
define('SECURE_AUTH_KEY',  'uRl*1:de,/_B1?Kc=n{za|M^Q]@ik>GRh(Lilr_t}le^m@3mcW%HrhLI2_kqVgKS');
define('LOGGED_IN_KEY',    ',?ho#.-tYOpvh~J`lWPQ>iLwW-oO_~d1`ib44Q{cX0=:pF+azcAd[JQ#zC~Nn<Hc');
define('NONCE_KEY',        '~}P~h]yCW53{mdZq*CH`k>+fR7fN`(X5z#P[MlW~R{Ns=&Vtlt(PA%Dd]o{|`]ZJ');
define('AUTH_SALT',        '[(Fu&tk<)o;0tk&(a4s5)b&;3avTXI9EeO*k%mPjvRyKd]Bj5lY324|P8K{{By(D');
define('SECURE_AUTH_SALT', 'J%/)gy]IZkvzPfL>+!_Z/e)/DQL=px;{BrWMHi*y(:24t4Gw/4MlS0h`:5(ahO..');
define('LOGGED_IN_SALT',   'N`<+Zg;>,I$W8/#{_OO[e+2lB>GZk8o!Y?@ {=K+?auM-W+$Q/SQtN/__$Pq7mj8');
define('NONCE_SALT',       'Bn@ofq?sjN:MK~JI3u^}/t/#iQW<Re {d|K.bkFT^@d5OTHr5$ldpY`]D?/J!$.Z');

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
