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
define( 'DB_NAME', 'barbearia' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'e_ho 5(G1PQztQe|be0OY=!9{;oBV1)h|!!&37zu)&q|-^#P7cK^FhDnG+VAj^q ' );
define( 'SECURE_AUTH_KEY',  'bQf6JuZ}BZv1ovw]NodX_ob9vyk]nddLnysT2<Y9l?MaDobP82>O{(b<4b+?bvZW' );
define( 'LOGGED_IN_KEY',    'hz3cFp34hjMr^{kd[} k5;cLok<T]J3Wbqt*_URv7VE54SlHs&^f#@0?.7yB$4m_' );
define( 'NONCE_KEY',        '^6N7V/D>TC-B<w&khy[7D${baDGUqc]{G=CkTxE@G|.sKHthir:xJT#VaBW<U5 u' );
define( 'AUTH_SALT',        '3zky4 37ybvlA,2Ne$+|,}Xz_.48(*m&VQ5g6:XUTVRD]@p<+lr)})`z!fjjr?|w' );
define( 'SECURE_AUTH_SALT', 'NQD.PvB+ a3r!XN%pZ5>`&XfdpSAfis(Z?a(b&oS~c @?IZU6ufp,7YMbtxj;gss' );
define( 'LOGGED_IN_SALT',   '6~!}&y]*KnT1J:XM-[[Yma5%Fp]CB.HP^H+;<NUXKRig;8!TYT3f<!?dwJ5!/0-7' );
define( 'NONCE_SALT',       'ZxsCO?5zVH!1,k6#sL.kj9pV 3jSVnT?WGjwyC$Iq%LH[{W1Q[@;1Pa;L+X&L_cc' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bra_';

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
