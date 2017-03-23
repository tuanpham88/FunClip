<div class="category4-contentsidebar">
	<h2><?php echo esc_attr(get_theme_mod( 'cat_4_title' , ''  )); ?></h2>
		<?php 
		$cat4name = esc_attr(get_theme_mod( 'cat_4_name' ));
		$numberofpost4 = esc_attr(get_theme_mod( 'cat_4_number' , '6'  ));
		$the_query = new WP_Query('cat='.$cat4name.'&showposts='. $numberofpost4 .'');
		while ($the_query->have_posts()) : $the_query->the_post();
		?>
			<div class="cat4-item-contentsidebar">
				<a href="<?php the_permalink(); ?>">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                    } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                    ?>				
                </a>
				<div class="cat4itemcontent">
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<span>
						<i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?>
					</span>
				</div>
			</div>
			
		<?php
		endwhile;
		?>
</div>
