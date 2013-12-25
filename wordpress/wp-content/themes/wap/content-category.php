<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="newpost">
	<div class="post_title">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	</div>
	<div class="post_body clearfix">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<p class="post_body_text"><?php echo do_shortcode('[short_excerpt]'); ?></p>
		<p class="post_date"><?php the_time('Y/m/d'); ?> ジャンル：<?php echo do_shortcode('[category_name]'); ?></p>
		<div class="button">
			<p><a href="<?php the_permalink(); ?>">続きを見る</a></p>
		</div>
	</div>
</div>
<?php endwhile; else: ?>
<p>「<?php the_search_query(); ?>」についての記事は見つかりませんでした。</p>
<?php endif; ?>