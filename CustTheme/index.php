<?php
/**
 * Main template file.
 *
 * @package test-theme
 */

get_header();
?>

<div id="mainCont">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </a>
            <?php endif; ?>

            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

        </div>

    <?php endwhile; else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php
get_footer();?>