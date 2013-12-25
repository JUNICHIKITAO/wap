<?php
// simple HTML DOM Parserを読み込み
require_once 'simple_html_dom.php';

// $dom : 指定のURLを読み込む。対象アプリの公式ページのURLを指定する。
$dom = file_get_html('http://apps.microsoft.com/windows/ja-JP/app/skype/5e19cc61-8994-4797-bdc7-c21263f6282b');
//$dom = file_get_html('http://apps.microsoft.com/windows/ja-jp/app/amazon/80299018-3dee-418d-8466-374fe9463309');

// 呼び出したHTMLから各要素を抽出
$app_name = ($dom->find('#ProductTitleText',0)->plaintext);	// アプリ名
$category = ($dom->find('#CategoryText',0)->plaintext);	// カテゴリー名
$rating = ($dom->find('#AgeRating',0)->plaintext);	// 年齢区分
$developper = ($dom->find('#AppDeveloperText',0)->plaintext);	// 発行者
$info = ($dom->find('#DescriptionText',0)->plaintext);	// 説明文

$dom->clear();	// オブジェクトに含まれるすべての要素を削除
unset($dom);	// オブジェクトを削除
?>
