<?php 
/*
Template Name: Coming Soon
*/
get_header('blank'); ?>

<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer('blank'); ?>