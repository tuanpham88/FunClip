<ul id="flexiselDemo3">
     <?php
	 $the_query = new WP_Query('showposts=10');
	 while ($the_query->have_posts()) : 
	 $the_query->the_post(); ?>
        <li class="als-item">
          <div class="thumb-als-item">
            <a href="<?php the_permalink(); ?>">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
                } 
                else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                ?>              
            </a>
          </div>
          <div class="content-als-item">
            <span class="category-brk"><p><?php the_category(', '); ?></p></span>
            <span class="title-brk"><p><a href="<?php the_permalink(); ?>"><?php echo clesarmedia_new_title('...',7); ?></a></p></span>
            <span class="date-brk"><?php _e('Nearly ', 'clesarmedia'); ?><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?></span>
          </div>
        </li>
      <?php
      endwhile;
      ?>                                      
</ul>
<div class="clearout"></div>