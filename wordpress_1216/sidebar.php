<div id="side">
				<aside class="mb20">
					<ins class="adsbygoogle"
				     style="display:inline-block;width:300px;height:250px"
				     data-ad-client="ca-pub-6602980583142370"
				     data-ad-slot="6272594044"></ins>
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
					<!-- WAP｜トップページ｜サイドバー下 -->
					<ins class="adsbygoogle"
				     style="display:inline-block;width:300px;height:250px"
				     data-ad-client="ca-pub-6602980583142370"
				     data-ad-slot="6911722445"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</aside>
				<?php endif; ?>
				<div id="facebook_area" class="clearfix">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWAP%2F400753516694545&amp;
					width=300&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" 
					scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px; margin-bottom:20px;" allowTransparency="true"></iframe>
				</div>
				<div id="twitter_area" class="clearfix" style="width:300px;">
					<a class="twitter-timeline"  href="https://twitter.com/WAP_JP"  data-widget-id="412493484851863552">@WAP_JP からのツイート</a>
				    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>


			</div><!-- /side -->