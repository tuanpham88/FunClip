<?php /* Template Name: Statistiques */ ?> 
<?php get_header(); ?> <!-- ouvrir header,php -->
<div class="contentstatsspage">
	<div class="contentstatsspageleft">
		<?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
			<div class="stats-pages">
				<p><i class="fa fa-newspaper-o"></i><?php _e("Number of Posts", "clesarmedia"); ?> : <strong><?php echo wp_count_posts()->publish; ?></strong></p> 
			</div>
			<div class="stats-pages">
				<p><i class="fa fa-file"></i><?php _e("Number of Pages", "clesarmedia"); ?> : <strong><?php echo wp_count_posts('page')->publish; ?></strong></p> 
			</div>
			<div class="stats-pages">
				<p><i class="fa fa-comments-o"></i><?php _e("Number of Responses", "clesarmedia"); ?><strong> : <?php echo wp_count_comments()->approved; ?></strong></p>
			</div>
			<div class="stats-pages">
				<p><i class="fa fa-users"></i> <?php $result = count_users(); _e("Total Users : ", "clesarmedia"); echo $result['total_users']; ?></p>
			</div>	
			<div class="stats-pages">
				<p><i class="fa fa-user"></i> <?php foreach($result['avail_roles'] as $role => $count) echo ' ', $count, _e( ' are ', 'clesarmedia' ), $role, _e( 's', 'clesarmedia' ); _e( '.', 'clesarmedia' ); ?></p>
			</div>	
			<div class="stats-pages">
				<p><i class="fa fa-tags"></i><?php _e("Number Of tags : ", "clesarmedia"); ?><?php echo wp_count_terms('post_tag'); ?></p>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<div class="sidebar-layout1">
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>