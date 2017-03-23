<?php get_header(); ?>
<div class="container_content_sidebar">
	<div class="content_sidebar">
		<?php get_template_part( 'most-viewed-content-sidebar' );?>
		<?php get_template_part( 'video-content-sidebar'); ?>
		<?php get_template_part( 'category1-content-sidebar'); ?>
		<?php get_template_part( 'category2-content-sidebar'); ?>
		<?php get_template_part( 'category3-content-sidebar'); ?>
		<?php get_template_part( 'category4-content-sidebar'); ?>
	</div>
	<div class="sidebar-layout2">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>