<?php
/**
 * Reusable Page Banner (inner pages)
 * Usage: get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Page Title' ) );
 */
$title = isset( $args['title'] ) ? $args['title'] : get_the_title();
$subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : '';
?>
<section class="page-banner">
    <div class="container">
        <h1><?php echo esc_html( $title ); ?></h1>
        <?php if ( $subtitle ) : ?>
            <p style="color:rgba(255,255,255,0.85);font-size:1.05rem;margin-top:8px;"><?php echo esc_html( $subtitle ); ?></p>
        <?php endif; ?>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true"> / </span>
            <span aria-current="page"><?php echo esc_html( $title ); ?></span>
        </nav>
    </div>
</section>
