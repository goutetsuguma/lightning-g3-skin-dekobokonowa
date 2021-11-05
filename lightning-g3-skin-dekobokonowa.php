<?php
/**
 * Plugin Name:     Lightning G3 Skin Dekobokonowa
 * Plugin URI:      （プラグインの解説ページのURL）
 * Description:     WordPressテーマ「Lightning」と掲示板やフォーラムが作れるWordPressプラグイン「bbpress」を使用した時の、デザインスキンです。
 * Author:          goutetsuguma
 * Author URI:      （作者のサイトのURL）
 * Text Domain:     lightning-g3-skin-dekobokonowa
 * Domain Path:     /languages
 * Version:         0.0.4
 *
 * @package         LIGHTNING_G3_SKIN_DEKOBOKONOWA
 */

$current_theme = get_template();
if ( 'lightning' !== $current_theme ) {
	return;
}
if ( 'g3' !== get_option( 'lightning_theme_generation' ) ) {
	return;
}

add_filter( 'lightning_g3_skins', 'ltg3_add_skin_dekobokonowa' );
function ltg3_add_skin_dekobokonowa( $skins ) {

	$data = get_file_data( __FILE__, array( 'version' => 'Version' ) );

	// dekobokonowa の部分が識別名です。好きな名前に変更してください。
	$skins['dekobokonowa'] = array(
		// label が Lightning デザイン設定 のスキン選択プルダウンに表示される名称
		'label'                    => __( 'Dekobokonowa Skin G3', 'lightning-g3-skin-dekobokonowa' ),
		'css_url'                  => plugin_dir_url( __FILE__ ) . '/css/style.css',
		'css_path'                 => plugin_dir_path( __FILE__ ) . '/css/style.css',
		// プラグインディレクトリ名を変更
		'editor_css_path_relative' => '../../plugins/lightning-g3-skin-dekobokonowa/css/editor.css',
		// スキン固有の処理を入れる場合（非推奨）
		// 'php_path'                 => plugin_dir_path( __FILE__ ) . '/functions.php',
		// 'js_url'                   => plugin_dir_url( __FILE__ ) . '/js/script.js',
		'version'                  => $data['version'],
	);
	return $skins;
}
