<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="bg-black p-4 text-white flex justify-between items-center">
        <div class="site-logo flex items-center gap-2">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class=" text-2xl font-bold">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tenetly-on-black.svg" alt="Tenetly Logo" class="h-10 w-auto">
                </a>
                <span class="flex items-center gap-2">
                    by 
                    <a href="https://dreamwaymedia.com" target="_blank" class="hover:opacity-80 transition-opacity">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dreamway-media-logo.png" alt="Dreamway Media Logo" class="h-10 w-auto">
                    </a>
                </span> 
            <?php endif; ?>
        </div>
        <nav class="site-navigation">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'flex items-center space-x-6',
                'container'      => false,
                'fallback_cb'    => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'          => 1,
                'link_class'     => 'text-sm text-white hover:text-gray-300 transition-colors',

            ));
            ?>
        </nav>
    </header>
