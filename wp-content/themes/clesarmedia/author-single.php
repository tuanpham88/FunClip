<div class="author-single-content">
	<div class='image-author-single'>
	<?php echo get_avatar( get_the_author_meta('ID'), 200); ?>
	</div>
	<div class='nameauthorsingle'>
		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
	</div>
	<div class='descriptionauthorsingle'>
		<p><?php the_author_meta('description'); ?></p>
	</div>
</div>
