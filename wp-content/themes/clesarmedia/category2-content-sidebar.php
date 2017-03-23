<div class="category2-contentsidebar">
	<h2><?php echo esc_attr(get_theme_mod( 'cat_2_title' , ''  )); ?></h2>
		<?php 
		$cat2name = esc_attr(get_theme_mod( 'cat_2_name' ));
		$numberofpost2 = esc_attr(get_theme_mod( 'cat_2_number' , '4'  ));
		$the_query = new WP_Query('cat='.$cat2name.'&showposts='.$numberofpost2.'');
		while ($the_query->have_posts()) : $the_query->the_post();
		?>
			<div class="cat2-item-contentsidebar">
				<a href="<?php the_permalink(); ?>">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                    } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                    ?>				
                </a>
				<p>
				<div class="contentcat212">	
					<span>
						<i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?>
					</span>
					</p>
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<p><?php echo clesarmedia_excerpt('25'); ?></p>
				</div>
			</div>
		<?php
		endwhile;
		?>
</div>
