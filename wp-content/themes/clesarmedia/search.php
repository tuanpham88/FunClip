<?php get_header(); ?> <!-- ouvrir header,php -->
    <?php if(have_posts()) : ?>
    <div id="contentsearch">
        <div class="contentsearchcontainer">
            <?php while(have_posts()) : the_post(); ?>
            <div class="searchpost" id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
                } 
                else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/blog-no-image.png" alt="no image posts" /> <?php }
                ?>                
            </a>
                <div class="postsearchcontent">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo clesarmedia_excerpt('40'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <center><?php wp_link_pages(); ?></center>
        </div>
        <div class="sidebar-layout1">
            <?php get_sidebar(); ?>
        </div>
    </div>
        <?php else : ?>  
    <div id="nopost-container">
        <div class="elsesearchnopostscontainer">          
            <div class="elsesearchnoposts">           
                <h1><?php _e("Sorry, the page you asked for couldn't be found.  Please, try to use the search form below.", "clesarmedia"); ?></h1>
                <?php get_search_form(); ?>
            </div>
            <div class="afterelsesearchnoposts">
                <p><?php _e("Here's a little map that might help you get back on track :", "clesarmedia"); ?></p>
                <div class="catsearch"><?php wp_list_categories('show_count=1'); ?></div>
                <div class="archivessearch"><li><?php _e('Archives', 'clesarmedia') ?></li><?php wp_get_archives( array( 'type' => 'daily', 'limit' => 16) ); ?></div>
                <div class="pagessearch"><li><?php _e('Pages', 'clesarmedia') ?></li><?php wp_list_pages('title_li='); ?></div>
            </div>
        </div>
        <div class="sidebar-layout1">
            <?php get_sidebar(); ?>
        </div>
    </div>
        <?php endif; ?>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>