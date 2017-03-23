<div class="category3-contentsidebar">
	<h2><?php echo esc_attr(get_theme_mod( 'cat_3_title' , ''  )); ?></h2>
		<?php 
		$cat3name = esc_attr(get_theme_mod( 'cat_3_name' ));
		$numberofpost3 = esc_attr(get_theme_mod( 'cat_3_number' , '4'  ));
		$the_query = new WP_Query('cat='.$cat3name.'&showposts=1');
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
				<div class="cat3-itemcontent">
					<span>
						<i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?>
					</span>
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<p><?php echo clesarmedia_excerpt('25'); ?></p>
				</div>
			</div>
		<?php
		endwhile;
		?>
		<div class="cat2-itemsubcatcontent">
			<?php 
			$clik = 1;
			$numberofpostcat3 = $numberofpost3 - $clik;
			$the_query = new WP_Query('category_name='.$cat3name.'&showposts='. $numberofpostcat3 .'&offset=1');
			while ($the_query->have_posts()) : $the_query->the_post();
			?>
				<div class="cat2-item-subcat-contentsidebar">
					<a href="<?php the_permalink(); ?>">
					<?php if ( ! post_password_required() && ! is_attachment() ) :the_post_thumbnail(); endif; ?></a>
					<div id="title-subacat2-contentsidebar">
						<a href="<?php the_permalink(); ?>"><?php echo clesarmedia_new_title('...', 8); ?></a>
						<p>
							<span>
								<i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?>	
							</span>					
						</p>
					</div>
				</div>
				<div class="clear"></div>
			<?php
			endwhile;
			?>
		</div>
</div>
