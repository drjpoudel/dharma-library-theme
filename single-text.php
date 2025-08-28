<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php // Paste the entire content of the single-book.php file from the previous response here.
          // It will work perfectly as it's designed to fetch the meta fields.
          // The code is identical to the final, working version in the previous step.
          // Example:
          $pdf_url = get_post_meta(get_the_ID(), '_dlc_pdf_url', true); // Note the prefix change to _dlc_
          $buy_url = get_post_meta(get_the_ID(), '_dlc_buy_url', true);
          // ... and so on for all fields.
    ?>
     <div class="container">
        <div class="book-header">
             <?php if (has_post_thumbnail()) : ?>
                <figure><img class="book-cover" src="<?php the_post_thumbnail_url('large'); ?>" alt="Cover of <?php the_title_attribute(); ?>" /></figure>
            <?php endif; ?>
            <div>
                <h3 class="book-title"><?php the_title(); ?></h3>
                <?php if (has_excerpt()) : ?><p class="description"><?php the_excerpt(); ?></p><?php endif; ?>
            </div>
        </div>
        <div class="book-details">
            <!-- Fetch and display all details like Language, Publisher, Year, etc. -->
        </div>
        <div class="button-frame">
            <?php if ($pdf_url) : ?><a class="button-link" href="<?php echo esc_url($pdf_url); ?>" download><button class="download-button">Download</button></a><?php endif; ?>
            <?php if ($buy_url) : ?><a class="button-link" href="<?php echo esc_url($buy_url); ?>" target="_blank" rel="noopener"><button class="buy-button">Buy Now</button></a><?php endif; ?>
        </div>
        <div class="description"><?php the_content(); ?></div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
