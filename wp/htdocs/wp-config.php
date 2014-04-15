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
define('DB_NAME', 'db_gmounang');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'coucou88');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'NSUFoLePj7<z#EsEe+:y,$lR|?l2Jy6xGr#Nm:%4s-~(&5 +?4|J#)-u-J;B 2.N');
define('SECURE_AUTH_KEY',  '{x3^3*-lQy8F$j5n-Vz9)Q(: fIYp6mnV_o]8in!R9<5x|kC{#eEstO?x~C7F/P%');
define('LOGGED_IN_KEY',    'wI4(7F@#SW7zC`~`+e=+KS(?~GKh5r(m8!&{+~L|z(oBm5BY]cIky-cJ<%Y(flgW');
define('NONCE_KEY',        'Hlj9n:X-6@m+3OcQVGiX6[_QD*Pn`|dF]~nzRrbUZ!}Jr><uA<ec+ZuZ#3$E}M?v');
define('AUTH_SALT',        'cy(+:8lW!!||D3[A|o?k`}ehmOb-{`Q;eaGHL<8.os%QLw|u+2|+RLXE-Ai?<+g)');
define('SECURE_AUTH_SALT', ',+*kO=z`@H_J-`]+nqzLN`ue|gR{HDk-#VD!88~xE0ec2+[3/.}>c,Y=:+zpWlo0');
define('LOGGED_IN_SALT',   ')}tfJYJm?^u|eC0}IZ?UQ0>@R&~Ekw+|}|N5GCL<vqR/*Kb6Nq{~H*Vg(0K__qr/');
define('NONCE_SALT',       ',Xbx+.Tal{CMFL(pi=Ur=eze+aAMF4pZuP-l0XVbqR[]k|zdL,OS^Fb=*pgv8FU+');
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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