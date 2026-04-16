<?php
/**
 * Template Name: About Us
 * Template Post Type: page
 */
get_header();
$img_uri = get_template_directory_uri() . '/assets/images/';
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'About Us', 'subtitle' => 'Meet Dr. Philip J. Cimo DDS, FAGD' ) ); ?>

<!-- Doctor Profile -->
<section class="doctor-section section-pad">
    <div class="container">
        <div class="doctor-grid">
            <div class="doctor-photo">
                <img src="<?php echo esc_url( $img_uri . 'dr-cimo-half.jpg' ); ?>"
                     alt="Dr. Philip J. Cimo DDS, FAGD"
                     width="300" height="400" loading="lazy">
            </div>
            <div class="doctor-info">
                <h2>Dr. Philip J. Cimo, DDS, FAGD</h2>
                <p class="doctor-credentials">Doctor of Dental Surgery &bull; Fellow, Academy of General Dentistry</p>
                <p>Dr. Cimo's philosophy of putting the needs of his patients first drives everything we do at Brittmoore Dental. He believes dental care should be affordable, comfortable, and anxiety-free. Using the most modern equipment and individualized approaches, every patient receives care tailored to their specific situation.</p>
                <p>Dr. Cimo is a native Houstonian who completed his undergraduate degree in Molecular, Cellular, and Developmental Biology at the University of Colorado before earning his dental degree from the University of Texas School of Dentistry. After graduation, he completed postgraduate training at the National Naval Medical Center in Bethesda, Maryland.</p>
                <p>He proudly served as a dental officer in the United States Navy from 2000 to 2003, including service aboard the USS TORTUGA. After returning to Houston, he served as a Clinical Assistant Professor at the UT School of Dentistry from 2003 to 2007 before establishing his private practice in 2004.</p>

                <ul class="credentials-list">
                    <li>B.S., Molecular, Cellular &amp; Developmental Biology — University of Colorado</li>
                    <li>D.D.S. — University of Texas School of Dentistry, Houston</li>
                    <li>Postgraduate Training — National Naval Medical Center, Bethesda, MD</li>
                    <li>U.S. Navy Dental Officer, USS TORTUGA (2000–2003)</li>
                    <li>Clinical Assistant Professor, UT School of Dentistry (2003–2007)</li>
                    <li>Fellow, Academy of General Dentistry (FAGD)</li>
                    <li>Certified in Basic Life Support &amp; Advanced Cardiac Life Support</li>
                    <li>Certified in Conscious Sedation Anesthesia</li>
                </ul>

                <h3 style="margin-top:25px;margin-bottom:12px;">Clinical Focus</h3>
                <p>Dr. Cimo's clinical interests include dental implants, full-mouth reconstruction, preventive care, and sedation dentistry. He is committed to continuing education to remain current with the latest advancements in dental technology and techniques.</p>

                <h3 style="margin-top:25px;margin-bottom:12px;">Personal Life</h3>
                <p>Outside the office, Dr. Cimo is married to Mary Kay Cimo and they have two daughters, Sofia and Cecilia. He enjoys fly fishing, skiing, and running in his spare time.</p>

                <div style="margin-top:25px;display:flex;gap:15px;flex-wrap:wrap;">
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-primary">
                        <i class="fas fa-calendar-check"></i> Schedule Appointment
                    </a>
                    <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn btn-outline">
                        <i class="fas fa-phone"></i> <?php echo esc_html( bmd_phone() ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner">
    <div class="container">
        <h2>Experience Exceptional Dental Care</h2>
        <p>Dr. Cimo and his team are ready to welcome you. New patients always welcome!</p>
        <div class="cta-btns">
            <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">Schedule Your Appointment</a>
            <a href="<?php echo esc_url( home_url( '/our-practice/' ) ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">Our Practice</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
