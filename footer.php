<?php 
/**
 * Footer template file
 * This file contains the footer structure of the theme including:
 * - Footer content
 * - Closing body and HTML tags
 * - WordPress footer scripts that run all the necessary scripts called with some hooks.
 */
?>
    <footer id="site-footer">
        <div class="site-info">
            <p>&copy; <?php /* Outputs current year */ echo date('Y'); ?> <?php /* Outputs site name */ bloginfo('name'); ?></p>
        </div>
    </footer>

    <?php /* Hook for scripts - Required for WordPress to load footer scripts add in functions.php */
    wp_footer(); 
    ?>
</body>
</html> 