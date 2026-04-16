<?php
/**
 * Template Name: Appointment Request
 * Template Post Type: page
 */
get_header();
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Appointment Request', 'subtitle' => 'Schedule your visit online — it only takes a minute!' ) ); ?>

<section class="section-pad">
    <div class="container" style="max-width:860px;">
        <div class="text-center" style="margin-bottom:40px;">
            <h2 class="section-title">Request an Appointment</h2>
            <p class="section-subtitle">Fill out the form below and our team will contact you within one business day to confirm your appointment time.</p>
        </div>

        <div style="background:#fff;border-radius:8px;padding:40px;box-shadow:0 4px 20px rgba(0,0,0,0.08);">
            <div class="contact-form">
                <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                    <?php wp_nonce_field( 'bmd_appointment_form', 'bmd_appt_nonce' ); ?>
                    <input type="hidden" name="action" value="bmd_appointment_submit">

                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:18px;" class="form-row">
                        <div class="form-group">
                            <label for="appt-fname">First Name <span style="color:red">*</span></label>
                            <input type="text" id="appt-fname" name="fname" required>
                        </div>
                        <div class="form-group">
                            <label for="appt-lname">Last Name <span style="color:red">*</span></label>
                            <input type="text" id="appt-lname" name="lname" required>
                        </div>
                    </div>

                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:18px;" class="form-row">
                        <div class="form-group">
                            <label for="appt-phone">Phone Number <span style="color:red">*</span></label>
                            <input type="tel" id="appt-phone" name="phone" required placeholder="(713) 000-0000">
                        </div>
                        <div class="form-group">
                            <label for="appt-email">Email Address <span style="color:red">*</span></label>
                            <input type="email" id="appt-email" name="email" required>
                        </div>
                    </div>

                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:18px;" class="form-row">
                        <div class="form-group">
                            <label for="appt-date">Preferred Date</label>
                            <input type="date" id="appt-date" name="preferred_date" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="appt-time">Preferred Time</label>
                            <select id="appt-time" name="preferred_time">
                                <option value="">Select a time...</option>
                                <option value="morning">Morning (8:00 AM – 12:00 PM)</option>
                                <option value="afternoon">Afternoon (12:00 PM – 5:00 PM)</option>
                                <option value="no-preference">No Preference</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="appt-reason">Reason for Visit</label>
                        <select id="appt-reason" name="reason">
                            <option value="">Select a reason...</option>
                            <option value="new-patient">New Patient – Exam &amp; Cleaning</option>
                            <option value="regular-checkup">Regular Checkup &amp; Cleaning</option>
                            <option value="tooth-pain">Tooth Pain / Emergency</option>
                            <option value="implants">Dental Implant Consultation</option>
                            <option value="cosmetic">Cosmetic Dentistry Consultation</option>
                            <option value="whitening">Teeth Whitening</option>
                            <option value="crowns">Crown or Bridge</option>
                            <option value="dentures">Dentures</option>
                            <option value="root-canal">Root Canal</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="appt-insurance">Dental Insurance Provider (if applicable)</label>
                        <input type="text" id="appt-insurance" name="insurance" placeholder="e.g., Delta Dental, Cigna, Aetna">
                    </div>

                    <div class="form-group">
                        <label for="appt-patient-type">Patient Type <span style="color:red">*</span></label>
                        <select id="appt-patient-type" name="patient_type" required>
                            <option value="">Select...</option>
                            <option value="new">New Patient</option>
                            <option value="returning">Returning Patient</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="appt-message">Additional Information or Questions</label>
                        <textarea id="appt-message" name="message" rows="4" placeholder="Please share any additional details about your visit or any questions you may have..."></textarea>
                    </div>

                    <div class="form-group">
                        <label style="display:flex;align-items:flex-start;gap:10px;font-weight:normal;cursor:pointer;">
                            <input type="checkbox" name="newsletter" value="1" style="width:auto;margin-top:3px;">
                            <span>Sign up to receive helpful dental health updates and office news from Brittmoore Dental</span>
                        </label>
                    </div>

                    <div style="background:var(--bg-light);border-radius:4px;padding:15px;margin-bottom:20px;font-size:0.9rem;color:var(--text-light);">
                        <i class="fas fa-info-circle" style="color:var(--primary);"></i>
                        We will contact you within one business day to confirm your appointment. For same-day or emergency appointments, please call us directly at
                        <a href="<?php echo esc_url( bmd_phone_link() ); ?>"><?php echo esc_html( bmd_phone() ); ?></a>.
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
                        <i class="fas fa-calendar-check"></i> Submit Appointment Request
                    </button>
                </form>
            </div>
        </div>

        <div style="display:flex;gap:20px;margin-top:30px;flex-wrap:wrap;" class="contact-alt">
            <div style="flex:1;background:var(--bg-light);border-radius:4px;padding:20px;text-align:center;">
                <i class="fas fa-phone" style="font-size:1.5rem;color:var(--primary);margin-bottom:8px;display:block;"></i>
                <strong>Call Us</strong>
                <p style="margin:4px 0 0;"><a href="<?php echo esc_url( bmd_phone_link() ); ?>"><?php echo esc_html( bmd_phone() ); ?></a></p>
            </div>
            <div style="flex:1;background:var(--bg-light);border-radius:4px;padding:20px;text-align:center;">
                <i class="fas fa-envelope" style="font-size:1.5rem;color:var(--primary);margin-bottom:8px;display:block;"></i>
                <strong>Email Us</strong>
                <p style="margin:4px 0 0;"><a href="mailto:<?php echo esc_attr( bmd_email() ); ?>"><?php echo esc_html( bmd_email() ); ?></a></p>
            </div>
            <div style="flex:1;background:var(--bg-light);border-radius:4px;padding:20px;text-align:center;">
                <i class="fas fa-map-marker-alt" style="font-size:1.5rem;color:var(--primary);margin-bottom:8px;display:block;"></i>
                <strong>Visit Us</strong>
                <p style="margin:4px 0 0;font-size:0.88rem;">1046 Brittmoore Road<br>Houston, TX 77043</p>
            </div>
        </div>
    </div>
</section>

<style>@media(max-width:600px){.form-row{grid-template-columns:1fr !important;}.contact-alt{flex-direction:column;}}</style>

<?php get_footer(); ?>
