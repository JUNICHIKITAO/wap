<?php get_header(); ?>
		<!--******************************ここからメインカラム***************************************-->
		<div id="content" class="clearfix">
			<div class="random_topics clearfix">
				<?php
				$args = array( 'posts_per_page' => 3, 'orderby' => 'rand' );
				$rand_posts = get_posts( $args );
				?>
				<?php foreach ($rand_posts as $post): ?>
	<dl class="topics">
					<div class="topics_disp clearfix">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
						<p class="topics_text">
							<a href="<?php the_permalink();?>">
								<?php the_title();?>
							</a>
						</p>
					</div>
				</dl>
<?php endforeach; ?>

			</div><!-- /random_topics -->
			<div id="main" class="clearfix">
				<div id="newpage_list">
					<h1 id="newpage"><strong>新着記事一覧</strong></h1>
				</div><!-- /newpage_list -->
					<?php wp_pagenavi(); ?>
				<div id="post_area">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="newpost">
							<div class="post_title">
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							</div>
							<div class="post_body clearfix">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<p class="post_body_text"><?php if( has_excerpt() ){echo mb_substr(get_the_excerpt(), 0, 150);}else{echo mb_substr(strip_tags($post-> post_content), 0, 150); echo ("…"); } ?></p><!-- 記事の抜粋取得 -->
								<p class="post_date"><?php the_time('Y/m/d'); ?>　ジャンル：<?php echo do_shortcode('[category_name]'); ?></p>
								<div class="button">
									<p><a href="<?php the_permalink(); ?>">続きを見る</a></p>
								</div>
							</div>
						</div>
					
<?php endwhile; endif; ?>
				</div>

					<?php wp_pagenavi(); ?>
			</div><!-- /main -->
			<?php get_sidebar(); ?>
		</div><!-- /content -->
		<!--********************************ここからfooter**********************************-->
		<?php get_footer(); ?>