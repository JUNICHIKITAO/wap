<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wap_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wap');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '046986oso');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uG{1_dJ<N(h^gLJ@YOGO%vr`]H*xc]^8L~ABpp|6fC^ivnw]s|.pzIn1]c9^y^bb');
define('SECURE_AUTH_KEY',  '/z0Z4+da`q<ebet4=t9Axp,q%hBOm&|zuEAw9K8L~%Z{IL+Wt 3hy`z^zvy5[<kE');
define('LOGGED_IN_KEY',    '(]WH5~!}7]qR!]_JR<)L{PqG<h<?* j}Wn6X-vs9)v_zj8&-/O-:D0U&a4xE>ZbD');
define('NONCE_KEY',        '6nvnlDg9nQ /razNY#l<?I8-)qE6T{ZS5t.PzO1S?b@;P0QusDWC[&{kN+M?zzLe');
define('AUTH_SALT',        '0Hr|`c68zEC[mP}{ty{b3+&Y9xuygPr@WLCp<Ylsv<}.qyM*P_|}r7;DTobUZ*81');
define('SECURE_AUTH_SALT', 'h{ ?O)Vh{5I(.K7fx&H?Z]9Cz$c%nM;COzZe>H#F@?jHJ0(0K(1}m-cl*q?P8!4s');
define('LOGGED_IN_SALT',   'm!5eczC1D+;R]wZ f^3Xnh}BzKgW/Dr9-#y}AodCmK4 V=mmo=TXH>R+*vh!y-f9');
define('NONCE_SALT',       'n1$B[qY0:(;D-Y(Ibkx@2D)W6dWD]+K:|.q(MW6lHpOy223E<Ixztfy6h3z54SX[');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
