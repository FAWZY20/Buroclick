<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'woord' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rnd)P`6^>38p5L4 hdVOA%{S=5HXuAXG1&*w2ybj>NZ:!ByZ[Ted+On.MmK)GM[D' );
define( 'SECURE_AUTH_KEY',  '!qiK$baSFjErpu~cj=fLQ.@qr;4!{gt`q}VhN6Y6 XrW:ygoKXaOUkv~ezkjq;i)' );
define( 'LOGGED_IN_KEY',    'Qy=yMLu@VxT3=&:c^gws_aX{32[=%f!rj)3t1Ed[|wh]fa?$*hj(zeOm6}g_mBII' );
define( 'NONCE_KEY',        '{e28jXo{Z4Vy[):n|Ch2PT8PU%-gR>_`P>o%f$fFfy`=0PvDqQ=_3|5I$3_k6kCl' );
define( 'AUTH_SALT',        'LCwrCP,HV7tA{^{5UV&wS{}ShvJv)Rs>|wFUb%sCd>N^1f$Wk,D-hjmfW78$6;(;' );
define( 'SECURE_AUTH_SALT', 'RVOd:#rNWIdeEeZvC~ms:U$s$u2<[r%?sit).)E998,,wn!,Ay;cNAib_L3Uz8:8' );
define( 'LOGGED_IN_SALT',   '}m17^nZrRf}f;wl;3ZJR_*3{mOAs4_[$JbO?%D;6.a.it,{K>xUqXEd[L]ew&EGB' );
define( 'NONCE_SALT',       ')F@vaG`1of(4:F] e@v_fv+,ckSTsu3<wpA!D@B_aCFpdY`rcjZ>ON]I E%~#yos' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
