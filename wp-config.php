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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'Cclick_wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Pm,;m[r72dWq$39IAhY%|fWwbi8GXZTATVgGxVBcX-h6]sz2)|Q*2,]wEuyO4;*b' );
define( 'SECURE_AUTH_KEY',  'T$>OUGL@|iwXoh;!1(kp(}|Q%E[{F[#AwVOHQX~c<?!wA,R*L,ieZNH/>BLJft,[' );
define( 'LOGGED_IN_KEY',    'cjvnXD5[$7[hzzbi.]*:`)b4Mww2TYwfxT|vSC,ygo*^=z?sx,N1rlPd]kn50Vpq' );
define( 'NONCE_KEY',        ' |IBf,TQ!HTh9LV,?IM=Q4=)OVGL_8Wmh8%=1sth>L~2]qA0m}L%}Qx.#09CNY$}' );
define( 'AUTH_SALT',        'r|1*,$Tso9=U+FXNoNs|sT;a$?hyQ(gx4f?]gL&%YvVv!,*j.>F+h/j+bKBe_Zh:' );
define( 'SECURE_AUTH_SALT', '{Aw.sAmzSYoOvo_=,?{x8Cp0_xr?MaPVG9{/_{L-I=0)X%O;w^oN1_wLPKWK~8E#' );
define( 'LOGGED_IN_SALT',   '77zaoAe<~z(GD@D~(p?e$.cx)|Tw@=<8kT:pTZ[bxRYOP5ALMcb]lz_Xe@f$@I@x' );
define( 'NONCE_SALT',       'c6EaD7S&>w:!0NB=:3y?r)YN}zvB&ME,W =0zXr5H_02w#H/a3T~hQ%6My(M<TA ' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
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
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
