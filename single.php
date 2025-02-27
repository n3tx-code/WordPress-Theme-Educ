<?php
/**
 * Single Post template file
 * This template is used for displaying individual post content.
 * It includes:
 * - Post featured image
 * - Post title
 * - Post meta (date, author, categories, tags)
 * - Post content
 */
get_header(); // Load header.php logic in our file ?>
    <?php while (have_posts()) : the_post(); ?>
        <main id="main-content" class="single-post">
            <h1 class="entry-title">
                <?php /* Displays post title */ the_title(); ?>
            </h1>
            <div class="entry-meta">
                <?php /* Displays post date */
                echo sprintf(
                    '<span class="posted-on">%s</span>',
                    get_the_date()
                );
                
                /* Displays post author */
                echo sprintf(
                    '<span class="posted-by"> rédigé par %s</span>',
                    get_the_author()
                ); ?>
            </div>
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                <?php /* Displays the featured image */ 
                the_post_thumbnail('large'); ?>
            </div>
            <?php else : ?>
                <img src="/wp-content/uploads/2025/02/logo.png" alt="EEMI Logo" class="post-no-logo">
            <?php endif; ?>
            <div class="entry-content">
                <?php 
                /* Displays the full post content */
                the_content();
                ?>
            </div>
        </main>
    <?php endwhile; ?>
<?php get_footer(); // Load footer.php logic in our file ?>
