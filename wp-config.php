<?php

/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'wordpress-acf' );

/** Databasens användarnamn */
define( 'DB_USER', 'root' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'root' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hI#[?s.{`wbQRCI21o?y A+BB:JH2.W)-B1S;F !2wE;3*7 <&.D*VH~ao[uUtsS' );
define( 'SECURE_AUTH_KEY',  '&}a?QMCJ9Y%ql/Wg1|/]ilLnbbIn}5?Z{)9eZfE.g^Sohg]gJeueY%Ao(;DP7TuF' );
define( 'LOGGED_IN_KEY',    'gzjFtxK_lVyb|^Smt*?dO]oZo}+MiIK`(+.Fj,qHV6R4Hz+@G(BGn00/ms03Rm5e' );
define( 'NONCE_KEY',        '`Y,,[` `N^izgiT&6s.;Lzp`9*dVqSkQ&X0Td?A51%Tt=Kc{#d(P.l>a!;II)<jx' );
define( 'AUTH_SALT',        'I4iXsU1zB|(HJpEB9nIYuwR);{Lx_-X,H{ab5<je4T`wE{rb.i2@xkd&5}].cu.V' );
define( 'SECURE_AUTH_SALT', '~4/dEM>:BA@B;GUKhxjKss`3TOVwW&%uxtdvjT>lHYwWWg<jPwTIBZvdpA:h8zp>' );
define( 'LOGGED_IN_SALT',   'P>Y*@,gzQ?mB)iW.+-g{N?i4~B+Cv&J7#0!?Yc3!v~|]&DGzgVFJ0-BDpuNjWn+{' );
define( 'NONCE_SALT',       'TgH+WxpzI4>o]._(dG|4nvae}%/y bBXj*;pH(QRb~sd91oE`&6$66p_MZV^4vio' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if (!defined('ABSPATH'))
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');
