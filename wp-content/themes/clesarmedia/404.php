<?php 
/**
 * The 404 template file
**/
?>
<?php get_header(); ?> <!-- ouvrir header,php -->
    <div id="nopost-container">
        <div class="elsesearchnopostscontainer">          
            <div class="elsesearchnoposts">           
                <h1><?php _e("Sorry, the page you asked for couldn't be found.	Please, try to use the search form below.", "clesarmedia"); ?></h1>
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
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>