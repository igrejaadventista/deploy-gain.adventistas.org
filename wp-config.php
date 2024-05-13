<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */

// define('WP_CACHE', true); //Added by WP-Cache Manager
// define( 'WPCACHEHOME', '/var/www/gain.adventistas.org/www/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

define('DB_NAME', 'gain');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

 /** MySQL hostname */
define('DB_HOST', 'localhost');

/** Varnish host*/
// define('VHP_VARNISH_IP','127.0.0.1');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('FORCE_SSL', true);
define('FORCE_SSL_ADMIN',true);
$_SERVER['HTTPS']='on';

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'gain.adventistas.org');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define( 'AS3CF_AWS_ACCESS_KEY_ID',     'AKIAWRJWC2TSPB4GED4P' );
define( 'AS3CF_AWS_SECRET_ACCESS_KEY', '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' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p@{F_KGwJZ#L2CoHm/t=!O}GQH_c`:Q)]P+yn<P,Jn]f#HiegAiR]jC+@O|3:4-@');
define('SECURE_AUTH_KEY',  'Ib,i!gSAY/;k`jAdF?H{-]+m]zZ3j3YyAX-8$$>orxq8f3K$Cn,1[~YmTK0+|2,e');
define('LOGGED_IN_KEY',    '-[$TK/E=_x3| Xs5F|:<+--M[/c+lDq{Kb_q8XSSofn|&i:|It}[9[LVX(/p9=+s');
define('NONCE_KEY',        'hWD7GJ!dX>Q.0zcbdjVAXz*kO+/Y+k)a<T3z?.+e6T:&@Q$N~kNOo=SuCYHf~oEE');
define('AUTH_SALT',        '8`|l|,:)DG?=)I0|5r0#adp=||y!;,};pb*gk+%ez17!&{Fpz[K/v)(J-r sl?6}');
define('SECURE_AUTH_SALT', 'iBbyS<{[&9Fl0=@@6n[_GusC;)t]{)P#-n[[vi;<O(M$JL3cgC7MzuWOQ63gqhcR');
define('LOGGED_IN_SALT',   '6pXoBKiNPQ!U+8<LM*tx&p[%:TDlf4sPJ#Ht:9XvY$-#Z0N^xNKW!>P}Qkt5<)ak');
define('NONCE_SALT',       '_J@*% rk|Uj 8B(q#P%oOh{q+3Bhx1!fgIRF~u&n!a$?/Zw:8B!m_Gvm4FF,l)Q|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

