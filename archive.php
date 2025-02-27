<?php /**
 * Archive template file
 * This template is used for displaying archive pages including:
 * - Category archives
 * - Tag archives
 * - Author archives
 * - Date-based archives
 */
get_header(); // Load header.php logic in our file ?>
    <?php 
    the_archive_title('<h1 class="archive-title">', '</h1>'); 
    the_archive_description('<div class="archive-description">', '</div>');
    ?>
    <?php if (have_posts()) : ?>
        <div class="archive-posts">
            <?php
            /* Start the Loop */
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php /* Outputs post ID */ the_ID(); ?>" <?php /* Adds post classes */ post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php /* Displays the featured image */ 
                            the_post_thumbnail('medium'); ?>
                        </div>
                    <?php else : ?>
                        <img src="/wp-content/uploads/2025/02/logo.png" alt="EEMI Logo" class="post-no-logo">
                    <?php endif; ?>
                    <h2 class="entry-title">
                        <a href="<?php /* Gets permalink for current post */ the_permalink(); ?>">
                            <?php /* Displays post title */ the_title(); ?>
                        </a>
                    </h2>
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
                    <div class="entry-content">
                        <?php /* Displays post excerpt */ 
                        the_excerpt(); ?> <a href="<?php /* Gets permalink for current post */ the_permalink(); ?>">Lire plus</a>
                    </div>
                    <div class="categories-container">
                        <?php
                        $categories_list = get_the_category_list(', ');
                        if ($categories_list) {
                            printf('<span class="cat-links">Categories: %s</span>', $categories_list);
                        }
                        ?>
                    </div>
                    <div class="tags-container">
                        <?php
                        $tags_list = get_the_tag_list('', ', ');
                        if ($tags_list) {
                            printf('<span class="tags-links">Tags: %s</span>', $tags_list);
                        }
                        ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        <?php /* Displays posts navigation */
        the_posts_pagination(array(
            'prev_text' => '&laquo; Précédent',
            'next_text' => 'Suivant &raquo;',
        )); ?>
    <?php else : ?>
        <p>
            Il n'y a pas de contenue
        </p>
    <?php endif; ?>
<?php get_footer(); // Load footer.php logic in our file ?>