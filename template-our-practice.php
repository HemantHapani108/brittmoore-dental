<?php
/**
 * Template Name: Our Practice
 * Template Post Type: page
 */
get_header();
$img_uri = get_template_directory_uri() . '/assets/images/';
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Our Practice', 'subtitle' => 'State-of-the-art care in a welcoming environment' ) ); ?>

<section class="section-pad">
    <div class="container">
        <div class="about-grid">
            <div>
                <img src="<?php echo esc_url( $img_uri . 'office-photo.jpg' ); ?>"
                     alt="Brittmoore Dental Office" loading="lazy"
                     style="border-radius:4px;box-shadow:0 6px 24px rgba(0,0,0,0.15);width:100%;">
            </div>
            <div>
                <h2 class="section-title left">Welcome to Our Practice</h2>

                <h3>Our Facility</h3>
                <p>We operate a state-of-the-art dental facility and take great pride in maintaining standards that exceed all OSHA and CDC requirements. Our office is designed to make you feel comfortable and at ease from the moment you walk through the door. We welcome patients into our practice as we would welcome them into our own home — as valued members of our family.</p>

                <h3 style="margin-top:25px;">Appointments</h3>
                <p>You may schedule an appointment by calling our office at <a href="<?php echo esc_url( bmd_phone_link() ); ?>"><?php echo esc_html( bmd_phone() ); ?></a> or by sending us an email. If you are experiencing a dental emergency and need to see the doctor right away, please let us know — we will do our best to accommodate you as quickly as possible. New patients are always welcome.</p>

                <h3 style="margin-top:25px;">Financial Information</h3>
                <p>We want to make quality dental care accessible and affordable. Our office will gladly submit insurance forms on your behalf and accept assignment of benefits where applicable. For major dental treatments, we are happy to discuss and establish a payment plan that works for your budget. We accept checks, cash, and all major credit cards.</p>
                <p>We also offer financing through <strong>CareCredit</strong> and <strong>Sunbit</strong> for qualified patients. Ask us about our financing options at your next appointment.</p>

                <h3 style="margin-top:25px;">Cancellation Policy</h3>
                <p>We ask that you provide us with a minimum of <strong>24 hours' notice</strong> if you need to cancel or reschedule your appointment. This courtesy allows us to offer that time to another patient who may be waiting. Failure to provide adequate notice may result in a cancellation fee.</p>

                <div style="margin-top:25px;display:flex;gap:15px;flex-wrap:wrap;">
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-primary">Request Appointment</a>
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hours & Location -->
<section class="contact-section section-pad-sm">
    <div class="container">
        <div class="contact-grid">
            <div>
                <h2 class="section-title left">Office Hours &amp; Location</h2>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-info-text">
                        <h4>Address</h4>
                        <p>1046 Brittmoore Road, Houston, TX 77043</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-phone"></i></div>
                    <div class="contact-info-text">
                        <h4>Phone</h4>
                        <a href="<?php echo esc_url( bmd_phone_link() ); ?>"><?php echo esc_html( bmd_phone() ); ?></a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-clock"></i></div>
                    <div class="contact-info-text">
                        <h4>Hours of Operation</h4>
                        <table class="hours-table">
                            <tr><td>Monday</td><td>8:00 AM – 5:00 PM</td></tr>
                            <tr><td>Tuesday</td><td>8:00 AM – 5:00 PM</td></tr>
                            <tr><td>Wednesday</td><td>8:00 AM – 5:00 PM</td></tr>
                            <tr><td>Thursday</td><td>8:00 AM – 5:00 PM</td></tr>
                            <tr><td>Friday</td><td>8:00 AM – 2:00 PM</td></tr>
                            <tr><td>Saturday</td><td>Closed</td></tr>
                            <tr><td>Sunday</td><td>Closed</td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.09!2d-95.5694654!3d29.7873521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDQ3JzE0LjUiTiA5NcKwMzQnMTAuMSJX!5e0!3m2!1sen!2sus!4v1"
                        loading="lazy" allowfullscreen title="Office Location Map"></iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
