<div class="category1-contentsidebar">
	<h2><?php echo esc_attr(get_theme_mod( 'cat_1_title' , ''  )); ?></h2>
	<?php
	$cat1name = esc_attr(get_theme_mod( 'cat_1_name' )); $numberofpost1 = esc_attr(get_theme_mod( 'cat_1_number' , '6'  ));
	$args = array( 
	   'cat' => $cat1name,
	   'posts_per_page' => $numberofpost1
	 );
	$the_query = new WP_Query( $args );
	while ($the_query->have_posts()) : $the_query->the_post();
	?>
		<div class="cat-item-contentsidebar">
			<a href="<?php the_permalink(); ?>">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
                } 
                else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                ?>
            </a>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<span>
	            <p><i class="category"></i><?php the_category(', '); ?></p>
	            <p><i class="author"></i><?php the_author_link(); ?></p> 
	        </span>
        	<div class="format-category1-contentsidebar">
				<?php
				if ( has_post_format('video')) { ?>
				<div class="video-format-cat1">
					  <i class="fa fa-bookmark"></i>
					  <i class="fa fa-link"></i>
					  <i class="fa fa-camera"></i>
					  <i class="fa fa-quote-left"></i>
					  <i class="fa fa-video-camera"></i>
					  <i class="fa fa-music"></i>
				</div>
				<?php
				}
				?>
				<?php
				if ( has_post_format('aside')) { ?>
				<div class="aside-format-cat1">
					  <i class="fa fa-bookmark"></i>
					  <i class="fa fa-link"></i>
					  <i class="fa fa-camera"></i>
					  <i class="fa fa-quote-left"></i>
					  <i class="fa fa-video-camera"></i>
					  <i class="fa fa-music"></i>
				</div>
				<?php
				}
				?>
				<?php
				if ( has_post_format('quote')) { ?>
				<div class="quote-format-cat1">
					  <i class="fa fa-bookmark"></i>
					  <i class="fa fa-link"></i>
					  <i class="fa fa-camera"></i>
					  <i class="fa fa-quote-left"></i>
					  <i class="fa fa-video-camera"></i>
					  <i class="fa fa-music"></i>
				</div>
				<?php
				}
				?>
				<?php
				if ( has_post_format('image')) { ?>
				<div class="image-format-cat1">
					  <i class="fa fa-bookmark"></i>
					  <i class="fa fa-link"></i>
					  <i class="fa fa-camera"></i>
					  <i class="fa fa-quote-left"></i>
					  <i class="fa fa-video-camera"></i>
					  <i class="fa fa-music"></i>
				</div>
				<?php
				}
				?>
				<?php
				if ( has_post_format('audio')) { ?>
				<div class="audio-format-cat1">
					  <i class="fa fa-bookmark"></i>
					  <i class="fa fa-link"></i>
					  <i class="fa fa-camera"></i>
					  <i class="fa fa-quote-left"></i>
					  <i class="fa fa-video-camera"></i>
					  <i class="fa fa-music"></i>
				</div>
				<?php
				}
				?>
				<?php
				if ( has_post_format('link')) { ?>
				<div class="link-format-cat1">
					  <i class="fa fa-bookmark"></i>
					  <i class="fa fa-link"></i>
					  <i class="fa fa-camera"></i>
					  <i class="fa fa-quote-left"></i>
					  <i class="fa fa-video-camera"></i>
					  <i class="fa fa-music"></i>
				</div>
				<?php
				} ?>
        	</div>
		</div>
	<?php endwhile; ?>
</div>
