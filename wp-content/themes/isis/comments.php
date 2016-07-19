	<?php
/**
 * The template for displaying Comments
 * The area of the page that contains comments and the comment form.
 
  */
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;


?>
<?php if (post_password_required()) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view any comments.', 'isis'); ?></p>
	<?php return; } ?>

<?php if (have_comments()) { ?>
    <h6 id="comments">
        <?php
            printf( _n('Một comment cho &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'isis'),
                number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
        ?>
    </h6>
    <ol class="commentlist">
        <?php wp_list_comments('avatar_size=60&type=comment'); ?>
    </ol>
    
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
        <div class="navigation">
            <div class="previous"><?php previous_comments_link(__( '&#8249; Older comments','isis' )); ?></div>
            <div class="next"><?php next_comments_link(__( 'Newer comments &#8250;','isis', 0 )); ?></div>
        </div>
    <?php }
    }
    if (!empty($comments_by_type['pings'])) { // let's seperate pings/trackbacks from comments
        $count = count($comments_by_type['pings']);
        ($count !== 1) ? $txt = __('Pings&#47;Trackbacks','isis') : $txt = __('Pings&#47;Trackbacks','isis');
    ?>
        <h6 id="pings"><?php printf( __( '%1$d %2$s for "%3$s"', 'isis' ), $count, $txt, get_the_title() )?></h6>
        <ol class="commentlist">
            <?php wp_list_comments('type=pings&max_depth=<em>'); ?>
        </ol>
    <?php } ?>
    <div id="respond" class="comment-respond">
        <?php
            if (comments_open()) {
                $fields = array(
                    'author' => '<p class="comment-form-author"><label for="author">Name</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" /></p>',
                    'email' => '<p class="comment-form-email"><label for="email">E-mail</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" /></p>',
                    'url' => '<p class="comment-form-url"><label for="url">Website</label>' .
                    '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>',
                );
                $defaults = array(
                    'fields' => apply_filters('comment_form_default_fields', $fields),
                    'comment_field' => '<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="1" aria-required="true"></textarea></p>',
                    'must_log_in' => '<p class="must-log-in">' .  sprintf(('Bạn cần phải <a href="%s">đăng nhập</a> để comment.'), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
                    'logged_in_as' => '<p class="logged-in-as">' . sprintf(('Xin chào <a href="%1$s">%2$s</a>. <a href="%3$s" title="Đăng xuất">Đăng xuất?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
                    'label_submit' => 'Post Comment',
                    'title_reply' => 'Để lại comment'
                );
                comment_form($defaults);
            }
        ?>
    </div>