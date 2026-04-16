<?php
/**
 * Main index template — fallback for all views
 */
if ( is_singular() ) {
    get_template_part( 'single' );
} elseif ( is_archive() || is_home() ) {
    get_template_part( 'archive' );
} else {
    get_header(); ?>
    <section class="page-banner">
        <div class="container"><h1><?php wp_title( '' ); ?></h1></div>
    </section>
    <div class="page-content">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="entry-content"><?php the_content(); ?></div>
            <?php endwhile; else : ?>
            <p><?php _e( 'Nothing found.', 'brittmoore-dental' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php get_footer();
}
