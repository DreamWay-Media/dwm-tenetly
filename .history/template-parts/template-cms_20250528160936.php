<?php
/**
 * Template Name: CMS Page
 * 
 * @package dwm-tenetly
 */

// Ensure this file is being included by WordPress
if (!defined('ABSPATH')) {
    exit;
}

get_header(); 
?>

<main>
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-overlay"></div>
        <div class="page-header-container">
            <div class="page-header-content">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php 
                $subtitle = get_post_meta(get_the_ID(), 'page_subtitle', true);
                if (!empty($subtitle)): ?>
                    <p class="page-subtitle"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content-section">
        <div class="content-container">
            <div class="content-wrapper">
                <div class="content-prose">
                    <?php 
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $show_cta = get_post_meta(get_the_ID(), 'show_cta_section', true);
    $cta_title = get_post_meta(get_the_ID(), 'cta_title', true);
    $cta_description = get_post_meta(get_the_ID(), 'cta_description', true);
    $cta_button_link = get_post_meta(get_the_ID(), 'cta_button_link', true);
    $cta_button_text = get_post_meta(get_the_ID(), 'cta_button_text', true);

    if (!empty($show_cta) && !empty($cta_title) && !empty($cta_description) && !empty($cta_button_link) && !empty($cta_button_text)): 
    ?>
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-container">
            <div class="cta-wrapper">
                <h2 class="cta-title"><?php echo esc_html($cta_title); ?></h2>
                <p class="cta-description"><?php echo esc_html($cta_description); ?></p>
                <a href="<?php echo esc_url($cta_button_link); ?>" class="cta-button">
                    <?php echo esc_html($cta_button_text); ?>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?> 