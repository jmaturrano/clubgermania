
<?php
$abspath = str_replace('\clubgermania', '\wp-config', ABSPATH);
include($abspath.'/clubgermania.php');
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', $db_name);

/** Tu nombre de usuario de MySQL */
define('DB_USER', $db_user);

/** Tu contraseña de MySQL */
define('DB_PASSWORD',$db_password);

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', $db_host);

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '6-!lQ!/q`#l`_O[<83Q]cSU2eZxw~([JbOE+R<zkdLqYDgWk>)[apmMQAW/D[|Y-');
define('SECURE_AUTH_KEY', ')On`zY-A#EpXU93`{Nl{%en2PuFgl.~+KeEcqTL6}AuE03%8]&gTps<RD3E{v#hM');
define('LOGGED_IN_KEY', 'OL.z9Pt/}_;83S|eHv{1~&oe7qEUh9fvpj,m[]q(IhKTEMvQ]Pn0omBPZvxUfwJ6');
define('NONCE_KEY', 'T<O;pKa<EW4#2HyG&]TK0eDsI,,9j!-7/i17JLfEN]k9C@j#G(HjTx(0HZ6+gZN:');
define('AUTH_SALT', 'qWDpUYY|*FWY/(X0STghl,NfshzK.L$yt_Vyx@nz0 xa(h:==}O@4E]z7*}Mgb8)');
define('SECURE_AUTH_SALT', 'vPeHrW_Qxb`=iQN8ag}mf<qV6u`pN9Xy6K{yxQ4@>w9`/(EFh[4wsM58!bUG3N1=');
define('LOGGED_IN_SALT', 'q4iwyv?b|M2Lxvkh>Yu6J7E;M{6u(S`PaQ4Iq0R3SL5tFldr$g`0$cA^*.9,fUD[');
define('NONCE_SALT', 'UYhfDQTL2?dA7]E|q{f>slRi^s6Z2+,{Rv6?;76v#Kw-e;_C+}sUwrc^SEMfv52U');

/**#@-*/

/** Desactivar las actualizaciones automáticas **/
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
/** Desactivar el editor de temas y plugins **/
define('DISALLOW_FILE_EDIT', true);
/** Desactivar la instalación de temas y plugins **/
//define('DISALLOW_FILE_MODS', true);
/** No usar las versiones minificadas **/
define('CONCATENATE_SCRIPTS', false);

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

