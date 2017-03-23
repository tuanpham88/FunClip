<?php get_header(); ?> <!-- ouvrir header,php -->
<div class="contenttagspage">
	<div class="contenttagspageleft">
		<h2><?php __('Tags', 'clesarmedia') ?> - <?php single_tag_title(); ?></h2>
<?php
while (have_posts()) { the_post(); ?>
		<div class="cat-item">
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
        	<div class="format-category1">
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
				if ( has_post_format('gallery')) { ?>
				<div class="gallery-format-cat1">
					  <i class="fa fa-bookmark"></i>
					  <i class="fa fa-link"></i>
					  <i class="fa fa-picture-o"></i>
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
				}
				?>
        	</div>
        	<div class="clear"></div>
		</div>
	<?php } ?>

	</div>
	<div class="sidebar-layout1">
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>