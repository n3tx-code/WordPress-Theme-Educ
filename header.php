<?php
/**
 * Header template file
 * This file contains the header structure of the theme including:
 * - HTML doctype and head section
 * - Opening body tag
 * - Loading the site meta information
 * - Loading all the styles added in queue with wp_head()
 * - Add the site title and main navigation menu
 */
?>

<!DOCTYPE html>
<html <?php /* Outputs the language attributes for the HTML tag */ language_attributes(); ?>>
<head>
    <meta charset="<?php /* Outputs the site's character encoding */ bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php /* Hook for scripts, styles, and meta elements */ wp_head(); ?>
    <title><?php the_title(); ?></title>
</head>
<body <?php /* Adds classes to the body tag */ body_class(); ?>>
    <?php /* Hook for inserting content after body tag - WordPress 5.2+ */ wp_body_open(); ?>
    <header id="site-header">
        <div class="site-branding">
            <h1 class="site-title">
                <a href="<?php /* Returns the home URL */ echo esc_url(home_url('/')); ?>">
                    <?php /* Outputs the site name */ bloginfo('name'); ?>
                </a>
            </h1>
        </div>

        <nav id="main-navigation">
            <?php
            /* Displays the primary navigation menu */
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
            ));
            ?>
        </nav>
    </header> 