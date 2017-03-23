<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package clesarmedia
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf(
					_nx( 'Comment : One', 'Comments : %1$s', get_comments_number(), 'comments title', 'clesarmedia' ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'clesarmedia' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'clesarmedia' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'clesarmedia' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments('type=comment&callback=clesarmedia_comment');
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'clesarmedia' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'clesarmedia' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'clesarmedia' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() 
$comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
            'author' => '<div id="form-section-author" class="form-section"><div class="form-label"><label for="author">' . __("Name", "clesarmedia") . '</label><span class="required">*</span></div><div class="form-input"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="20" tabindex="3" /></div></div>',
            'email'  => '<div id="form-section-email" class="form-section"><div class="form-label"><label for="email">' . __("Email", "clesarmedia") . '</label><span class="required">*</span></div><div class="form-input"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="50" tabindex="4" /></div></div>',
    'url'    => '' ) ),
    'comment_field' => '<div id="form-section-comment" class="form-section">
         <div class="form-textarea"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment" tabindex="6"></textarea></div></div>',
    'comment_notes_after' => '',
);
comment_form($comment_args);
?>
</div><!-- #comments -->