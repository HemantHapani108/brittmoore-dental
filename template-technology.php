<?php
/**
 * Template Name: Our Technology
 * Template Post Type: page
 */
get_header();
$img_uri = get_template_directory_uri() . '/assets/images/';
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Our Technology', 'subtitle' => 'Advanced dental technology for better care and comfort' ) ); ?>

<section class="section-pad">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">State-of-the-Art Dental Technology</h2>
            <p class="section-subtitle">We invest in the latest dental technology to provide you with more accurate diagnoses, more effective treatments, and greater comfort.</p>
        </div>

        <div class="tech-grid">
            <div class="tech-card">
                <div class="tech-icon">&#128138;</div>
                <h3>Digital X-Rays</h3>
                <p>Our digital radiography system produces high-quality images with up to 90% less radiation than traditional X-rays. Images are available instantly for faster diagnosis.</p>
            </div>
            <div class="tech-card">
                <div class="tech-icon">&#128247;</div>
                <h3>Intraoral Camera</h3>
                <p>A small, pen-sized camera allows Dr. Cimo to show you exactly what he sees inside your mouth. This technology helps you better understand your dental health.</p>
            </div>
            <div class="tech-card">
                <div class="tech-icon">&#128197;</div>
                <h3>I-CAT 3D Imaging</h3>
                <p>Our cone beam CT scanner provides three-dimensional images of teeth, soft tissue, nerve pathways, and bone in a single scan, enabling precise implant planning.</p>
            </div>
            <div class="tech-card">
                <div class="tech-icon">&#128293;</div>
                <h3>Dental Laser</h3>
                <p>Laser dentistry allows for more precise treatment with less discomfort, minimal bleeding, and faster healing times compared to traditional dental instruments.</p>
            </div>
            <div class="tech-card">
                <div class="tech-icon">&#128137;</div>
                <h3>Rotary Endodontics</h3>
                <p>Our electric rotary instruments make root canal procedures faster, more comfortable, and more predictable than manual techniques.</p>
            </div>
            <div class="tech-card">
                <div class="tech-icon">&#9889;</div>
                <h3>Electric Handpieces</h3>
                <p>Electric handpieces provide more consistent torque and speed than air-driven alternatives, resulting in smoother, more precise dental work.</p>
            </div>
            <div class="tech-card">
                <div class="tech-icon">&#128138;</div>
                <h3>Oral Cancer Screening</h3>
                <p>Early detection saves lives. We perform thorough oral cancer screenings at every comprehensive exam using advanced visualization technology.</p>
            </div>
            <div class="tech-card">
                <div class="tech-icon">&#128167;</div>
                <h3>Sedation Dentistry</h3>
                <p>We offer multiple levels of sedation — from nitrous oxide to oral conscious sedation — to ensure even the most anxious patients receive comfortable care.</p>
            </div>
        </div>
    </div>
</section>

<!-- Sedation Deep Dive -->
<section class="section-pad-sm bg-light">
    <div class="container">
        <div class="about-grid">
            <div>
                <h2 class="section-title left">Sedation Options</h2>
                <p>Dental anxiety is a very real challenge for many patients. We offer several sedation options to make your visit as comfortable as possible:</p>

                <h4 style="margin:20px 0 8px;color:var(--primary);">Nitrous Oxide (Laughing Gas)</h4>
                <p>The most common form of dental sedation. Nitrous oxide is inhaled through a small mask placed over your nose. It induces a state of relaxation and wears off quickly — you'll be able to drive yourself home after your appointment.</p>

                <h4 style="margin:20px 0 8px;color:var(--primary);">Oral Conscious Sedation (Anxiolysis)</h4>
                <p>A prescribed medication taken by mouth prior to your appointment that reduces anxiety and may cause drowsiness. You'll remain conscious but relaxed throughout your procedure. A driver is required.</p>

                <h4 style="margin:20px 0 8px;color:var(--primary);">IV Sedation</h4>
                <p>For patients requiring deeper sedation, intravenous sedation provides a deeper level of relaxation. You will have little to no memory of the procedure. A driver and escort are required.</p>

                <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-primary" style="margin-top:20px;">Schedule a Consultation</a>
            </div>
            <div>
                <img src="<?php echo esc_url( $img_uri . 'office-photo.jpg' ); ?>"
                     alt="Brittmoore Dental Modern Office" loading="lazy"
                     style="border-radius:4px;box-shadow:0 6px 24px rgba(0,0,0,0.15);width:100%;">
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container">
        <h2>Experience Modern Dentistry</h2>
        <p>Call us to schedule your appointment and see our technology firsthand.</p>
        <div class="cta-btns">
            <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">Request Appointment</a>
            <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">Call <?php echo esc_html( bmd_phone() ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
