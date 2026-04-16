<?php
/**
 * Template Name: Dental Implant FAQs
 * Template Post Type: page
 */
get_header();
$img_uri = get_template_directory_uri() . '/assets/images/';
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Dental Implant FAQs', 'subtitle' => 'Answers to your most common questions about dental implants' ) ); ?>

<section class="section-pad">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 360px;gap:50px;align-items:start;" class="faq-layout">
            <div>
                <h2 class="section-title left">Frequently Asked Questions</h2>
                <p style="color:var(--text-light);margin-bottom:35px;">Dental implants are one of the most transformative procedures in modern dentistry. Here are answers to the questions we hear most often from our Houston patients.</p>

                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-question">
                            What is a dental implant?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            A dental implant is a permanent new root for a missing tooth. It is a titanium screw that is surgically placed into the jawbone. Over time, the implant fuses with the bone through a process called osseointegration. A natural-looking crown is then attached to the implant, resulting in a restoration that looks, feels, and functions just like a natural tooth.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            How are dental implants different than dentures?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            Dentures are a removable set of teeth that rest on the gums. While they are an effective solution for some patients, they can slip, cause discomfort, and require regular removal for cleaning. Dental implants are a permanent replacement for missing teeth — they are anchored directly into the jawbone and never need to be removed. Implants also help preserve jawbone density, preventing the facial sagging that can occur with tooth loss.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            What are the benefits of dental implants?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            Dental implants offer numerous benefits including: they look and feel just like real teeth; they are a permanent solution; you can eat the foods you want without fear of embarrassment; they prevent bone loss in the jaw; they don't affect adjacent healthy teeth; they improve speech and self-confidence; and with proper care, they can last a lifetime.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Who can place a dental implant?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            Your dentist may be able to perform implant placement in their own office based on their training and experience level. In some cases, especially for complex situations, they may recommend you to an oral surgeon or implantologist. Dr. Cimo is trained in dental implant placement and handles many cases right here in our Houston office.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            How much do implants cost?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            The price of dental implants varies based on the experience level of the doctor, how many implants are being placed, whether bone grafting is needed, and other individual factors. We recommend scheduling a consultation so Dr. Cimo can evaluate your specific situation and provide an accurate estimate. We also offer financing options through CareCredit and Sunbit to make treatment more affordable.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Do dental implants hurt?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            No. A local anesthetic is administered before the procedure so you will not feel any pain during the placement. Most patients report that the discomfort afterward is less than expected and is manageable with over-the-counter pain medication. Dr. Cimo and his team will ensure you are completely comfortable throughout the entire process.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            How long do implants last?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            When cared for properly, dental implants can last a lifetime. The crown attached to the implant may need to be replaced after 10–15 years depending on wear, but the implant itself is designed to be permanent. Proper oral hygiene — including brushing twice daily, flossing, and regular dental checkups — is essential for implant longevity.
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Am I a candidate for dental implants?
                            <span class="faq-toggle">+</span>
                        </button>
                        <div class="faq-answer">
                            Most adults with one or more missing teeth are potential candidates for dental implants. Ideal candidates have sufficient bone density to support the implant, healthy gums, and are in generally good health. Factors such as smoking, uncontrolled diabetes, or certain medications may affect candidacy. Schedule a consultation with Dr. Cimo for a complete evaluation.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div>
                <div class="sidebar-widget" style="background:var(--primary);color:#fff;border-radius:4px;padding:30px;">
                    <h4 style="color:#fff;border-bottom-color:rgba(255,255,255,0.3);">Ready to Get Started?</h4>
                    <p style="color:rgba(255,255,255,0.9);font-size:0.92rem;margin-bottom:20px;">Schedule a dental implant consultation with Dr. Cimo today. We'll evaluate your smile and create a personalized treatment plan.</p>
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white" style="width:100%;text-align:center;">Schedule Consultation</a>
                    <div style="margin-top:20px;text-align:center;">
                        <p style="color:rgba(255,255,255,0.75);font-size:0.85rem;margin-bottom:5px;">Or call us directly:</p>
                        <a href="<?php echo esc_url( bmd_phone_link() ); ?>" style="color:#fff;font-size:1.1rem;font-weight:700;"><?php echo esc_html( bmd_phone() ); ?></a>
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h4>Implant Benefits</h4>
                    <ul style="padding-left:0;">
                        <?php $benefits = array('Natural look and feel','Permanent solution','Preserve jawbone','No removal needed','Eat any foods','Improve confidence','Easy to maintain','Can last a lifetime');
                        foreach ( $benefits as $b ) : ?>
                        <li style="padding:7px 0;border-bottom:1px solid var(--border);font-size:0.9rem;display:flex;align-items:center;gap:8px;">
                            <i class="fas fa-check-circle" style="color:var(--primary);"></i> <?php echo esc_html( $b ); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media(max-width:768px){.faq-layout{grid-template-columns:1fr !important;}}
</style>

<?php get_footer(); ?>
