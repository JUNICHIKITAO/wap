<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=1000, maximum-scale=1">
		<meta proparty="fb:admins" cotnent="100002484859766">
		<meta property="og:locale" content="ja_JP">
		<meta property="og:type" content="website">
		<?php
		if (is_single()){// 投稿記事
		     if(have_posts()): while(have_posts()): the_post();
		          echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 140).'">';echo "\n";//抜粋から
		     endwhile; endif;
		     echo '<meta property="og:title" content="'; the_title(); echo'| WAP - Windowsストアアプリのレビューサイト">';echo "\n";//投稿記事タイトル
		     echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//投稿記事パーマリンク
		    
		} else {//投稿記事以外（ホーム、カテゴリーなど）
		     echo '<meta property="og:description" content="WAP(Windows Appli Preview)はwindowsストアアプリに関するレビューサイトです。">';echo "\n";//「一般設定」で入力したブログの説明文
		     echo '<meta property="og:title" content="'; bloginfo('description'); echo"｜"; bloginfo('name'); echo '">';echo "\n";//「一般設定」で入力したブログのタイトル
		     echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";//「一般設定」で入力したブログのURL
		     echo '<meta name="description" content="WAP(Windows Appli Preview)はwindowsストアアプリに関するレビューサイトです。" />';
		     echo '<meta name="keywords" content="Windows8アプリレビューブログ,Windowsストアアプリレビューブログ,Windowsストアアプリレビューサイト,Windowsストアの無料アプリ">';
		}
		?>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<?php
		$str = $post->post_content;
		$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿記事に画像があるか調べる
		if (is_single() or is_page()){//投稿記事か固定ページの場合
		if (has_post_thumbnail()){//アイキャッチがある場合
		     $image_id = get_post_thumbnail_id();
		     $image = wp_get_attachment_image_src( $image_id, 'full');
		     echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
		} else {//画像が1つも無い場合
		     echo '<meta property="og:image" content="'; bloginfo('template_url'); echo'/img/logo.jpg">';echo "\n";
		}
		} else {//投稿記事や固定ページ以外の場合（ホーム、カテゴリーなど）
		     echo '<meta property="og:image" content="'; bloginfo('template_url'); echo'/img/logo.jpg">';echo "\n";
		}
		?>
		<!--OGP完了-->

		
	    
		<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?php echo do_shortcode('[img_path]'); ?>/favicon.png">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/style.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46302730-1', 'win8appli.com');
  ga('send', 'pageview');

</script>
		<title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
		<?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="header">
			<div id="wrap" class="clearfix">
				<?php
					if(is_front_page()):
				?>
				<h1>
					<a href="<?php echo home_url('/'); ?>" id="logo">
						<img src="<?php echo do_shortcode('[img_path]'); ?>/logo.png" height="60" width="60" alt="<?php bloginfo('name'); ?>" />
					</a>
					<div id="title">
						<p><?php bloginfo('description'); ?></p>
					</div><!-- /title -->
				</h1><!-- /logo -->
				<?php
					else:
				?>
				<div>
					<a href="<?php echo home_url('/'); ?>" id="logo">
						<img src="<?php echo do_shortcode('[img_path]'); ?>/logo.png" height="60" width="60" alt="<?php bloginfo('name'); ?>" />
					</a>
					<div id="title">
						<p><?php bloginfo('description'); ?></p>
					</div><!-- /title -->
				</div><!-- /logo -->
				<?php
					endif;
				?>
				<?php get_search_form(); ?>
			</div><!-- /wrap -->
		</div><!-- /header -->