<?php get_header(); ?>
<div class="container">

    <!-- Recent Texts Section -->
    <section class="home-section">
        <h2 class="section-title">Latest Texts</h2>
        <div class="post-grid">
            <?php $recent_texts = new WP_Query(['post_type' => 'text', 'posts_per_page' => 4]);
            if ($recent_texts->have_posts()) : while ($recent_texts->have_posts()) : $recent_texts->the_post(); ?>
                <?php get_template_part('template-parts/content-card', get_post_type()); ?>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </section>

    <!-- Recent Discourses Section -->
    <section class="home-section">
        <h2 class="section-title">Latest Discourses</h2>
        <div class="post-grid">
            <?php $recent_discourses = new WP_Query(['post_type' => 'discourse', 'posts_per_page' => 4]);
            if ($recent_discourses->have_posts()) : while ($recent_discourses->have_posts()) : $recent_discourses->the_post(); ?>
                <?php get_template_part('template-parts/content-card', get_post_type()); ?>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </section>
    
    <!-- Upcoming Events Section -->
    <section class="home-section">
        <h2 class="section-title">Upcoming Events</h2>
        <!-- Custom event listing loop would go here -->
    </section>

</div>
<?php get_footer(); ?>
