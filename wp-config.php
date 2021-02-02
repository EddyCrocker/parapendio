<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'parapendio_db' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GzVvIF(BF^6$34}`fw0 TR4XL9W7VZT%~jA-7=Cg-GG~iq<~&)6Bdib[RKCvRI[Q' );
define( 'SECURE_AUTH_KEY',  '&.#f2{,:LQ)3@r4FCJPh@cOBrj=O8)Le7B4<`!Fh,FO[tVrvu3{vOgGS](BL5LS8' );
define( 'LOGGED_IN_KEY',    '9NZP4(t?Gc>i {>dr5=V`DzfXp]7KlR(%Zry3oLtJ1fw/t[HH30 sw?)R$|1z|j/' );
define( 'NONCE_KEY',        'Z}Z#&oW|^A!Gls:z~keF ?KEh]UAdx`v=jVqK/9nlU6e!M,_Cuv8(KKE.t81V5rY' );
define( 'AUTH_SALT',        '(vvzHe}o~!},2WDS6w2lU}lBf;<*6B _`Gow3HPM*[FJNs=|vf_jNQ#REnyE)i=<' );
define( 'SECURE_AUTH_SALT', 'VZ,]E_{YGG tj}0RI(1s)kkYrr,^a2]bY@u9UH$c+~6ky,D0+{ow*Q+:sSZpEB+(' );
define( 'LOGGED_IN_SALT',   '7f9YoJ-8<{4.KMJq^=7-%y[*I_-dh]e;_=DMq%`|)KIT{/A0m[=qk=~jD4#Oj?:>' );
define( 'NONCE_SALT',       'hud~j3c+/KuU(7.eg|voKxB^Q)w7^+5&&rL<[&6kS-_?3jr9KQ]$ap#[1g}mM46H' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
