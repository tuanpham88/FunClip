<?php
/* ------------------------------------------------------------------------- *
 *  Full width page template
 *	___________________________________________________
 *
 *	Template name: Full Width Page
/* ------------------------------------------------------------------------- */

// Custom Post Classes
$classes = array(
    'single-template-1',
	'page-template-full',
    'clearfix'
);

get_header(); ?>

<section class="container<?php ac_mini_disabled() ?> clearfix">
        
    <div class="wrap-template-1 page-full-width clearfix">
        
        <section class="content-wrap clearfix" role="main">
            
            <section class="posts-wrap single-style-template-1 clearfix">
            
            <?php
                while ( have_posts() ) : the_post();
            ?>	
            
                <article id="page-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
                    <div class="post-content">
                    
                        <?php the_title( '<h2 class="title">', '</h2>' ); ?>
                        
                        <div class="single-content">
                            <?php the_content(); ?>
                        </div><!-- END .single-content -->
                    
                    </div>
                </article>
                
            <?php endwhile;	?>
            
            </section><!-- END .posts-wrap -->
            
        </section><!-- END .content-wrap -->
        
    </div><!-- END .wrap-template-1 -->
    
</section><!-- END .container -->
    
<?php get_footer(); ?>