<?php
/*
Template Name: Blog
*/
get_header(); ?>

<main class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">Latest Articles</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged' => $paged
        );
        
        $query = new WP_Query($args);
        
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="blog-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-card-image">
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                    </div>
                <?php endif; ?>
                
                <div class="blog-card-content">
                    <h2 class="blog-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    
                    <div class="blog-card-meta">
                        <span class="mr-4">
                            <i class="far fa-calendar-alt mr-1"></i>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span>
                            <i class="far fa-user mr-1"></i>
                            <?php the_author(); ?>
                        </span>
                    </div>
                    
                    <div class="blog-card-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>" class="blog-card-link">
                        Read More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </article>
        <?php
            endwhile;
            
            // Pagination
            echo '<div class="col-span-full mt-12">';
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $query->max_num_pages,
                'prev_text' => '<i class="fas fa-chevron-left"></i>',
                'next_text' => '<i class="fas fa-chevron-right"></i>',
                'type' => 'list',
                'class' => 'pagination'
            ));
            echo '</div>';
            echo '</div>';
            
            wp_reset_postdata();
        else :
        ?>
            <div class="col-span-full text-center py-12">
                <p class="text-gray-600 text-lg">No posts found.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
