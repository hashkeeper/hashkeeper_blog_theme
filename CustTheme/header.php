<?php
/**
 * Header template.
 *
 * @package test-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
    <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
    <?php endif; ?>

    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'fallback_cb'    => false,
    ) );
    ?>

    <ul>
        <?php wp_list_categories( array(
            'title_li' => '', // Removes the "Categories" heading
            'hide_empty' => 0, // Only shows categories with posts
        ) ); ?>
    </ul>
</header>

<main>