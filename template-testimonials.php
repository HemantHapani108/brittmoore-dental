<?php
/**
 * Template Name: Testimonials
 * Template Post Type: page
 */
get_header();
?>

<?php get_template_part( 'template-parts/page-banner', null, array( 'title' => 'Testimonials', 'subtitle' => 'What our Houston patients say about us' ) ); ?>

<section class="testimonials-section section-pad">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Patient Reviews</h2>
            <p class="section-subtitle">We are proud of the relationships we build with our patients. Read their stories below.</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">Dr. Cimo and his staff are excellent in courtesy, professionalism, and the right diagnosis. I always leave feeling well taken care of and confident in the treatment I received.</p>
                <div class="testimonial-author">— Melody Ellis</div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">Dr. Cimo explains issues very thoroughly and clearly. He does not try to push cosmetic items. I appreciate his honest approach to dental care. Highly recommend!</p>
                <div class="testimonial-author">— Michael Finch</div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">The staff at Dr. Cimo's dental office are very professional, helpful, and genuinely nice. Every visit is a pleasant experience and I feel well cared for.</p>
                <div class="testimonial-author">— Mary Grant</div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">There was no wait time and the office seems very well organized. The hygienist Yari is amazing — thorough, gentle, and so friendly. I won't go anywhere else!</p>
                <div class="testimonial-author">— Gabriella Alvarez</div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">This is the best dentist in Houston I've found so far. He's so knowledgeable, professional, and makes you feel completely at ease. His entire team is wonderful.</p>
                <div class="testimonial-author">— Sheila</div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">What an unbelievable experience for going to the dentist! From the moment you arrive until you leave, everyone treats you with the utmost care and professionalism.</p>
                <div class="testimonial-author">— Ned S.</div>
            </div>
        </div>

        <!-- Review Links -->
        <div class="text-center" style="margin-top:50px;">
            <h3 style="margin-bottom:20px;">Leave Us a Review</h3>
            <p style="color:var(--text-light);margin-bottom:25px;">Your feedback helps us improve and helps other patients find the quality care they deserve.</p>
            <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
                <a href="#" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-google"></i> Review on Google
                </a>
                <a href="#" class="btn btn-outline" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-yelp"></i> Review on Yelp
                </a>
                <a href="#" class="btn btn-outline" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i> Review on Facebook
                </a>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container">
        <h2>Join Our Family of Happy Patients</h2>
        <p>Experience the Brittmoore Dental difference. Schedule your appointment today.</p>
        <div class="cta-btns">
            <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">Schedule Appointment</a>
            <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">Call <?php echo esc_html( bmd_phone() ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
