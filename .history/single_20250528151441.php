<?php get_header(); ?>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="single-post-content bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Post Header -->
                <header class="post-header p-8 border-b border-gray-100">
                    <div class="post-meta text-sm text-gray-500 mb-4">
                        <span class="mr-4">
                            <i class="far fa-calendar-alt mr-1"></i>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="mr-4">
                            <i class="far fa-user mr-1"></i>
                            <?php the_author(); ?>
                        </span>
                        <?php if (get_the_category()) : ?>
                            <span>
                                <i class="far fa-folder mr-1"></i>
                                <?php the_category(', '); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="text-4xl font-bold text-gray-800 mb-4"><?php the_title(); ?></h1>
                    
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail rounded-lg overflow-hidden mb-6">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <!-- Post Content -->
                <div class="post-content p-8 prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>

                <!-- Post Footer -->
                <footer class="post-footer p-8 border-t border-gray-100">
                    <?php if (get_the_tags()) : ?>
                        <div class="post-tags mb-6">
                            <h3 class="text-sm font-semibold text-gray-700 mb-3">Tags:</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '" class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-blue-50 hover:text-blue-600 transition-colors duration-300">' . $tag->name . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Author Bio -->
                    <div class="author-bio bg-gray-50 rounded-lg p-6 mb-8">
                        <div class="flex items-center mb-4">
                            <?php echo get_avatar(get_the_author_meta('ID'), 60, '', '', ['class' => 'rounded-full mr-4']); ?>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800"><?php the_author(); ?></h3>
                                <p class="text-gray-600 text-sm"><?php the_author_meta('description'); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Post Navigation -->
                    <nav class="post-navigation flex justify-between items-center pt-6 border-t border-gray-100">
                        <div class="prev-post">
                            <?php previous_post_link('<div class="text-sm text-gray-500 mb-1">Previous Post</div><div class="text-blue-600 hover:text-blue-800 transition-colors duration-300">%link</div>'); ?>
                        </div>
                        <div class="next-post text-right">
                            <?php next_post_link('<div class="text-sm text-gray-500 mb-1">Next Post</div><div class="text-blue-600 hover:text-blue-800 transition-colors duration-300">%link</div>'); ?>
                        </div>
                    </nav>
                </footer>
            </article>

            <!-- Comments Section -->
            <div class="comments-section mt-8 bg-white rounded-lg shadow-lg p-8">
                <?php comments_template(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
