<footer class="w-full py-6 mt-auto text-white bg-black">
    <div class="container px-4 mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 md:gap-6">
            <!-- Logo and Copyright -->
            <div class="flex flex-col items-center md:items-start gap-2 text-center md:text-left order-2 md:order-none">
                <a href="https://dreamwaymedia.com" target="_blank" class="transition-opacity hover:opacity-80">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tenetly-on-black.svg" alt="Dreamway Media Logo" class="w-auto h-8">
                </a>
                <p class="text-xs text-white opacity-80">&copy; <?php echo date('Y'); ?> - Tenetly. All rights reserved.</p>
            </div>

            <!-- Navigation Menu -->
            <nav class="footer-navigation w-full md:w-auto order-1 md:order-none">
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'flex flex-col md:flex-row items-center justify-center md:justify-end space-y-4 md:space-y-0 md:space-x-6',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'          => 1
                    )); 
                } else {
                    echo '<ul class="flex flex-col md:flex-row items-center justify-center md:justify-end space-y-4 md:space-y-0 md:space-x-6">';
                    echo '<li><a href="#" class="transition-colors hover:text-gray-300">Privacy Policy</a></li>';
                    echo '<li><a href="#" class="transition-colors hover:text-gray-300">Terms of Service</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>
        </div>
        <?php wp_footer(); ?>
    </div>
</footer>
</body>
</html>