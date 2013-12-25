<?php
/**
 * WordPress の基本設定
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'webic_win8appli');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'webic');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'sfn9vuyr9w');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql408.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
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
define('AUTH_KEY',         '^]6Eeh6h|K]:6W$G@AT:W/-!@0)7nyEQ^ U0$|;kAU0DLmCODs[%NhMjn@}SOf[Q');
define('SECURE_AUTH_KEY',  'eDR`+f~<fbx~Mwm6@u,vLSuEJ6b?J^KF7~S45vxx4.fg,hSe#-&TzZG+vG^6qE_d');
define('LOGGED_IN_KEY',    'tgClC-,|UU>v ehaw4*A9-hg6oO9yRr]cp?lvy4rDC/M!YwHhsZ.|z3 (cp-_Zgb');
define('NONCE_KEY',        'WY|Q{+!nKlQ|Xgv/5?OlJ_L=N82~zUw-a{$t<?@3_*tGXm:my_c0/s0qo%[[WIcz');
define('AUTH_SALT',        '->rRO,sF*%fd{n5X+EZ-3+@0(@<I0ZXoH%vxwQyjWyci|WgF?W~Sj5~TP_9A=H)5');
define('SECURE_AUTH_SALT', 'ZtAR}ett<j| ho~_EZPU6WEov3oo,>@483Y(SSSh7H<HR?Rnw]l{v?4~@sZ6gQ3e');
define('LOGGED_IN_SALT',   ',r6fg4E|[[%/EV`q`5$M+5,;@-gm~FVM*ZQGAlwsjyhA!v[e,!@S|v;2)APII*9m');
define('NONCE_SALT',       '0g+dFPBi+AN!G)kWn{+)]G-+.V<5MeM@|`[Z3}$R`w4)GG~`C:,cj,wuzAuGW@be');

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
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
