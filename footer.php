<footer class="bg-black py-6 text-white mt-auto w-full">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
        <div class="flex flex-col items-start gap-2">
            <a href="https://dreamwaymedia.com" target="_blank" class="hover:opacity-80 transition-opacity">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dreamway-media-logo.png" alt="Dreamway Media Logo" class="h-8 w-auto">
            </a>
            <p class="text-xs text-white opacity-80">&copy; <?php echo date('Y'); ?> - AI Content Crew. All content is powered by OpenAI. All rights reserved.</p>
        </div>
            <nav class="footer-navigation">
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'flex items-center space-x-6',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'          => 1
                    )); 
                } else {
                    echo '<ul class="flex space-x-6">';
                    echo '<li><a href="#" class="hover:text-gray-300 transition-colors">Privacy Policy</a></li>';
                    echo '<li><a href="#" class="hover:text-gray-300 transition-colors">Terms of Service</a></li>';
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