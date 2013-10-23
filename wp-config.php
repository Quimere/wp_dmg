<?php
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
define('DB_NAME', 'WPdmg');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '?$,f>uJ1BPN3<kzY%9y*[9-,zEB3YK}P1|3@5B_<sURWz$w:+yv-*|^e:[XYS&bc'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '{@]i;~BA[NRu:Pyc#wCE6K?m9JmJMljg^X-M#+ey48W.3t8y<C`Y9CnNj^W+kmW;'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'cnemKAs:D7Edp%0&V[H!N3*|,JoKN7ctD1aBH9WPZe5[p/Uhm90^7/?k=0aS+MQl'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '&+~1K~aQROd=kzc({+#EgR}6L|;;`$:-fA9s|DLvz3WXgJ+bv!R}i|+>~%-kuDN-'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'j|J|-h#^=$E0oe$r])eY?}Q-+X|?z4KP?JO=lZTl!-<C fy?WI.<n_8LL:--R;j-'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'Ki<:4<qvg!1+BT9Y(C7|3!r&zN2Fq`?,H1o3KQuc ,$I/+(,i#5|hq5yS~3H`ft*'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'B#F*@mw?/evhcPMJhI^iSKp#7xpu0l+y~Yw+t-@LD%8Dc1327hZ53^3AP79Y}]bW'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '`OJ2B0~J+[Xix;C-{kcnS+:-_F|8.TKS%@+nsi]D~*11}&!;o/=VMtj}Xwy/HL^Y'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dmgwp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

