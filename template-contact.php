<?php
/**
 * Template Name: Contact Us
 * Template Post Type: page
 */
get_header();
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Contact Us', 'subtitle' => 'We\'d love to hear from you — get in touch today' ) ); ?>

<section class="section-pad">
    <div class="container">
        <div class="contact-grid">

            <!-- Contact Info -->
            <div>
                <h2 class="section-title left">Get In Touch</h2>

                <div class="contact-info-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-info-text">
                        <h4>Our Location</h4>
                        <p>1046 Brittmoore Road<br>Houston, TX 77043</p>
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
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div class="contact-info-text">
                        <h4>Email</h4>
                        <a href="mailto:<?php echo esc_attr( bmd_email() ); ?>"><?php echo esc_html( bmd_email() ); ?></a>
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

                <!-- Map -->
                <div class="map-container" style="margin-top:25px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.09!2d-95.5694654!3d29.7873521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDQ3JzE0LjUiTiA5NcKwMzQnMTAuMSJX!5e0!3m2!1sen!2sus!4v1"
                            loading="lazy" allowfullscreen title="Office Location"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 class="section-title left">Send Us a Message</h2>
                <p style="color:var(--text-light);margin-bottom:25px;">Have a question? Fill out the form below and we'll get back to you as soon as possible during business hours.</p>

                <div class="contact-form">
                    <?php
                    // Use Contact Form 7 shortcode if plugin active
                    if ( function_exists( 'wpcf7' ) ) {
                        echo do_shortcode( '[contact-form-7 id="contact-form" title="Contact Form"]' );
                    } else {
                        // Fallback HTML form
                    ?>
                    <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                        <?php wp_nonce_field( 'bmd_contact_form', 'bmd_contact_nonce' ); ?>
                        <input type="hidden" name="action" value="bmd_contact_submit">
                        <div class="form-row" style="display:grid;grid-template-columns:1fr 1fr;gap:15px;">
                            <div class="form-group">
                                <label for="contact-fname">First Name <span style="color:red">*</span></label>
                                <input type="text" id="contact-fname" name="fname" required placeholder="Your first name">
                            </div>
                            <div class="form-group">
                                <label for="contact-lname">Last Name <span style="color:red">*</span></label>
                                <input type="text" id="contact-lname" name="lname" required placeholder="Your last name">
                            </div>
                        </div>
                        <div class="form-row" style="display:grid;grid-template-columns:1fr 1fr;gap:15px;">
                            <div class="form-group">
                                <label for="contact-phone">Phone Number</label>
                                <input type="tel" id="contact-phone" name="phone" placeholder="(713) 000-0000">
                            </div>
                            <div class="form-group">
                                <label for="contact-email">Email Address <span style="color:red">*</span></label>
                                <input type="email" id="contact-email" name="email" required placeholder="your@email.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <select id="contact-subject" name="subject">
                                <option value="">Select a topic...</option>
                                <option value="appointment">Appointment Request</option>
                                <option value="insurance">Insurance Question</option>
                                <option value="services">Services Inquiry</option>
                                <option value="emergency">Dental Emergency</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Message <span style="color:red">*</span></label>
                            <textarea id="contact-message" name="message" required placeholder="How can we help you?"></textarea>
                        </div>
                        <div class="form-group">
                            <label style="display:flex;align-items:center;gap:10px;font-weight:normal;cursor:pointer;">
                                <input type="checkbox" name="newsletter" value="1" style="width:auto;">
                                Sign up to receive helpful dental health updates and news from our office
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
