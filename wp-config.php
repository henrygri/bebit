<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'c1_bebit');

/** Nome utente del database MySQL */
define('DB_USER', 'c1_bebit');

/** Password del database MySQL */
define('DB_PASSWORD', 'mtgdSpXNA@2');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/** Change Media Upload Directory */
define( 'UPLOADS', ''.'content' );


/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~y@!XK3wq=DOMFK<iwKjVpvJ:CY+n-lKube^Q|#Zz|Gs%v,nTenwM>+aoZ(yKTL5');
define('SECURE_AUTH_KEY',  'XtqDQ1=.H*GjguT|C5Tpy+c?i($j)8VvXhH$x^{^K|D=rtVU.l-MPGY~7v)<;Z/T');
define('LOGGED_IN_KEY',    '%6kh0%?)F%@Y;n6VDGm5G-8L|56;F[%{J0y/&+MjZ?`BCO!%2n4H%0C%C3@VTplU');
define('NONCE_KEY',        'O-mEm^TnH5ccnTGBZho016fqE=S+L3Li^cv8EEh[)hfS>w<L ^56yWSL.S#n sE=');
define('AUTH_SALT',        '4r=m!IZHopBME)M,ELdc+M(L?i-|cQ][&ad-=eWjm49TCRJ (N*U&d-1QQ},%V=i');
define('SECURE_AUTH_SALT', 'KJE>LJMJdh3.)EUt;D;N@56S@T-(6?@(^E=}4WYm*{S)+P`,o{+g] q!A_Jk[l-q');
define('LOGGED_IN_SALT',   '1n!bubx~J7-|Xjy o-#6NU@ydvext<ts:E_FD*z}=kt^7SfllM)XGvR$1riKtFjB');
define('NONCE_SALT',       'BRFXL+Zmh(D^ig+N$pRQ+F7-X5NU:i:;e[jpo<oKU2&>QC.bGrH]g)Zgsv%VBIYw');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'bit_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

define('ALLOW_UNFILTERED_UPLOADS', true);

define( 'COOKIE_DOMAIN', 'bebit.it' );

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
