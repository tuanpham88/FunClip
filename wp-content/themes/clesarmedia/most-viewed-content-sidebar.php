<div class="mostview-contentsidebar">
	<h2><?php echo esc_attr(get_theme_mod( 'popularposts_title' , 'Popular Posts'  )); ?></h2>	
		<?php  $numberpostviewpopst = esc_attr(get_theme_mod( 'popularposts_number' , '6'  ));
		$query = new WP_Query( array(
		    'orderby' => 'comment_count',
            'order' => 'desc',
		    'posts_per_page' => $numberpostviewpopst
		) );
		while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="content-mostview-contentsidebar">	
				<div class="contentviwpost-956-contentsidebar">
					<a href="<?php the_permalink(); ?>">
                        <?php 
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                        } 
                        else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                        ?>
                    </a>
						<div class="title-view-956-contentsidebar">
							<a href="<?php the_permalink(); ?>"><?php echo clesarmedia_new_title('...', 12); ?></a>
						</div>
						<div class="postmetadata-contentviwpost-956-contentsidebar">
							<span>
								<i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) .' ago'; ?>
							</span>	
						</div>
					</a>
				</div>
			</div>
		<?php
		endwhile;
		?>
</div>
