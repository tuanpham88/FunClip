<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>
	<div class="contenttemplatepagefullwidth">
        <?php if( have_posts() ) : while (have_posts()) : the_post(); 
                $postmetapage = get_post_meta($post->ID,'_show_post_meta_page',true);
                $authorpage   = get_post_meta($post->ID,'_show_authors_page',true);
                $commentpage  = get_post_meta($post->ID,'_show_comment_page',true);         
        ?>
        	<div class="headertitlepagetemplate">
        		<h2><?php the_title(); ?></h2>
                    <?php if ($postmetapage == 'yes-post-meta-page') { ?>
                        <div class="postmetadata-single">
                            <span><i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?></span>
                            <i class="point"></i>
                            <span><i class="author-slider"></i><?php the_author_posts_link(); ?> </span>
                            <i class="point"></i>
                            <span><i class="comment-single"></i><?php comments_number( __('no Responses', 'clesarmedia'), __('1 Responses', 'clesarmedia'), __('% Responses', 'clesarmedia') );?></span>
                        </div>
                    <?php }
                    if ($postmetapage != 'no-post-meta-page' && $postmetapage != 'yes-post-meta-page') { ?>
                        <div class="postmetadata-single">
                            <span><i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?></span>
                            <i class="point"></i>
                            <span><i class="author-slider"></i><?php the_author_posts_link(); ?> </span>
                            <i class="point"></i>
                            <span><i class="comment-single"></i><?php comments_number( __('no Responses', 'clesarmedia'), __('1 Responses', 'clesarmedia'), __('% Responses', 'clesarmedia') );?></span>
                        </div>        
                    <?php } ?> 
        	</div>
        	<div class="contenucontenttemplatepagefullwidth">
				<?php the_content(); ?>
			</div>	
                <?php if ($authorpage == 'yes-authors_page') { ?>
                    <div class="Author-single">
                        <?php get_template_part( 'author-single'); ?>
                    </div>
                <?php } 
                if ($authorpage != 'yes-authors_page' && $authorpage != 'no-authors_page') { ?>
                    <div class="Author-single">
                        <?php get_template_part( 'author-single'); ?>
                    </div>
                <?php } ?>
                <?php if ($commentpage == 'yes-comments-page') { ?>
                    <div class="container-comment-single">
                        <div class="comment-single-media">
                            <?php comments_template(); ?> 
                        </div>
                    </div>
                <?php } 
                if ($commentpage != 'yes-comments-page' && $commentpage != 'no-comments-page') { ?>
                    <div class="container-comment-single">
                        <div class="comment-single-media">
                            <?php comments_template(); ?> 
                        </div>
                    </div>
                <?php } ?>
		<?php endwhile; endif; ?>    
	</div>

<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>