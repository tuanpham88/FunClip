<?php 
/**
 * Category template file 
**/
get_header(); 	
?>
<div class="category-template">
        <div class='category-template-content'>
        	<h2> <?php _e('Category ','clesarmedia'); echo ": ".single_cat_title( '', false ); ?></h2>
            <?php
    		if( have_posts() ) : while (have_posts()) : the_post(); ?>
                <div class="category-template-childcontent">
                    <?php 
        			if(get_post_thumbnail_id(get_the_ID())) {
        			  $clesar_featured_image = wp_get_attachment_link( get_post_thumbnail_id(get_the_ID()), 'clesar-thumbnail', true ); 
        			  echo $clesar_featured_image;
        			} else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" />                       <?php } ?>  
                    <div class="title-category-template-childcontent">         
                        <span>
                            <i class="fa fa-clock-o"></i><?php _e('Nearly ', 'clesarmedia'); ?><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?>
                        </span>
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        <p><?php echo clesarmedia_excerpt('25'); ?></p>
                    </div>  
                </div>
             <?php
    		endwhile; endif;
    		 ?>  
        </div>
        <div class='sidebar-layout1'>                
            <?php get_sidebar(); ?>
        </div>
</div>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>