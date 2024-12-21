<?php

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', "oito1");
// define( 'DB_NAME', "gamberin_oitoparalel" );

/** Usuário do banco de dados MySQL */
define('DB_USER', "root");
// define( 'DB_NAME', "gamberin_oitoparalel" );

/** Senha do banco de dados MySQL */
// define('DB_PASSWORD', "#@Gamberine11");
define('DB_PASSWORD', "");

/** Nome do host do MySQL */
// acesso bd remoto
// define( 'DB_HOST', "s1.paralela.net:2083" );
define('DB_HOST', "localhost");
// acesso publicação
// define( 'DB_HOST', "localhost:3306" );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '512M');
@ini_set('upload_max_filesize', '64M');
@ini_set('post_max_size', '64M');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i|PN$(`E0pNb]Q-@k+sPMp>7L_#?:j%(}I:!Ed{xi-_:x|z7C_ca_p1R,!>xg1X?');
define('SECURE_AUTH_KEY',  '0,k|_`UrF|u{2p-q7x7Vc=m<f:x&V|9?Y#+2+Z= _xPe7vGT:qPoK=GfAm/A%no|');
define('LOGGED_IN_KEY',    'AHpW3@e+nIP@sH,?o&A J}Q`T|!Gh>H>L^=T.+l9cV80EJe1b4 t:}ZS$D&jkHjz');
define('NONCE_KEY',        '9I-+,hj.@ f~nB3iMTKh}]9C[kZ|g16LnKwOG~+9]q9W}.}q(+ ]?{ D`W,roYY|');
define('AUTH_SALT',        'wsy*w|*b~dFo++C.g-`NEL8V}*y7!/.;_ip+KYn:- +@|-:?_}KY>]S0b(6kL+2(');
define('SECURE_AUTH_SALT', 'pM5l7lzatq8_a}W,(-x9Of:0!bNWenARxhq?CW,K-i-=-W}C3;V 8_Pp:sp?G<FT');
define('LOGGED_IN_SALT',   '4J_5tzG^Na<_zX5.|`e[@(!s%N|pgd1c6X4w;$fLcvsT+ss()MR^tBNP4|_NyYuH');
define('NONCE_SALT',       'a<w8>bJg<,TeVQAxo:bu1 Y8V~L;1Vt/#Bx2uXj&|>$<6>w[m2d-a9?#1KU#CmDi');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ykhhb_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
define('DUPLICATOR_AUTH_KEY', 'P}>e @W.7{>&JRaCvsR+40l{-Q}h8b+r::ssYy!5jhdr-`o/Uz!P2:>]sr](pQ/w');
define('WP_PLUGIN_DIR', ABSPATH . 'wp-content/plugins');
define('WPMU_PLUGIN_DIR', ABSPATH . 'wp-content/mu-plugins');

if (! defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
