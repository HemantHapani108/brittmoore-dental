<?php
/**
 * Template Name: Smile Gallery
 * Template Post Type: page
 */
get_header();
$img_uri = get_template_directory_uri() . '/assets/images/';
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Smile Gallery', 'subtitle' => 'Before & after transformations by Dr. Cimo' ) ); ?>

<section class="section-pad">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Before &amp; After Transformations</h2>
            <p class="section-subtitle">These real patient photos show the life-changing results our team achieves every day.</p>
        </div>

        <div class="ba-grid">
            <!-- Case 1 -->
            <div class="ba-pair">
                <div class="ba-images">
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'smile1.jpg' ); ?>" alt="Before – Dental Implant Case 1" loading="lazy">
                        <span class="ba-label">Before</span>
                    </div>
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'smile2.jpg' ); ?>" alt="After – Dental Implant Case 1" loading="lazy">
                        <span class="ba-label">After</span>
                    </div>
                </div>
                <p class="ba-desc">A dental implant replaces the upper lateral tooth. Bone grafting was performed to achieve optimal gum architecture.</p>
            </div>

            <!-- Case 2 -->
            <div class="ba-pair">
                <div class="ba-images">
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'img-dental.jpg' ); ?>" alt="Before – Veneer Case" loading="lazy">
                        <span class="ba-label">Before</span>
                    </div>
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'smile1.jpg' ); ?>" alt="After – Veneer Case" loading="lazy">
                        <span class="ba-label">After</span>
                    </div>
                </div>
                <p class="ba-desc">Patient injured front teeth from a fall. Front three teeth repaired with veneers to restore natural appearance and function.</p>
            </div>

            <!-- Case 3 -->
            <div class="ba-pair">
                <div class="ba-images">
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'smile2.jpg' ); ?>" alt="Before – Implant (Baby Tooth)" loading="lazy">
                        <span class="ba-label">Before</span>
                    </div>
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'smile1.jpg' ); ?>" alt="After – Implant (Baby Tooth)" loading="lazy">
                        <span class="ba-label">After</span>
                    </div>
                </div>
                <p class="ba-desc">Failing baby tooth replaced by dental implant without disturbing adjacent teeth, preserving natural spacing.</p>
            </div>

            <!-- Case 4 -->
            <div class="ba-pair">
                <div class="ba-images">
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'img-dental.jpg' ); ?>" alt="Before – Crown Lengthening" loading="lazy">
                        <span class="ba-label">Before</span>
                    </div>
                    <div class="ba-img">
                        <img src="<?php echo esc_url( $img_uri . 'smile2.jpg' ); ?>" alt="After – Crown Lengthening" loading="lazy">
                        <span class="ba-label">After</span>
                    </div>
                </div>
                <p class="ba-desc">Patient with severely worn teeth from grinding required crown lengthening treatment followed by full restorations.</p>
            </div>
        </div>

        <div class="text-center" style="margin-top:50px;">
            <p style="color:var(--text-light);font-size:1.05rem;margin-bottom:25px;">Ready to start your smile transformation? Contact us today to schedule a consultation.</p>
            <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-primary btn-lg">Schedule a Consultation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
