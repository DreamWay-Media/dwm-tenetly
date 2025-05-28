<?php
/*
Template Name: CMS Page
*/
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="relative bg-gradient-to-r from-primary to-blue-900 text-white py-16">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                <?php if (get_field('page_subtitle')): ?>
                    <p class="text-xl text-gray-100"><?php echo get_field('page_subtitle'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php if (get_field('show_cta_section')): ?>
    <!-- CTA Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6"><?php echo get_field('cta_title'); ?></h2>
                <p class="text-xl text-gray-600 mb-8"><?php echo get_field('cta_description'); ?></p>
                <a href="<?php echo get_field('cta_button_link'); ?>" class="inline-block bg-primary text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-800 transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <?php echo get_field('cta_button_text'); ?>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?> 