<?php
if ( has_post_format('video') ) { ?>
<div class="video-contentsidebar">
	<h2><?php echo esc_attr(get_theme_mod( 'latestvideo_title' , 'Latets Videos'  )); ?></h2>
	<div class="video-content-contentsidebar">
        <?php
        $args = array(
            'post_type' => 'post', // if the post type is post 
            'posts_per_page' => 1,
            'tax_query' => array(
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => 'post-format-video'
            ))
        );
        $my_query = new WP_Query( $args );

 		while ($my_query->have_posts()) : $my_query->the_post(); ?> 
		<div class="video-15521-contentsidebar">
    		<a href="<?php the_permalink(); ?>">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
                } 
                else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                ?>        
            </a> 
    		<span><p>
		    	<i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?>
		    </span>
		    <div class="content-video-contentsidebar">
    			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    			<p><?php echo clesarmedia_excerpt('25'); ?></p>
    		</div>
    	</div>

    	<?php endwhile; ?>
    </div>
        <?php
		$clik = 1;
		$numberofpostlatestvideo = esc_attr(get_theme_mod( 'latestvideo_number' , '5'  ));
		$numberofpostcatlv = $numberofpostlatestvideo - $clik;		
        $args = array(
            'post_type' => 'post', // if the post type is post
			'posts_per_page' => $numberofpostcatlv,
            'offset' => 1,
            'tax_query' => array(
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => 'post-format-video'
            ))
        );
        $my_query = new WP_Query( $args );

 		while ($my_query->have_posts()) : $my_query->the_post();  ?> 
	    <div class="video-content-mini-contentsidebar">
	    	<div class="content-489-contentsidebar">
	    		<a href="<?php the_permalink(); ?>">
                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                    } 
                    else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                    ?>
                </a>
				<a href="<?php the_permalink(); ?>"><?php echo clesarmedia_new_title('..', 6); ?></a>
			</div>
	    </div>
	    <?php endwhile; ?>
</div>
<?php } ?>