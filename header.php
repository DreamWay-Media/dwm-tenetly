<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="w-full text-white bg-black">
        <div class="container px-4 py-6 mx-auto">
            <!-- Top bar with logo and hamburger -->
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex gap-2 items-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tenetly-on-black.svg" alt="Tenetly Logo" class="w-auto h-10">
                    </a>
                    <span class="hidden gap-2 items-center md:flex">
                        by 
                        <a href="https://dreamwaymedia.com" target="_blank" class="transition-opacity hover:opacity-80">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dreamway-media-logo.png" alt="Dreamway Media Logo" class="w-auto h-10">
                        </a>
                    </span>
                </div>

                <!-- Hamburger Menu Button - Only visible on mobile -->
                <button id="mobile-menu-button" class="block p-2 rounded-md md:hidden hover:bg-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Desktop Menu - Only visible on desktop -->
                <div class="hidden md:block">
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
                </div>
            </div>

            <!-- Mobile Menu - Hidden by default, toggled by JavaScript -->
            <div id="mobile-menu" class="hidden pb-4 mt-4 md:hidden">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'flex flex-col space-y-4',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'          => 1,
                    'link_class'     => 'text-sm text-white hover:text-gray-300 transition-colors block',
                ));
                ?>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
