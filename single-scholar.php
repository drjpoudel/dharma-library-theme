<?php get_header(); ?>
<div class="container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="scholar-header">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>" class="scholar-photo">
        <?php endif; ?>
        <div>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); // The scholar's biography ?></div>
        </div>
    </div>
    <hr style="margin: 40px 0;">

    <!-- Works by this Scholar -->
    <h2 class="section-title">Works by <?php the_title(); ?></h2>
    <div class="post-grid">
        <?php
            $scholar_slug = $post->post_name;
            $works = new WP_Query([
                'post_type' => ['text', 'discourse'],
                'posts_per_page' => -1,
                'tax_query' => [[
                    'taxonomy' => 'author',
                    'field' => 'slug',
                    'terms' => $scholar_slug,
                ]],
            ]);
            if ($works->have_posts()) : while ($works->have_posts()) : $works->the_post();
                get_template_part('template-parts/content-card', get_post_type());
            endwhile; wp_reset_postdata(); else:
                echo "<p>No works found for this scholar.</p>";
            endif;
        ?>
    </div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
