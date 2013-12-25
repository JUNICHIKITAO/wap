<?php

/* WordPress内で使用する各種フック及び関数の定義を行うファイル
============================================== */
 remove_filter ('the_content', 'wpautop');
 
 

 // 画像ファイルのディレクトリを呼び出すshortcode
 function get_image_path() {
 	return get_template_directory_uri()."/img/";
 }
 add_shortcode('img_path','get_image_path');






 // アイキャッチの設定
 add_theme_support('post-thumbnails');





 // 投稿ページのカテゴリー名の取得
 function get_category_name() {
 	$cat = get_the_category();	// 記事の属するカテゴリー情報を取得
	
	foreach ($cat as $key => $value) {		// カテゴリ情報の個数分繰り返し
		echo $value->cat_name;				// カテゴリ情報からカテゴリーネームを取得
	}
 }
 add_shortcode('category_name','get_category_name');




 // 抜粋文の文字数制限
 function excerptlimitchar() {
 	$excerpt = get_the_excerpt();
 	if((mb_strlen($excerpt) > 120)) {
 		$excerpt = ((mb_substr($excerpt,0,120))."...");
 	}
	return $excerpt;
 }
 add_shortcode('short_excerpt','excerptlimitchar');



 // セルフピンバックの禁止
 function no_self_ping($links) {
 	$home = get_option('home');
	foreach ($links as $l => $link) {
		if (0 === strpos($link,$home)) {
			unset($links[$l]);
		}
	}
 }
 add_action('pre_ping','no_self_ping');
 
 
 // カスタムメニュー
 add_theme_support('menus');
 
 

 /*****************************************/
?>