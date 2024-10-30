<?php
/**
 * Generates an HTML button with specified properties.
 *
 * @param string $text The text to display on the button.
 * @param string $url The URL the button will link to.
 * @param string $mode The button mode (e.g., 'light', 'dark'). Default is 'dark'.
 * @param string $custom_classes Additional custom classes to apply to the button.
 * @return string The generated HTML for the button.
 */
function button($text, $url, $mode = 'dark', $custom_classes = '') {

    // Define button style based on $mode (dark, secondary)
    if ($mode === 'dark') {
        $classes = 'block w-fit px-10 py-3 my-8 mx-auto bg-primary text-neutral-50 font-semibold rounded-full hover:bg-[#555555] active:bg-[#333333] transition duration-300 ' . ' ' . esc_attr($custom_classes);
    } elseif ($mode === 'light') {
        $classes = 'block w-fit px-10 py-3 my-8 mx-auto bg-[#FFFFFF] text-neutral-900 font-semibold rounded-full hover:bg-gray-200 active:bg-gray-300 transition duration-300 ' . ' ' . esc_attr($custom_classes);
    }

    // Render the button with text and link
    echo '<a href="' . esc_url($url) . '" class="' . $classes . '">' . esc_html($text) . '</a>';
}