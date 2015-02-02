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
define('DB_NAME', 'tanguyscvztanguy');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'tanguyscvztanguy');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Konoha720');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'tanguyscvztanguy.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ft^t<U>rT9]*]&yKJ31RBs..<7pn1cZU _fS<j)o*Jj>)IQ<|No&arQ=VjOSo>CJ');
define('SECURE_AUTH_KEY',  'Q?5k4L+&T5GmP(zsIqFJZ9jz7}96cwBF9jrs3Y[}N^(8_zYdL4_8XnwY%en6;|>&');
define('LOGGED_IN_KEY',    'K_RBU{8nhU}eJ/;a_.X9|cMeQRIw_Nh*:Xz!|pNTjnfgbK8?4)r!,s)(C1>sgr_g');
define('NONCE_KEY',        'tf_xprjn%J,Qq}5cO|g$1`QH8}k]7X(h<5HiuG7^&z{+9{$6|rhuejnNzh<K]sOf');
define('AUTH_SALT',        'NLakF39B3en8D(Ftl_5>}AC@YuTnzJ6n%b#yENUH_?oP-ki:vRB&K%WEgj(:%D.A');
define('SECURE_AUTH_SALT', 'MD$s+Ntq0#e^0KLRU6*(eAn9sEXWEi&Zh yy6JUAJ<FBY?x@N;B5fAK#uoC-nH=K');
define('LOGGED_IN_SALT',   '@wH8URKBVsT,i= )?>N-t7]8D)UKq=e7xm}(_3oBWhuX+jEbhM<DRlC72Rpn^Y{P');
define('NONCE_SALT',       '`1bX+bK2|s$8gaL,VTC8+cV4#n[|L&J?Q-^QK4H%/YpRT3J;`9q$}{$tD-%mqDM]');
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