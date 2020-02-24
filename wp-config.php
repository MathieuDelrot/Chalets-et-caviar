<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chalets_et_caviar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9*@& +A1:v_Pk#2$J4 n,}}{7#3=8tr~/ T<W_3jt%E][kty;1A1MBA0*>)FNA/M' );
define( 'SECURE_AUTH_KEY',  '=9I^5%7rQ-kuNM`acN@,+gK,fI~R2%E[C!NIEG@,8pz/W&*gk}{uTH1CQ7dny_i@' );
define( 'LOGGED_IN_KEY',    'z%!5ee{d&/dUBu`l<_(bGK2gC]]lA)Vbk_x^F5l!czUdNEiR?;B*U8`npOIV#R]=' );
define( 'NONCE_KEY',        'U0 PV$S~TV`Vtwy}d_fBv>y%|Qy;GU5~R8<Lurt%GB8=D sW:N]4EoHBj(J/}5$e' );
define( 'AUTH_SALT',        'WZ|>>=052i.O%ZX*>S)x9#f]EXPlz%.< mn:x+;4lX(k7snMa-UII6bdd=I1k[XJ' );
define( 'SECURE_AUTH_SALT', 'Gq!^+X>///^emN(%mhCl>#&ha%+n2}FV(1yH1Qi%R`r6@sQ8/Yjk~@*.s`JqC90r' );
define( 'LOGGED_IN_SALT',   '2G^*~/ca- o:bKz3A7M0zt*V51%@[vaiC:4 2/vI2S,w}M7S9<gO>6!C=Wz2IGmm' );
define( 'NONCE_SALT',       'p]C=zX16B>~j>0 Xf>Y(N.8U_Jc((=#jiGwn,2[^X6!7J/H~l^=/L*qK)vKwVs_:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpCetC_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
