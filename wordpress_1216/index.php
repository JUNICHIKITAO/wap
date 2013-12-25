<?php get_header(); ?>
<div id="content" class="clearfix">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="main">
		<?php the_title(); ?>
		<?php the_content(); ?>
	</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
