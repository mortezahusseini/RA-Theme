
<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php if ( have_comments() ) : ?>
    <?php wp_list_comments('type=comment&avatar_size=80&callback=advanced_comment'); ?>
    <?php
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'صفحات دیدگاه', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; قدیمی تر', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'جدیدتر &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
    <?php endif; // Check for comment navigation ?>
<?php endif; // have_comments() ?>
