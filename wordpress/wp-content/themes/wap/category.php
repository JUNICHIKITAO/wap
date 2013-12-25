<?php get_header(); ?>
		<!--******************************ここからメインカラム***************************************-->
		<div id="content" class="clearfix">
			<nav id="theme_path" class="topicpath clearfix">
            	<ul>
                	<li class="level-1 top"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo do_shortcode('[img_path]'); ?>/pankuzu_home.png" width="18" height="17" alt="ホーム"></a></li>
                    <li class="level-2 sub tail current"><?php echo do_shortcode('[category_name]'); ?></li>
                </ul>
            </nav>
			<div id="main" class="clearfix">
            	
                
				<div id="newpage_list">
					<h1>「<?php single_cat_title(); ?>」についての記事</h1>
				</div><!-- /newpage_list -->
				<?php wp_pagenavi(); ?>
				<?php //if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div id="post_area">
					<?php get_template_part('content','category'); ?>
				</div>
				<?php wp_pagenavi(); ?>
			</div><!-- /main -->
			<?php //endwhile; endif; ?>
			<?php get_sidebar(); ?>
		</div><!-- /content -->
		<!--********************************ここからfooter**********************************-->
		<?php get_footer(); ?>