<?php
/*
Template Name: CMS Page
*/
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="relative py-16 text-white bg-gradient-to-r to-blue-900 from-primary">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container relative z-10 px-4 mx-auto">
            <div class="mx-auto max-w-4xl text-center">
                <h1 class="mb-4 text-4xl font-bold md:text-5xl"><?php the_title(); ?></h1>
                <?php 
                $subtitle = get_field('page_subtitle');
                if ($subtitle): ?>
                    <p class="text-xl text-gray-100"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="container px-4 mx-auto">
            <div class="mx-auto max-w-4xl">
                <div class="max-w-none prose prose-lg">
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
    $show_cta = get_field('show_cta_section');
    $cta_title = get_field('cta_title');
    $cta_description = get_field('cta_description');
    $cta_button_link = get_field('cta_button_link');
    $cta_button_text = get_field('cta_button_text');

    if ($show_cta && $cta_title && $cta_description && $cta_button_link && $cta_button_text): 
    ?>
    <!-- CTA Section -->
    <section class="py-16 bg-gray-50">
        <div class="container px-4 mx-auto">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="mb-6 text-3xl font-bold"><?php echo esc_html($cta_title); ?></h2>
                <p class="mb-8 text-xl text-gray-600"><?php echo esc_html($cta_description); ?></p>
                <a href="<?php echo esc_url($cta_button_link); ?>" class="inline-block px-8 py-4 font-semibold text-white rounded-lg shadow-lg transition-colors duration-300 transform bg-primary hover:bg-blue-800 hover:shadow-xl hover:-translate-y-1">
                    <?php echo esc_html($cta_button_text); ?>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?> 