<?php
/**
 * Main template file.
 *
 * @package test-theme
 */

get_header();
?>

<div id="mainCont">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
                    <!-- Replacing the article elements with divs wrapped in a elements -->
                    <a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">

                    </a>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div><?php the_content(); ?></div>
                    </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e( 'No posts found.', 'my-theme' ); ?></p>
    <?php endif; ?>
</div>

<?php
get_footer();?>