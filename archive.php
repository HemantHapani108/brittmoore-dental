<?php
/**
 * Blog Archive Template
 */
get_header();
?>

<section class="page-banner">
    <div class="container">
        <h1>Dental Health Blog</h1>
        <p style="color:rgba(255,255,255,0.85);margin-top:8px;">Tips, news, and insights from Dr. Philip J. Cimo DDS, FAGD</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span> / </span>
            <span aria-current="page">Blog</span>
        </nav>
    </div>
</section>

<section class="section-pad">
    <div class="container">
        <div class="archive-grid">
            <!-- Posts -->
            <div>
                <?php if ( have_posts() ) : ?>
                <div class="posts-list">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-list-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-list-img">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'bmd-card', array( 'loading' => 'lazy' ) ); ?></a>
                        </div>
                        <?php endif; ?>
                        <div class="post-list-body">
                            <div class="blog-meta">
                                <span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                                <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                            </div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline">Read More</a>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    the_posts_pagination( array(
                        'prev_text' => '<i class="fas fa-chevron-left"></i>',
                        'next_text' => '<i class="fas fa-chevron-right"></i>',
                    ) );
                    ?>
                </div>

                <?php else : ?>
                <p>No posts found.</p>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="sidebar">
                <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
                <?php else : ?>
                    <!-- Default Sidebar Widgets -->
                    <div class="sidebar-widget">
                        <h4>Schedule an Appointment</h4>
                        <p style="font-size:0.9rem;color:var(--text-light);margin-bottom:15px;">Ready for a healthier smile? Contact us today!</p>
                        <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-primary" style="width:100%;text-align:center;">Request Appointment</a>
                        <div style="margin-top:12px;text-align:center;">
                            <a href="<?php echo esc_url( bmd_phone_link() ); ?>" style="font-weight:700;color:var(--primary);"><?php echo esc_html( bmd_phone() ); ?></a>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h4>Recent Posts</h4>
                        <?php
                        $recent = new WP_Query( array( 'posts_per_page' => 5, 'post_status' => 'publish' ) );
                        if ( $recent->have_posts() ) :
                        ?>
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
                        <h4>Office Hours</h4>
                        <table class="hours-table" style="width:100%;">
                            <tr><td>Mon – Thu</td><td>8AM – 5PM</td></tr>
                            <tr><td>Friday</td><td>8AM – 2PM</td></tr>
                            <tr><td>Weekend</td><td>Closed</td></tr>
                        </table>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
