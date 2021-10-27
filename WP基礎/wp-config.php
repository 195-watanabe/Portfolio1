<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'WithCode+_WordPress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '31,8l$0A%KZHbW&:|lo(&e7l>bI$@VV+oVP*#1Wcow<W`V(?NSEzNKn.^ j[*o1(' );
define( 'SECURE_AUTH_KEY',  'C pCJ(9+|xv!DJrhEC%H]A/Ib*w(-@0?r8kG-J{+g5^:6BI{QmG$qaCU7T{+DDU9' );
define( 'LOGGED_IN_KEY',    '$]6fyP.CHKd^EoY`e-ujQ,dD(!T5D/Fg7YT!KQ6YYmW>wVV_I5<.eM|BP^O@EMEf' );
define( 'NONCE_KEY',        '?YPlq}fd;C/^D[3:XSM8T7eLh-)bNT.<$~fogGZmsS,g5o%of?QpFlG,HHC?9_0G' );
define( 'AUTH_SALT',        '[`G%*?n}0iT}VQZBf>j_@Ju0 l$.Uh9>eu}{0WcFHo/@C.HKJB-,t1-:t,NKX(5+' );
define( 'SECURE_AUTH_SALT', 'YC`^+r}w!6s|,:xNRy$%%6@$gZ8l!;)@2I`2LX7LtS^Kd^0:#BRzaGSP6X0KuYny' );
define( 'LOGGED_IN_SALT',   '`Zgi=)u1!{<>XHSvI=Ql&~rgqXiX7/8qUcwm!tj_lzMue)Gjv0=FPa4Y8Jda;^c1' );
define( 'NONCE_SALT',       'to1{,]id]mu=Q!a17T5$2:icGC:e|INQ7`HdUg`/ZVthQSI0$+gfvU[)91g}1#M8' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
