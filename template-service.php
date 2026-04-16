<?php
/**
 * Template Name: Service Page
 *
 * Generic service/procedure page template.
 * Renders post content with a sidebar containing CTA, phone, and services list.
 */
get_header();
?>

<?php get_template_part( 'template-parts/page-banner', null, array(
    'title'    => get_the_title(),
    'subtitle' => get_post_meta( get_the_ID(), '_page_subtitle', true ),
) ); ?>

<section class="section-pad">
    <div class="container">
        <div class="single-post-layout">

            <!-- Main Content -->
            <main>
                <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'service-page-content' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-featured-img" style="margin-bottom:30px;">
                        <?php the_post_thumbnail( 'bmd-blog', array( 'loading' => 'eager', 'style' => 'border-radius:4px;' ) ); ?>
                    </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- CTA strip -->
                    <div style="background:var(--primary);color:#fff;padding:30px;border-radius:4px;margin-top:40px;text-align:center;">
                        <h3 style="color:#fff;margin-bottom:10px;">Ready to schedule your appointment?</h3>
                        <p style="color:rgba(255,255,255,0.9);margin-bottom:20px;">
                            Call us at <a href="<?php echo esc_url( bmd_phone_link() ); ?>" style="color:#fff;font-weight:700;"><?php echo esc_html( bmd_phone() ); ?></a> or request an appointment online.
                        </p>
                        <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white">Request Appointment</a>
                    </div>
                </article>
                <?php endwhile; ?>
            </main>

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-widget" style="background:var(--primary);color:#fff;border-radius:4px;padding:25px;">
                    <h4 style="color:#fff;border-bottom-color:rgba(255,255,255,0.3);">Ready to Smile?</h4>
                    <p style="color:rgba(255,255,255,0.9);font-size:0.9rem;margin-bottom:15px;">
                        Schedule your next dental appointment with Dr. Cimo today.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white" style="width:100%;text-align:center;">Request Appointment</a>
                    <div style="text-align:center;margin-top:12px;">
                        <a href="<?php echo esc_url( bmd_phone_link() ); ?>" style="color:#fff;font-weight:700;"><?php echo esc_html( bmd_phone() ); ?></a>
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h4>Our Services</h4>
                    <ul class="footer-links" style="padding-left:0;">
                        <li><a href="<?php echo esc_url( home_url( '/dental-implants/' ) ); ?>">Dental Implants</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/crowns/' ) ); ?>">Dental Crowns</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/bridges/' ) ); ?>">Dental Bridges</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/veneers/' ) ); ?>">Porcelain Veneers</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/whitening/' ) ); ?>">Teeth Whitening</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/dentures/' ) ); ?>">Dentures</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/root-canal/' ) ); ?>">Root Canals</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/extractions/' ) ); ?>">Tooth Extractions</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/periodontal-gum-disease/' ) ); ?>">Gum Disease</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/sedation/' ) ); ?>">Sedation Dentistry</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/oral-cancer-screenings/' ) ); ?>">Oral Cancer Screenings</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/sealants/' ) ); ?>">Dental Sealants</a></li>
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

                <div class="sidebar-widget">
                    <h4>Patient Resources</h4>
                    <ul class="footer-links" style="padding-left:0;">
                        <li><a href="<?php echo esc_url( home_url( '/patient-resources/' ) ); ?>">New Patient Info</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/financing/' ) ); ?>">Financing Options</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/post-op-instructions/' ) ); ?>">Post-Op Instructions</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/dental-implant-faqs/' ) ); ?>">Implant FAQs</a></li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>
