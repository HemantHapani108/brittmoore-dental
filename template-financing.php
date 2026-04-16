<?php
/**
 * Template Name: Financing
 * Template Post Type: page
 */
get_header();
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Financing', 'subtitle' => 'Affordable dental care with flexible payment options' ) ); ?>

<section class="section-pad">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Making Dental Care Affordable</h2>
            <p class="section-subtitle">We believe everyone deserves a healthy, beautiful smile. That's why we offer flexible financing to fit any budget.</p>
        </div>

        <div class="financing-grid">
            <div class="financing-card">
                <h3>CareCredit</h3>
                <p>CareCredit is a healthcare credit card designed specifically for medical and dental expenses. Apply online and get an instant decision. Use it for treatment not fully covered by insurance with flexible monthly payment options.</p>
                <a href="https://www.carecredit.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:15px;">Apply for CareCredit</a>
            </div>
            <div class="financing-card">
                <h3>Sunbit</h3>
                <p>Sunbit offers an easy application process with no hard credit check for initial approval. With a 30-second application and high approval rates, Sunbit makes it simple to get the dental care you need now and pay over time.</p>
                <a href="#" class="btn btn-primary" style="margin-top:15px;">Apply for Sunbit</a>
            </div>
            <div class="financing-card">
                <h3>In-House Payment Plans</h3>
                <p>For major dental treatments, our office can work with you to establish a payment plan that fits your budget. We'll discuss all your options during your consultation so there are no surprises.</p>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary" style="margin-top:15px;">Contact Us</a>
            </div>
        </div>

        <div style="background:var(--bg-light);border-radius:4px;padding:40px;margin-top:40px;">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center;" class="insurance-grid">
                <div>
                    <h2 class="section-title left">Insurance Information</h2>
                    <p style="color:var(--text-light);">We work with most major dental insurance plans. Our knowledgeable team will help maximize your benefits and minimize out-of-pocket costs.</p>
                    <ul style="padding-left:0;margin:20px 0;">
                        <?php $ins = array('We submit claims on your behalf','Direct billing to your insurance carrier','Benefit verification before your appointment','Transparent explanation of your coverage','Flexible options for non-covered services');
                        foreach ( $ins as $i ) : ?>
                        <li style="padding:8px 0;border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;font-size:0.92rem;color:var(--text-light);">
                            <i class="fas fa-check" style="color:var(--primary);"></i>
                            <?php echo esc_html( $i ); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <p style="color:var(--text-light);">Don't have dental insurance? We accept cash, checks, and all major credit cards including HSA/FSA cards.</p>
                    <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn btn-primary" style="margin-top:15px;">
                        <i class="fas fa-phone"></i> Call to Verify Benefits
                    </a>
                </div>
                <div>
                    <h3 style="margin-bottom:15px;">We Accept</h3>
                    <div style="display:flex;flex-wrap:wrap;gap:12px;">
                        <?php $cards = array('Visa','MasterCard','Discover','American Express','Cash','Personal Checks','HSA / FSA Cards');
                        foreach ( $cards as $card ) : ?>
                        <span style="background:var(--primary);color:#fff;padding:8px 16px;border-radius:20px;font-size:0.85rem;font-weight:600;"><?php echo esc_html( $card ); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container">
        <h2>Don't Let Cost Stop You From Getting Care</h2>
        <p>Contact us today to discuss your financing options. Healthy teeth are an investment in your overall wellbeing.</p>
        <div class="cta-btns">
            <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">Schedule Appointment</a>
            <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">Call <?php echo esc_html( bmd_phone() ); ?></a>
        </div>
    </div>
</section>

<style>@media(max-width:768px){.insurance-grid{grid-template-columns:1fr !important;}}</style>

<?php get_footer(); ?>
