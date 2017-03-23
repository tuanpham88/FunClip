<?php
if ( ! isset( $content_width ) ) {
	$content_width = 700;
}

if ( ! function_exists( 'clesarmedia_setup' ) ) :

function clesarmedia_setup() {

    // Menus de navigation
    register_nav_menus(array(
        'Top' => __('top-navigation', 'clesarmedia'),'header' => __('Menu principal (header)', 'clesarmedia')
    ));

    load_theme_textdomain( 'clesarmedia', get_template_directory() . '/languages' );


    // La ligne qui nous intéresse !
    add_theme_support( 'post-formats', array( 'aside', 'quote', 'image', 'video', 'audio', 'link' ) );

    global $wp_version;
    if ( version_compare( $wp_version, '4.1', '>=' ) ) :
        add_theme_support( 'automatic-feed-links' );
    endif;

    add_theme_support( 'post-thumbnails' );

    add_theme_support ( 'title-tag'  );
    $args = array(
        'default-color' => '#efefef',
        'default-image' => get_template_directory_uri() . '/images/bg.png',
    );
    add_theme_support( 'custom-background', $args );

    $args = array(
        'width'         => 215,
        'height'        => 70,
        'default-image' => get_template_directory_uri() . '/images/ClesarMediaLogo.png',
        'uploads'       => true,
    );
    add_theme_support( 'custom-header', $args );


    /**
     * Customizer additions.
     */
    require get_template_directory() . '/inc/customizer.php';

  if (class_exists('WP_Customize_Control')) {
        class clesarmedia_WP_Customize_Category_Control extends WP_Customize_Control {
            /**
             * Render the control's content.
             *
             * @since 3.4.0
             */
            public function render_content() {
                $dropdown = wp_dropdown_categories(
                    array(
                        'name'              => '_customize-dropdown-categories-' . $this->id,
                        'echo'              => 0,
                        'show_option_none'  => __( '&mdash; Select &mdash;', 'clesarmedia' ),
                        'option_none_value' => '0',
                        'selected'          => $this->value(),
                    )
                );

                // Hackily add in the data link parameter.
                $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

                printf(
                    '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                    $this->label,
                    $dropdown
                );
            }
        }
    }

}
endif; // clesarmedia_setup
add_action( 'after_setup_theme', 'clesarmedia_setup' );

    // Limite de caracteres
    function clesarmedia_excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'<div id="readmore"><a href="'. get_permalink( get_the_ID() ) .'">'. __( "Continue Reading", "clesarmedia" ) .'</a></div>';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
    }

    function clesarmedia_new_title($after = '', $length) {
       $shtitle = explode(' ', get_the_title(), $length);
       if (count($shtitle)>=$length) {
           array_pop($shtitle);
           $shtitle = implode(" ",$shtitle). $after;
       } else {
           $shtitle = implode(" ",$shtitle);
       }
           return $shtitle;
    }

    function clesarmedia_comment($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment; ?>
       <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
         <div class="contentcomment" id="comment-<?php comment_ID(); ?>">
          <div class="comment-author vcard">
             <?php echo get_avatar($comment,$size='80',$default='<path_to_url>' ); ?>
             <span class="fn n"><?php $commenter = get_comment_author_link(); echo $commenter; ?>
             <?php if($args['type'] == 'all' || get_comment_type() == 'comment') :
                      comment_reply_link(array_merge($args, array(
                          'reply_text' => __('<i class="reply-singlecomment"></i>Reply', 'clesarmedia'),
                          'login_text' => __('Log in to reply.', 'clesarmedia'),
                          'depth' => $depth,
                          'before' => '<div class="comment-reply-link">',
                          'after' => '</div>'
                      )));
                   endif; ?>
             </span>
          </div>
          <?php if ($comment->comment_approved == '0') : ?>
             <em><?php _e('Your comment is awaiting moderation.', 'clesarmedia') ?></em>
             <br />
          <?php endif; ?>
          <div class="comment-meta"><p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e(' ago', 'clesarmedia'); ?>	</p></div>
          <div class="comment-content"><p><?php comment_text(); ?></p></div>
         </div>
         <div class="clear"></div>
    <?php }

    function clesarmedia_disable_comment_url($fields) {
        unset($fields['url']);
        return $fields;
    }
    add_filter('comment_form_default_fields','clesarmedia_disable_comment_url');

