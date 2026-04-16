<?php
/**
 * Template Name: Patient Resources
 * Template Post Type: page
 */
get_header();
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Patient Resources', 'subtitle' => 'Everything you need for a smooth, comfortable visit' ) ); ?>

<section class="section-pad">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 320px;gap:50px;align-items:start;" class="resources-layout">
            <div>
                <h2 class="section-title left">New Patient Information</h2>
                <p style="color:var(--text-light);">Welcome to Brittmoore Dental! We want your first visit to go as smoothly as possible. Here's everything you need to know before your appointment.</p>

                <h3 style="margin:30px 0 12px;">What to Bring</h3>
                <ul style="padding-left:0;">
                    <?php $bring = array('Photo ID (driver\'s license or passport)','Insurance card(s)','List of current medications and allergies','Completed new patient forms (download below)','Previous dental X-rays if available','Payment method (cash, credit/debit, or HSA card)');
                    foreach ( $bring as $item ) : ?>
                    <li style="padding:8px 0;border-bottom:1px solid var(--border);display:flex;align-items:flex-start;gap:10px;font-size:0.95rem;color:var(--text-light);">
                        <i class="fas fa-check-circle" style="color:var(--primary);margin-top:2px;flex-shrink:0;"></i>
                        <?php echo esc_html( $item ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <h3 style="margin:30px 0 12px;">Patient Forms</h3>
                <p style="color:var(--text-light);">To save time at your first appointment, please download and complete these forms before you arrive. You may bring the completed forms with you or return them to us by email.</p>
                <div style="display:flex;gap:15px;flex-wrap:wrap;margin-top:15px;">
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-download"></i> New Patient Form
                    </a>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-download"></i> Medical History Form
                    </a>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-download"></i> HIPAA Privacy Form
                    </a>
                </div>

                <h3 style="margin:30px 0 12px;">Insurance &amp; Payment</h3>
                <p style="color:var(--text-light);">We accept most major dental insurance plans and will gladly submit claims on your behalf. Our team can verify your benefits prior to your appointment so you know what to expect.</p>
                <p style="color:var(--text-light);">For patients without insurance or for procedures not covered by insurance, we offer convenient financing options through <strong>CareCredit</strong> and <strong>Sunbit</strong>.</p>
                <p style="color:var(--text-light);">We accept: Cash, personal checks, Visa, MasterCard, Discover, American Express, and HSA/FSA cards.</p>

                <h3 style="margin:30px 0 12px;">What to Expect</h3>
                <p style="color:var(--text-light);">Your initial visit will typically include:</p>
                <ul style="padding-left:0;">
                    <?php $expect = array('Comprehensive oral examination by Dr. Cimo','Full set of digital X-rays (if not recently taken)','Dental cleaning by one of our hygienists','Oral cancer screening','Treatment planning discussion','Review of insurance benefits and cost estimates');
                    foreach ( $expect as $item ) : ?>
                    <li style="padding:8px 0;border-bottom:1px solid var(--border);display:flex;align-items:flex-start;gap:10px;font-size:0.95rem;color:var(--text-light);">
                        <i class="fas fa-arrow-right" style="color:var(--primary);margin-top:4px;flex-shrink:0;"></i>
                        <?php echo esc_html( $item ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <h3 style="margin:30px 0 12px;">Emergency Dental Care</h3>
                <p style="color:var(--text-light);">If you're experiencing a dental emergency — severe pain, a broken tooth, or an injury — please call our office immediately at <a href="<?php echo esc_url( bmd_phone_link() ); ?>"><?php echo esc_html( bmd_phone() ); ?></a>. We will do everything possible to see you as soon as possible, even if you are a new patient.</p>
            </div>

            <!-- Sidebar -->
            <div>
                <div class="sidebar-widget" style="background:var(--primary);color:#fff;border-radius:4px;padding:25px;">
                    <h4 style="color:#fff;border-bottom-color:rgba(255,255,255,0.3);">Schedule Your Visit</h4>
                    <p style="color:rgba(255,255,255,0.9);font-size:0.9rem;margin-bottom:20px;">Ready to experience the Brittmoore Dental difference? Request your appointment today.</p>
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white" style="width:100%;text-align:center;margin-bottom:12px;">Request Appointment</a>
                    <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn" style="width:100%;text-align:center;background:transparent;color:#fff;border:2px solid #fff;">
                        <i class="fas fa-phone"></i> <?php echo esc_html( bmd_phone() ); ?>
                    </a>
                </div>

                <div class="sidebar-widget">
                    <h4>Office Hours</h4>
                    <table class="hours-table" style="width:100%;">
                        <tr><td>Mon – Thu</td><td>8:00 AM – 5:00 PM</td></tr>
                        <tr><td>Friday</td><td>8:00 AM – 2:00 PM</td></tr>
                        <tr><td>Saturday</td><td>Closed</td></tr>
                        <tr><td>Sunday</td><td>Closed</td></tr>
                    </table>
                </div>

                <div class="sidebar-widget">
                    <h4>We Accept Insurance</h4>
                    <p style="font-size:0.88rem;color:var(--text-light);">We work with most major dental insurance plans. Call us to verify your specific coverage.</p>
                    <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn btn-primary" style="margin-top:10px;font-size:0.85rem;padding:10px 18px;">Verify Insurance</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>@media(max-width:768px){.resources-layout{grid-template-columns:1fr !important;}}</style>

<?php get_footer(); ?>
