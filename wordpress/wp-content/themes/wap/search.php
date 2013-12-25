<?php get_header(); ?>
		<!--******************************ここからメインカラム***************************************-->
		<div id="content" class="clearfix">
			<nav id="theme_path" class="topicpath clearfix">
                	<ul>
                    	<li class="level-1 top"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo do_shortcode('[img_path]'); ?>/pankuzu_home.png" width="18" height="17" alt="ホーム"></a></li>
                        <li class="level-2 sub tail current">「<?php the_search_query(); ?>」についての記事</li>
                    </ul>
                </nav>
			<div id="main" class="clearfix">
            	
                
				<div id="newpage_list">
					<p><?php $searchTitle = mb_strlen(get_search_query()); ?></p>
					<h1>「<?php if($searchTitle > 17 ): echo mb_substr(get_search_query(), 0, 15); echo "…"; else: the_search_query(); endif; ?>」についての記事</h1>
				</div><!-- /newpage_list -->
				<div class="pager">
					<?php wp_pagenavi(); ?>
				</div>
				<?php //if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div id="post_area">
					<?php get_template_part('content','category'); ?>
				</div>
				<div class="pager">
					<?php wp_pagenavi(); ?>
				</div>
				
			</div><!-- /main -->
			<?php //endwhile; endif; ?>
			<?php get_sidebar(); ?>
		</div><!-- /content -->
		<!--********************************ここからfooter**********************************-->
		<?php get_footer(); ?>