/**
 * Register widget area.
 *
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */


function clesarmedia_widgets_init() {
	    register_sidebar(array(
		'name' => __('sidebar', 'clesarmedia'),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="sidebarwidgettitle"><span>',
		'after_title' => '</span></h4>',
	    ));
	    register_sidebar(array(
		'name' => __('Footer Widgets Left', 'clesarmedia'),
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	    ));
		register_sidebar(array(
		'name' => __('Footer Widgets Center', 'clesarmedia'),
		'id' => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
		));
		register_sidebar(array(
		'name' => __('Footer Widgets Right', 'clesarmedia'),
		'id' => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
		));
}
add_action( 'widgets_init', 'clesarmedia_widgets_init' );

function clesarmedia_scripts() {

    //script menu
    wp_enqueue_script( 'clesarmedia-menu-responsive', get_template_directory_uri() . '/js/menu.js', array(), '20151018', false );

    //script menu 2
    wp_enqueue_script( 'clesarmedia-menu2-responsive', get_template_directory_uri() . '/js/menu2.js', array(), '20151018', false );

    //all script minified
    wp_enqueue_script( 'clesarmedia-script', get_template_directory_uri() . '/js/clesarmedia-script.js', array(), '20151018', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clesarmedia_scripts' );
function clesarmedia_theme_css() {
    wp_enqueue_style( 'clesarmedia-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'clesarmedia_theme_css' );
function clesarmedia_load_fonts(){
    // all google fonts
    wp_register_style('clesarmedia-googleFonts', 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700|Roboto+Slab:400,300,700|Open+Sans:400,300,600,700,800|Crimson+Text:400,600,700');
    wp_enqueue_style( 'clesarmedia-googleFonts');
    // font awesome for icon
    wp_register_style('clesarmedia-fontawesomemin', get_template_directory_uri() . '/font/font-awesome.min.css');
    wp_enqueue_style( 'clesarmedia-fontawesomemin');
}
add_action('wp_print_styles', 'clesarmedia_load_fonts');
function clesarmedia_admin_notice() {
    ?>
    <div class="updated notice is-dismissible">
        <p><a href="<?php echo esc_url( __( 'http://www.mhthemes.com/support/documentation-clesarmedia/', 'clesarmedia' ) ); ?>" target="_blank">CLESARMEDIA DOCUMENTATION</a> | <a href="<?php echo esc_url( __( 'http://www.eightpixeldesign.com/wordpress-themes/', 'clesarmedia' ) ); ?>" target="_blank">VIEW OUR THEMES</a></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'clesarmedia_admin_notice' );



/* Metabox layout Page */
add_action('add_meta_boxes','init_metabox');
function init_metabox(){
  add_meta_box('dispo_produit', 'ClesarMedia Parameters', 'dispo_produit', 'page', 'side', 'high');
}
function dispo_produit($post){
    $postmetapage = get_post_meta($post->ID,'_show_post_meta_page',true);
    $authorpage   = get_post_meta($post->ID,'_show_authors_page',true);
    $commentpage  = get_post_meta($post->ID,'_show_comment_page',true);
    echo '<br>';
    echo 'Show postmetadata in this page ?';
    echo '<br>';
    echo '<select name="show_post_meta_page" class="sected-layout">';
    echo '<option ' . selected( 'yes-post-meta-page', $postmetapage, false ) . ' value="yes-post-meta-page">Yes</option>';
    echo '<option ' . selected( 'no-post-meta-page', $postmetapage, false ) . ' value="no-post-meta-page">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
    echo 'Show Authors in this page ?';
    echo '<br>';
    echo '<select name="show_authors_page" class="sected-layout">';
    echo '<option ' . selected( 'yes-authors_page', $authorpage, false ) . ' value="yes-authors_page">Yes</option>';
    echo '<option ' . selected( 'no-authors_page', $authorpage, false ) . ' value="no-authors_page">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
    echo 'Show Comments in this page ?';
    echo '<br>';
    echo '<select name="show_comment_page" class="sected-layout">';
    echo '<option ' . selected( 'yes-comments-page', $commentpage, false ) . ' value="yes-comments-page">Yes</option>';
    echo '<option ' . selected( 'no-comments-page', $commentpage, false ) . ' value="no-comments-page">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
}
add_action('save_post','save_metabox');
function save_metabox($post_id){
    if(isset($_POST['show_post_meta_page']))
      update_post_meta($post_id, '_show_post_meta_page', $_POST['show_post_meta_page']);
    if(isset($_POST['show_authors_page']))
      update_post_meta($post_id, '_show_authors_page', $_POST['show_authors_page']);
    if(isset($_POST['show_comment_page']))
      update_post_meta($post_id, '_show_comment_page', $_POST['show_comment_page']);
}


/* Metabox layout Article */
add_action('add_meta_boxes','init_metabox_2');
function init_metabox_2(){
  add_meta_box('layout_article', 'ClesarMedia Parameters', 'layout_article', 'post', 'side', 'high');
}
function layout_article($post){
    $postmetadata_posts_article = get_post_meta($post->ID,'_show_postmetadata_posts',true);
    $tags_posts_article = get_post_meta($post->ID,'_show_tags_posts',true);
    $authors_posts_article = get_post_meta($post->ID,'_show_authors_posts',true);
    $related_posts_article = get_post_meta($post->ID,'_show_related_posts',true);
    $comments_posts_article = get_post_meta($post->ID,'_show_comments_posts',true);
    echo '<br>';
    echo 'Show Postmetadata in this post ?';
    echo '<br>';
    echo '<select name="show_postmetadata_posts" class="sected-layout">';
    echo '<option ' . selected( 'yes-postmetadata-posts', $postmetadata_posts_article, false ) . ' value="yes-postmetadata-posts">Yes</option>';
    echo '<option ' . selected( 'no-postmetadata-posts', $postmetadata_posts_article, false ) . ' value="no-postmetadata-posts">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
    echo 'Show Tags in this post ?';
    echo '<br>';
    echo '<select name="show_tags_posts" class="sected-layout">';
    echo '<option ' . selected( 'yes-tags-posts', $tags_posts_article, false ) . ' value="yes-tags-posts">Yes</option>';
    echo '<option ' . selected( 'no-tags-posts', $tags_posts_article, false ) . ' value="no-tags-posts">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
    echo 'Show Authors in this post ?';
    echo '<br>';
    echo '<select name="show_authors_posts" class="sected-layout">';
    echo '<option ' . selected( 'yes-authors-post', $authors_posts_article, false ) . ' value="yes-authors-post">Yes</option>';
    echo '<option ' . selected( 'no-authors-post', $authors_posts_article, false ) . ' value="no-authors-post">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
    echo 'Show Related Posts in this post ?';
    echo '<br>';
    echo '<select name="show_related_posts" class="sected-layout">';
    echo '<option ' . selected( 'yes-related-post', $related_posts_article, false ) . ' value="yes-related-post">Yes</option>';
    echo '<option ' . selected( 'no-related-post', $related_posts_article, false ) . ' value="no-related-post">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
    echo 'Show Comments in this post ?';
    echo '<br>';
    echo '<select name="show_comments_posts" class="sected-layout">';
    echo '<option ' . selected( 'yes-comments-post', $comments_posts_article, false ) . ' value="yes-comments-post">Yes</option>';
    echo '<option ' . selected( 'no-comments-post', $comments_posts_article, false ) . ' value="no-comments-post">No</option>';
    echo '</select>';
    echo '<br>';
    echo '<br>';
}
add_action('save_post','save_metabox_2');
function save_metabox_2($post_id){
    if(isset($_POST['show_postmetadata_posts']))
      update_post_meta($post_id, '_show_postmetadata_posts', $_POST['show_postmetadata_posts']);
    if(isset($_POST['show_tags_posts']))
      update_post_meta($post_id, '_show_tags_posts', $_POST['show_tags_posts']);
    if(isset($_POST['show_authors_posts']))
      update_post_meta($post_id, '_show_authors_posts', $_POST['show_authors_posts']);
    if(isset($_POST['show_related_posts']))
      update_post_meta($post_id, '_show_related_posts', $_POST['show_related_posts']);
    if(isset($_POST['show_comments_posts']))
      update_post_meta($post_id, '_show_comments_posts', $_POST['show_comments_posts']);
}