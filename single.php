<?php
/**
 * Single Post Template
 */
get_header();
?>

<section class="page-banner">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span> / </span>
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
            <span> / </span>
            <span aria-current="page"><?php the_title(); ?></span>
        </nav>
    </div>
</section>

<section class="section-pad">
    <div class="container">
        <div class="single-post-layout">

            <!-- Main Content -->
            <main>
                <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-featured-img">
                        <?php the_post_thumbnail( 'bmd-blog', array( 'loading' => 'eager' ) ); ?>
                    </div>
                    <?php endif; ?>

                    <div class="post-meta">
                        <span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                        <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                        <?php if ( has_category() ) : ?>
                        <span><i class="fas fa-folder"></i> <?php the_category( ', ' ); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- Tags -->
                    <?php if ( has_tag() ) : ?>
                    <div style="margin-top:30px;padding-top:20px;border-top:1px solid var(--border);">
                        <strong style="margin-right:10px;">Tags:</strong>
                        <?php the_tags( '<span style="display:inline-flex;gap:8px;flex-wrap:wrap;">', ' ', '</span>' ); ?>
                    </div>
                    <?php endif; ?>

                    <!-- Author Box -->
                    <div style="background:var(--bg-light);border-radius:4px;padding:25px;margin-top:30px;display:flex;gap:20px;align-items:flex-start;">
                        <?php echo get_avatar( get_the_author_meta( 'email' ), 70, '', '', array( 'style' => 'border-radius:50%;flex-shrink:0;' ) ); ?>
                        <div>
                            <strong style="font-size:1rem;">About <?php the_author(); ?></strong>
                            <p style="margin:6px 0 0;font-size:0.9rem;color:var(--text-light);">
                                <?php the_author_meta( 'description' ); ?>
                                <?php if ( ! get_the_author_meta( 'description' ) ) : ?>
                                Dr. Philip J. Cimo DDS, FAGD is a Houston-based dentist specializing in comprehensive dental care including implants, cosmetic dentistry, and sedation dentistry.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Post Navigation -->
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:30px;">
                        <?php
                        $prev = get_previous_post();
                        $next = get_next_post();
                        if ( $prev ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" style="background:var(--bg-light);padding:18px;border-radius:4px;display:block;">
                            <span style="font-size:0.8rem;color:var(--accent);display:block;margin-bottom:5px;"><i class="fas fa-arrow-left"></i> Previous Post</span>
                            <span style="font-weight:600;color:var(--secondary);font-size:0.92rem;"><?php echo esc_html( get_the_title( $prev->ID ) ); ?></span>
                        </a>
                        <?php else : ?><div></div><?php endif; ?>
                        <?php if ( $next ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" style="background:var(--bg-light);padding:18px;border-radius:4px;display:block;text-align:right;">
                            <span style="font-size:0.8rem;color:var(--accent);display:block;margin-bottom:5px;">Next Post <i class="fas fa-arrow-right"></i></span>
                            <span style="font-weight:600;color:var(--secondary);font-size:0.92rem;"><?php echo esc_html( get_the_title( $next->ID ) ); ?></span>
                        </a>
                        <?php endif; ?>
                    </div>

                </article>

                <?php endwhile; ?>
            </main>

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-widget" style="background:var(--primary);color:#fff;border-radius:4px;padding:25px;">
                    <h4 style="color:#fff;border-bottom-color:rgba(255,255,255,0.3);">Ready to Smile?</h4>
                    <p style="color:rgba(255,255,255,0.9);font-size:0.9rem;margin-bottom:15px;">Schedule your next dental appointment with Dr. Cimo today.</p>
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white" style="width:100%;text-align:center;">Request Appointment</a>
                    <div style="text-align:center;margin-top:12px;">
                        <a href="<?php echo esc_url( bmd_phone_link() ); ?>" style="color:#fff;font-weight:700;"><?php echo esc_html( bmd_phone() ); ?></a>
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h4>Recent Posts</h4>
                    <?php
                    $recent = new WP_Query( array( 'posts_per_page' => 5, 'post_status' => 'publish', 'post__not_in' => array( get_the_ID() ) ) );
                    if ( $recent->have_posts() ) : ?>
                    <ul class="recent-posts-list">
                        <?php while ( $recent->have_posts() ) : $recent->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <br><small style="color:var(--accent);"><?php echo get_the_date(); ?></small>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                    <?php endif; ?>
                </div>

                <div class="sidebar-widget">
                    <h4>Our Services</h4>
                    <ul class="footer-links" style="padding-left:0;">
                        <li><a href="<?php echo esc_url( home_url( '/services/dental-implants/' ) ); ?>">Dental Implants</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/crowns/' ) ); ?>">Crowns &amp; Bridges</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/veneers/' ) ); ?>">Veneers</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/whitening/' ) ); ?>">Teeth Whitening</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/dentures/' ) ); ?>">Dentures</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/endodontics/' ) ); ?>">Root Canals</a></li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h4>Office Hours</h4>
                    <table class="hours-table" style="width:100%;">
                        <tr><td>Mon – Thu</td><td>8AM – 5PM</td></tr>
                        <tr><td>Friday</td><td>8AM – 2PM</td></tr>
                        <tr><td>Weekend</td><td>Closed</td></tr>
                    </table>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>
