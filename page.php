<?php
/**
 * Generic Page Template
 */
get_header();
$page_title = get_the_title();
?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true">/</span>
            <span aria-current="page"><?php the_title(); ?></span>
        </nav>
    </div>
</section>

<!-- Page Content -->
<div class="page-content">
    <div class="container">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
