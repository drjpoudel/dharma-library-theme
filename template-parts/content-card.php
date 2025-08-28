<article class="grid-item">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
        <?php endif; ?>
        <div class="grid-item-content">
            <h3><?php the_title(); ?></h3>
        </div>
    </a>
</article>
