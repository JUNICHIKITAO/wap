<?php get_header(); ?>
<div id="content" class="clearfix">
	<nav id="theme_path" class="topicpath clearfix">
		<ul>
			<li class="level-1 top"><a href="<?php echo home_url('/'); ?>/"><img src="<?php echo do_shortcode('[img_path]'); ?>/pankuzu_home.png" width="18" height="17" alt="ホーム" /></a></li>
			<li class="level-2 sub tail current"><?php echo do_shortcode('[category_name]'); ?></li>
		</ul>
	</nav>
	<div id="post_main" class="clearfix">
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div id="post_content">
			<header id="post_header">
				<div id="page_writer">
					<p>
						<span><?php echo the_time('Y/m/d'); ?></span>
						<span><?php echo do_shortcode('[category_name]'); ?></span>
					</p>
					<div class="share_box">
                	<div class="tw" style="width: 105px;">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?> | <?php bloginfo('name'); ?>" data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                    <div class="fb">
                        <iframe class="fl" src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;width=115&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:115px; height:21px;" allowTransparency="true"></iframe>
                    </div>
                    <div class="hatena">
                    	<a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?> | <?php bloginfo('name'); ?>" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                    </div>
                </div><!-- .share_box -->			
				</div>
				<h1><?php the_title(); ?></h1>
			</header>
			<?php if( has_excerpt() ): ?>
				<div id="post_excerpt">
					   <?php the_excerpt(); ?>
				</div>
			 <?php endif; ?>
			<div id="post_thumbnail">
				<?php the_post_thumbnail("full"); ?>
			</div>
			<aside class="add">
				<!-- adsense -->
			</aside>
			<section id="post_section">
				<?php the_content(); ?>
			</section>
			<footer id="post_footer">
				<div class="share_box">
					<div class="footer_share">
						<div class="fb">
	                    	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;width=70&amp;height=65&amp;colorscheme=light&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:65px;" allowTransparency="true"></iframe>
	                    </div>
	                	<div class="tw">
	                    	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?> | <?php bloginfo('name'); ?>" data-lang="ja" data-count="vertical">ツイート</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	                    </div>
	                    <div class="hatena">
	                    	<a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?> | <?php bloginfo('name'); ?>" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
	                    </div>
					</div>
				</div>
				<aside class="add">
					<!-- adsense -->
				</aside>
				<div class="related">
					<h2><img src="<?php echo do_shortcode('[img_path]'); ?>/h2_related.jpg" width="628" height="20" alt="関連する記事" /></h2>
					<?php similar_posts(); ?>
					
					
				</div>
			</footer>
		</div>
	</div>
	<?php endwhile; endif; ?>
	
	<?php get_sidebar(); ?>
</div><!-- /content -->
<?php get_footer(); ?>