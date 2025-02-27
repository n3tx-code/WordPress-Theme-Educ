<?php 
/**
 * Front Page template file
 * This template is used for displaying the home page when you set a static front page
 * in WordPress Settings > Reading.
 * 
 */

get_header(); // Load header.php logic in our file ?>
    <div class="page-content">
        <h1>Page d'accueil</h1>
        <?php 
        /* Displays the page content */
        while (have_posts()) : the_post();
            the_content();
        endwhile; ?>
    </div>
    <section class="featured-posts">
        <h2><?php esc_html_e('Latest News', 'eemi-custom-theme'); ?></h2>
        
        <?php
        /* Query for latest 3 posts */
        $featured_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'post',
        ));

        if ($featured_posts->have_posts()) : ?>
            <div class="posts-grid">
                <?php while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
                    <article class="post-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php /* Displays the featured image */
                                    the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="post-content">
                            <header class="entry-header">
                                <h3 class="entry-title">
                                    <a href="<?php /* Gets permalink for current post */ the_permalink(); ?>">
                                        <?php /* Displays post title */ the_title(); ?>
                                    </a>
                                </h3>

                                <div class="entry-meta">
                                    <?php /* Displays post date */
                                    echo get_the_date(); ?>
                                </div>
                            </header>

                            <div class="entry-summary">
                                <?php /* Displays post excerpt */
                                the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="read-more">
                                <?php esc_html_e('Lire plus', 'eemi-custom-theme'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>            

            <?php 
            /* Restores original post data */
            wp_reset_postdata();
        endif; ?>
    </section>
<?php get_footer(); // Load footer.php logic in our file ?>