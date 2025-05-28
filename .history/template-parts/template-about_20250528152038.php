<?php
/*
Template Name: About
*/
get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="relative bg-gradient-to-r from-primary to-blue-900 text-white py-16">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
                <p class="text-xl text-gray-100">Your trusted partner in AI-powered content creation</p>
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

    <!-- Team Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Meet the experts behind AI Content Crew</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'posts_per_page' => 3
                );
                $team_query = new WP_Query($args);
                
                if ($team_query->have_posts()) :
                    while ($team_query->have_posts()) : $team_query->the_post();
                ?>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-w-1 aspect-h-1">
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800"><?php the_title(); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo get_field('position'); ?></p>
                            <div class="text-gray-700">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Values</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">What drives us to deliver excellence</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Innovation</h3>
                    <p class="text-gray-600">Constantly pushing boundaries to deliver cutting-edge solutions</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-2xl text-tenetlygreen"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Collaboration</h3>
                    <p class="text-gray-600">Working together to achieve exceptional results</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-star text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Excellence</h3>
                    <p class="text-gray-600">Committed to delivering the highest quality in everything we do</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Content?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join us in revolutionizing content creation with AI</p>
            <a href="/signup" class="inline-block bg-white text-primary px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Get Started Now
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
