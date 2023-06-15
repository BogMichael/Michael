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
define( 'DB_NAME', 'bogmih2o_safari' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'bogmih2o_safari' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '&aEffL6K' );

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
define( 'AUTH_KEY',         'Oi8BBI}5=?!E I&zE:7[MCY+[I]ArP^c$3pUN9= *YLFG9;>0]>%51e|HV5%l18<' );
define( 'SECURE_AUTH_KEY',  'jVjfJPV38M-+X[~:-NK419rp& B`}g)^HC^ES2~dk/:{4|[s$;PByNpuDiZTsCAd' );
define( 'LOGGED_IN_KEY',    'zg0bRy_z5k1lQ{gr;d%mvF~m`1#.&lyDt)*u(8u?{Ul=U]fEroZHc)n?a<:Cogt@' );
define( 'NONCE_KEY',        'yyqM(`-M;%JrYF6EE[!Q<l%%JK/qQXVqH!#BQMi~T|)lZW/#lehB:BtkGf ^}_Fi' );
define( 'AUTH_SALT',        '&Pr[5]9X[RM?]*qa[L~<V*f3,ETxP:GC|TO!Vd?ShXZPAOk9quO<V_MC~nlqS*<]' );
define( 'SECURE_AUTH_SALT', 'I,gIPh 49r=7t)EgtY-<1$y,K5Q#GGP{Uc!I,-{Llj|`(c&F`>U|KWrD/kg9H`gb' );
define( 'LOGGED_IN_SALT',   '&=Q-}*u=n-pQGSNXW6^U+tblQz:tIDXUW9kPgUGe4c+/-?:SAv0:l.pH9|$Fhri1' );
define( 'NONCE_SALT',       'n=k/2O~%)o!*@v|{[Qm)imP=j7pz!pGn4U=$@_`qu[$;|pEDu4e !k$@zxfS]T*v' );

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
