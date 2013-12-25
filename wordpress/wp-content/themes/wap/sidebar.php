<div id="side">
				<aside class="mb20">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- WAP | サイドバー上部 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:250px"
					     data-ad-client="ca-pub-2599726798990616"
					     data-ad-slot="2495852601"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</aside>
				<div class="menu_title">
						ジャンル別カテゴリー<span id="shadow"></span>
					</div>
				<ul class="category_menu">
					
					<?php
					/*
					 * 記事のあるcategoryを取得する
					 * $categories : 記事のあるカテゴリー情報を取得
					 * カテゴリーIDでaタグのリンクを指定。
					 * 取得したカテゴリー情報のcat_nameをliタグ内に埋め込み。
					 */
					$categories = get_categories();
					foreach($categories as $value): ?>
							<li class="category"><a href="<?php echo get_category_link($value->cat_ID); ?>"><?php echo $value->cat_name; ?></a></li>
					<?php endforeach; ?>
				</ul>
				<div class="menu_title">人気記事ランキング<span id="shadow"></span></div>
				<!--▼ 人気記事 ▼-->
				<?php if (function_exists('wpp_get_mostpopular')) {
				$args = 'limit=5&
				 range=monthly&
				 order_by=views&
				 thumbnail_width=45&
				 thumbnail_height=45&
				 post_start="<li>"&
				 post_end="</li>"&
				 wpp_start="<ul id="ranking">"&
				 wpp_end="</ul>"&
				 stats_comments=0&
				 stats_views=1';
				wpp_get_mostpopular($args);
				} ?>
				<!--▲ 人気記事 ▲-->
				<?php if(!is_single()): ?>
				<aside class="mb20">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- WAP | サイドバー下部 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:250px"
					     data-ad-client="ca-pub-2599726798990616"
					     data-ad-slot="3972585809"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</aside>
				<?php endif; ?>
			</div><!-- /side -->