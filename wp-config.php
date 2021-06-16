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
define( 'DB_NAME', 'jacometo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');

// remove tags padrão do Contact Form 7;
define('WPCF7_AUTOP', false );
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
define( 'AUTH_KEY',         '/8#xnv(*E1QWYpP%u$!!/DZ!=&$F/hn1&XVJ?$sQ4>f%[#HL><:lc3>&D[!PTy;b' );
define( 'SECURE_AUTH_KEY',  '@^WwMm^9Z:}Jvq,t+O/0jUIwS[A`?=bup<U&A;`Mg,ejzsJ8n:%eKdyYfz~QbAP8' );
define( 'LOGGED_IN_KEY',    '>:;UkDsMXytVu2:d2Y%NCH;rZ9@o$RwD9$?1 ePa~:GK.34zA:9zq7Z%% _!3YVo' );
define( 'NONCE_KEY',        '^o&!fMb%R[Y7LZ~x;yHt_*1{ZNs[RkcB#-Xh,7B)W59)~kUH3IQ,6odXkcp_+ 7>' );
define( 'AUTH_SALT',        '+Bco%v#mf!P&>R[0VnuRp*5qmJXW9{3/ 1Vh}0:86,^vw<a7Ha*@Oxa@!$u}M5OJ' );
define( 'SECURE_AUTH_SALT', ':V*499u!y}7% }JC!L;OXqXl(3O%IKvYdjW+M7-Q;e_cWG[PL<inJ+`N<2aP^6Ev' );
define( 'LOGGED_IN_SALT',   '<:-x.8@2&!3k6W]ZnHX}sp716;9+BsA9Ddk_:{+<WW}^m/H|7l<<OTCK|G%P=h?l' );
define( 'NONCE_SALT',       '?0H^ BQL(5~4[[4.I3sdL#?fqUsYrfhF7GA|9J,}vLk?|oKx8%jqOx?s8IMzh(:Q' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
