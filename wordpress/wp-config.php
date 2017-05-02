<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Matt6288merc');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K:~:9Tw8#n785NxNtcVkigW[kc!!>WzI?aS@JH-wb@5B{)+c$_=Chih*Z6HgB_=9');
define('SECURE_AUTH_KEY',  '$bme/$E[<%@mK |[a;)@8Pv(pp45,|r!Q$b ?yH~Nhgth_Mo_Wv`WmKeu:0C~r9~');
define('LOGGED_IN_KEY',    '3uc:.NwC^4G|ly?88Z}q/T`e~vS#ok5B,$;B6 pXzreJLLms%J(CGl584n9J3]Tv');
define('NONCE_KEY',        'Xl}_T[4[$3J9[!d4MHJ}D^L$?YO[SsMc[*EQA:]2l+:3[)/#-rv--(XGUyD }Xbz');
define('AUTH_SALT',        'B6-|YXx%x>o<%EJ*,U$<~yiv]gj=Oy<,P/bEWH%g|[+;17+2PJ-^/9]PKF-pM+IF');
define('SECURE_AUTH_SALT', ':)?V~-JuE28jr)[3 eb0uC=2WpaJ|GxBon=7n]%EVk:[|m~EU.Sum,!!mQ |_@2d');
define('LOGGED_IN_SALT',   'YidtySU%*0sS,,]a^1i}EtKJV=zDSUbE-UO|-gjO}e&$.S|z`nhYMrVX|Eoieo#x');
define('NONCE_SALT',       ',-=vA>(r!s6>x0CE((t~aWu@rQbt)FY,}Fz%c2t4R~0ua)=A`o%!g$&VdL=ne:,N');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');