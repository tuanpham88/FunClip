<div class="posts-similar-content">
	<h3><?php _e('YOU MIGHT ALSO LIKE ', 'clesarmedia') ?></h3>
	<div class="slider2">
	<?php
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	 
	$args=array(
	'tag__in' => $tag_ids,
	'post__not_in' => array($post->ID),
	'showposts'=>6,
	'ignore_sticky_posts'=>1
	);
	$my_query = new wp_query($args);
	if( $my_query->have_posts() ) {
	while ($my_query->have_posts()) {
	$my_query->the_post();
	$imageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) )
	 
	?>
		<div class="slide">
				<?php
				if ( has_post_format('video')) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="video-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}
				elseif ( has_post_format('aside')) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="aside-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}
				elseif ( has_post_format('quote')) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="quote-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}
				elseif ( has_post_format('image')) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="image-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}
				elseif ( has_post_format('audio')) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="audio-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}
				elseif ( has_post_format('link')) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="link-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}
				elseif ( has_post_format('gallery')) { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="gallery-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}				
				else { ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="default-icon-similar">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <img title="<?php the_title(); ?>" alt="_" src="<?php print $imageURL;?>"/>
                    <?php } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" title="<?php the_title(); ?>" alt="no image posts" /> <?php }
                    ?></a>
				<?php
				}
				?>
			<div class="titlepostssimilar">
					<center>
						<h5><a href="<?php the_permalink(); ?>"><?php echo clesarmedia_new_title('...', 9); ?></a><br /></h5>
					</center>
			</div>
		</div>
	<?php
	}
	}
	wp_reset_query();
	}
	?>
	</div>
	<div class="clear"></div>
</div>
