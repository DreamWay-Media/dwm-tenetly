<?php
// Theme setup
function skeleton_theme_setup() {
    // Add support for dynamic title tags
    add_theme_support('title-tag');
    
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 50,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Add support for comments
    add_theme_support('html5', array('comment-list', 'comment-form'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'skeleton'),
        'footer' => __('Footer Menu', 'skeleton'),
    ));
}
add_action('after_setup_theme', 'skeleton_theme_setup');

// Gather modular components here from inc/components/
foreach (glob(__DIR__ . '/inc/components/*.php') as $file) {
    require_once $file;
}

// Enqueue styles and scripts
function skeleton_enqueue_assets() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/main.css', array(), null);
}
add_action('wp_enqueue_scripts', 'skeleton_enqueue_assets');

/**
 * Enqueue theme styles and scripts
 */
function dwm_tenetly_enqueue_scripts() {
    // Enqueue main CSS file
    wp_enqueue_style(
        'dwm-tenetly-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );
}
add_action('wp_enqueue_scripts', 'dwm_tenetly_enqueue_scripts');

/**
 * Customize the post navigation text
 */
function custom_post_navigation_text($link, $text) {
    return str_replace('%link', $text, $link);
}
add_filter('previous_post_link', function($link) {
    return custom_post_navigation_text($link, 'Previous Post');
});
add_filter('next_post_link', function($link) {
    return custom_post_navigation_text($link, 'Next Post');
});

/**
 * Customize comment form fields
 */
function customize_comment_form_fields($fields) {
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? " aria-required='true'" : '');

    $fields['author'] = '<div class="mb-4">
        <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Name ' . ($req ? '<span class="text-red-500">*</span>' : '') . '</label>
        <input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-tenetlygreen focus:border-tenetlygreen" />
    </div>';

    $fields['email'] = '<div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email ' . ($req ? '<span class="text-red-500">*</span>' : '') . '</label>
        <input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-tenetlygreen focus:border-tenetlygreen" />
    </div>';

    $fields['url'] = '<div class="mb-4">
        <label for="url" class="block text-sm font-medium text-gray-700 mb-1">Website</label>
        <input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-tenetlygreen focus:border-tenetlygreen" />
    </div>';

    return $fields;
}
add_filter('comment_form_default_fields', 'customize_comment_form_fields');

/**
 * Customize comment form
 */
function customize_comment_form($defaults) {
    $defaults['comment_field'] = '<div class="mb-4">
        <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Comment <span class="text-red-500">*</span></label>
        <textarea id="comment" name="comment" rows="6" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-tenetlygreen focus:border-tenetlygreen"></textarea>
    </div>';

    $defaults['submit_button'] = '<button type="submit" class="px-6 py-3 bg-tenetlygreen text-white rounded-lg hover:bg-opacity-90 transition-colors duration-300">Post Comment</button>';

    $defaults['comment_notes_before'] = '<p class="text-sm text-gray-600 mb-4">Your email address will not be published. Required fields are marked <span class="text-red-500">*</span></p>';

    $defaults['title_reply'] = '<h3 class="text-2xl font-bold text-gray-800 mb-6">Leave a Comment</h3>';

    return $defaults;
}
add_filter('comment_form_defaults', 'customize_comment_form');

/**
 * Customize comment list
 */
function customize_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class('mb-6'); ?>>
        <div class="flex">
            <div class="flex-shrink-0 mr-4">
                <?php echo get_avatar($comment, 60, '', '', ['class' => 'rounded-full']); ?>
            </div>
            <div class="flex-grow">
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center mb-2">
                        <h4 class="text-sm font-semibold text-gray-800 mr-2"><?php comment_author_link(); ?></h4>
                        <span class="text-sm text-gray-500"><?php comment_date(); ?></span>
                    </div>
                    <div class="text-gray-700">
                        <?php comment_text(); ?>
                    </div>
                </div>
                <div class="mt-2">
                    <?php
                    comment_reply_link(array_merge($args, array(
                        'reply_text' => 'Reply',
                        'depth' => $depth,
                        'max_depth' => $args['max_depth'],
                        'before' => '<span class="text-sm text-tenetlygreen hover:text-opacity-80 transition-colors duration-300">',
                        'after' => '</span>'
                    )));
                    ?>
                </div>
            </div>
        </div>
    </li>
    <?php
}
