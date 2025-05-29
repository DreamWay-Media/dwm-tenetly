<?php
/**
 * The template for displaying comments
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// If the current post is protected by a password and the visitor has not yet entered the password, return early
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h3 class="text-2xl font-bold text-gray-800 mb-6">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                printf(
                    esc_html__('One comment on &ldquo;%1$s&rdquo;', 'dwm-tenetly'),
                    get_the_title()
                );
            } else {
                printf(
                    esc_html(_n('%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $comments_number, 'dwm-tenetly')),
                    number_format_i18n($comments_number),
                    get_the_title()
                );
            }
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 60,
                'callback'    => 'customize_comment_list'
            ));
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation flex justify-between items-center mt-8">
                <div class="nav-previous">
                    <?php previous_comments_link(__('Older Comments', 'dwm-tenetly')); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link(__('Newer Comments', 'dwm-tenetly')); ?>
                </div>
            </nav>
        <?php endif; ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments text-gray-600 mt-4"><?php esc_html_e('Comments are closed.', 'dwm-tenetly'); ?></p>
        <?php endif; ?>
    <?php endif; ?>

    <?php
    comment_form(array(
        'class_form'           => 'comment-form mt-8',
        'title_reply'          => __('Leave a Comment', 'dwm-tenetly'),
        'title_reply_before'   => '<h3 id="reply-title" class="text-2xl font-bold text-gray-800 mb-6">',
        'title_reply_after'    => '</h3>',
        'comment_notes_before' => '<p class="text-sm text-gray-600 mb-4">' . __('Your email address will not be published. Required fields are marked', 'dwm-tenetly') . ' <span class="text-red-500">*</span></p>',
        'submit_button'        => '<button type="submit" class="px-6 py-3 bg-tenetlygreen text-white rounded-lg hover:bg-opacity-90 transition-colors duration-300">%4$s</button>',
        'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
    ));
    ?>
</div>
