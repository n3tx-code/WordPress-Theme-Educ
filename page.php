<?php
/**
 * Page template file
 * This template is used for individual page.
 * If front-page.php is present, this template will not be used for the home page.
 */
get_header(); // Load header.php logic in our file ?>
    <?php while (have_posts()) : the_post(); ?>
        <main id="main-content" class="single-post">
            <h1 class="entry-title">
                <?php /* Displays post title */ the_title(); ?>
            </h1>
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
