<?php get_header(); ?> <!-- ouvrir header,php -->
<div class="row">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); 
            $postmetadata_posts_article = get_post_meta($post->ID,'_show_postmetadata_posts',true);
            $tags_posts_article = get_post_meta($post->ID,'_show_tags_posts',true);
            $authors_posts_article = get_post_meta($post->ID,'_show_authors_posts',true);
            $related_posts_article = get_post_meta($post->ID,'_show_related_posts',true);
            $comments_posts_article = get_post_meta($post->ID,'_show_comments_posts',true);        
        ?>
			<div class="borderbottomheadersingle">
				<div class="title-single">
					<?php the_title(); ?>
				</div>
                <?php if ($postmetadata_posts_article == 'yes-postmetadata-posts') { ?>
                    <div class="postmetadata-single">
                        <span><i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?></span>
                        <i class="point"></i>
                        <span><i class="author-slider"></i><?php the_author_posts_link(); ?> </span>
                        <i class="point"></i>
                        <span><i class="comment-single"></i><?php comments_number( __('no Responses', 'clesarmedia'), __('1 Responses', 'clesarmedia'), __('% Responses', 'clesarmedia') );?></span>
                    </div>
                <?php }
                if ($postmetadata_posts_article != 'no-postmetadata-posts' && $postmetadata_posts_article != 'yes-postmetadata-posts') { ?>
                    <div class="postmetadata-single">
                        <span><i class="fa fa-clock-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?></span>
                        <i class="point"></i>
                        <span><i class="author-slider"></i><?php the_author_posts_link(); ?> </span>
                        <i class="point"></i>
                        <span><i class="comment-single"></i><?php comments_number( __('no Responses', 'clesarmedia'), __('1 Responses', 'clesarmedia'), __('% Responses', 'clesarmedia') );?></span>
                    </div>
                <?php } ?>
			</div>
			<div class="content-gallery-single">
				<p><?php the_content(); ?></p>
                <?php if ($tags_posts_article == 'yes-tags-posts') { ?>
                    <div class="single-tags">
                        <?php the_tags('Tags  : &nbsp;&nbsp;&nbsp;','<i class="popinttags"></i>'); ?>
                    </div>
                <?php }
                if ($tags_posts_article != 'no-tags-posts' && $tags_posts_article != 'yes-tags-posts') { ?>
                    <div class="single-tags">
                        <?php the_tags('Tags  : &nbsp;&nbsp;&nbsp;','<i class="popinttags"></i>'); ?>
                    </div>    
                <?php } ?>
			</div>
            <?php if ($authors_posts_article == 'yes-authors-post') { ?>
                <div class="Author-single">
                    <?php get_template_part( 'author-single'); ?>
                </div>
            <?php }
            if ($authors_posts_article != 'no-authors-post' && $authors_posts_article != 'yes-authors-post') { ?>
                <div class="Author-single">
                    <?php get_template_part( 'author-single'); ?>
                </div>
            <?php } ?>
			<div class="next-post"><?php next_posts_link(); ?></div>
            <?php if ($related_posts_article == 'yes-related-post') { ?>
                <div class="posts-similar">
                    <?php get_template_part( 'posts-similar'); ?>			
                </div>
            <?php }
            if ($related_posts_article != 'no-related-post' && $related_posts_article != 'yes-related-post') { ?>
                <div class="posts-similar">
                    <?php get_template_part( 'posts-similar'); ?>			
                </div>
            <?php } ?>
            <?php if ($comments_posts_article == 'yes-comments-post') { ?>
                <div class="container-comment-single">
                    <div class="comment-single-media">
                        <?php comments_template(); ?> 
                    </div>
                </div>
            <?php }
            if ($comments_posts_article != 'no-comments-post' && $comments_posts_article != 'yes-comments-post') { ?>
                <div class="container-comment-single">
                    <div class="comment-single-media">
                        <?php comments_template(); ?> 
                    </div>
                </div>     
            <?php } ?>
	    <?php endwhile; ?>
	    <?php else : ?>
	    <p><?php _e("Sorry, no article corresponds in Your criteria.", "clesarmedia"); ?></p>
	    <?php endif; ?> 
	</div>
	<div class="sidebar-layout1">
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>
