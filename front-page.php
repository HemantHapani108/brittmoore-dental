<?php
/**
 * Homepage Template
 * Template Name: Home Page
 */
get_header();
$img_uri = get_template_directory_uri() . '/assets/images/';
?>

<!-- ── HERO SECTION ── -->
<section class="hero-section" aria-label="Hero">
    <div class="hero-bg" style="background-image:url('<?php echo esc_url( $img_uri . 'oral-cancer-screening.jpg' ); ?>');" role="img" aria-label="Dental office background"></div>
    <div class="container hero-content">
        <div class="hero-slides">

            <!-- Slide 1 -->
            <div class="hero-slide active">
                <h1>Protect Your Teeth</h1>
                <p class="hero-tagline">Friendly Staff. Excellent Service. Beautiful Smiles.</p>
                <p>Philip J. Cimo DDS, FAGD provides comprehensive dental care in a comfortable, anxiety-free environment. We treat every patient like family.</p>
                <div class="hero-btns">
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">
                        <i class="fas fa-calendar-check"></i> Schedule Your Appointment
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">
                        Meet Our Doctor
                    </a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide">
                <h1>Healthy Teeth for a Lifetime</h1>
                <p class="hero-tagline">Modern Dentistry with a Personal Touch</p>
                <p>Using the latest technology including digital X-rays, intraoral cameras, and laser dentistry to ensure the best possible care for you and your family.</p>
                <div class="hero-btns">
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">Schedule Your Appointment</a>
                    <a href="<?php echo esc_url( home_url( '/our-technology/' ) ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">Our Technology</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide">
                <h1>Your Brightest Smile</h1>
                <p class="hero-tagline">A Team You Can Rely On</p>
                <p>From teeth whitening to dental implants, we offer a full range of cosmetic and restorative dentistry services to give you the smile you deserve.</p>
                <div class="hero-btns">
                    <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">Schedule Your Appointment</a>
                    <a href="<?php echo esc_url( home_url( '/smile-gallery/' ) ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">View Smile Gallery</a>
                </div>
            </div>

        </div><!-- .hero-slides -->

        <!-- Slide Dots -->
        <div class="slide-indicators">
            <button class="slide-dot active" aria-label="Slide 1"></button>
            <button class="slide-dot" aria-label="Slide 2"></button>
            <button class="slide-dot" aria-label="Slide 3"></button>
        </div>
    </div>

    <!-- YouTube Video Play Button -->
    <a href="https://www.youtube.com/watch?v=YvBfUjWufD0" target="_blank" rel="noopener"
       style="position:absolute;bottom:30px;right:40px;z-index:10;display:flex;align-items:center;gap:10px;color:#fff;font-weight:600;font-size:0.95rem;"
       aria-label="Watch our video">
        <span style="width:50px;height:50px;background:rgba(255,255,255,0.2);border:2px solid #fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.2rem;">
            <i class="fas fa-play"></i>
        </span>
        Watch Our Video
    </a>
</section>

<!-- ── FEATURES STRIP ── -->
<div class="features-strip">
    <div class="container">
        <div class="features-grid">
            <div class="feature-item">
                <span class="feature-icon"><i class="fas fa-tooth"></i></span>
                <h3>Comprehensive Care</h3>
                <p>Full range of dental services under one roof</p>
            </div>
            <div class="feature-item">
                <span class="feature-icon"><i class="fas fa-heartbeat"></i></span>
                <h3>Pain-Free Dentistry</h3>
                <p>Anxiety-free treatment with sedation options</p>
            </div>
            <div class="feature-item">
                <span class="feature-icon"><i class="fas fa-microscope"></i></span>
                <h3>Latest Technology</h3>
                <p>Digital X-rays, lasers &amp; intraoral cameras</p>
            </div>
            <div class="feature-item">
                <span class="feature-icon"><i class="fas fa-star"></i></span>
                <h3>Experienced Team</h3>
                <p>20+ years of dental expertise in Houston</p>
            </div>
        </div>
    </div>
</div>

<!-- ── WELCOME / ABOUT SECTION ── -->
<section class="about-section section-pad">
    <div class="container">
        <div class="about-grid">
            <div class="about-img">
                <img src="<?php echo esc_url( $img_uri . 'dr-cimo-door.jpg' ); ?>"
                     alt="Dr. Philip J. Cimo DDS, FAGD"
                     width="600" height="600"
                     loading="lazy">
            </div>
            <div class="about-content">
                <h2 class="section-title left">Welcome to Brittmoore Dental</h2>
                <p>At Brittmoore Dental, Dr. Philip J. Cimo DDS, FAGD is dedicated to providing exceptional dental care to patients of all ages. Our philosophy is simple: <strong>put the needs of our patients first</strong>.</p>
                <p>We operate a state-of-the-art facility where every member of our team is committed to your comfort. Whether you're coming in for a routine cleaning or complex restorative work, you'll always feel welcomed and well cared for.</p>
                <p>Dr. Cimo has been serving the Houston community since 2004. He completed his dental degree at the University of Texas School of Dentistry and served as a dental officer in the U.S. Navy before establishing his private practice.</p>
                <ul class="credentials-list">
                    <li>University of Texas School of Dentistry Graduate</li>
                    <li>U.S. Navy Dental Officer (2000–2003)</li>
                    <li>Clinical Assistant Professor, UT School of Dentistry (2003–2007)</li>
                    <li>Fellow, Academy of General Dentistry (FAGD)</li>
                    <li>Certified in Sedation Dentistry &amp; Dental Implants</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-primary">Meet Dr. Cimo</a>
            </div>
        </div>
    </div>
</section>

<!-- ── SERVICES SECTION ── -->
<section class="services-section section-pad">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Our Dental Services</h2>
            <p class="section-subtitle">Comprehensive dental care for your entire family — from preventive to cosmetic</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-card-img">
                    <img src="<?php echo esc_url( $img_uri . 'img-dental.jpg' ); ?>" alt="Dental Implants" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3>Dental Implants</h3>
                    <p>Dental implants are a permanent and appealing solution to replace missing teeth. They look, feel, and function just like natural teeth.</p>
                    <a href="<?php echo esc_url( home_url( '/services/dental-implants/' ) ); ?>" class="btn btn-outline">Read More</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card-img">
                    <img src="<?php echo esc_url( $img_uri . 'smile1.jpg' ); ?>" alt="Crowns &amp; Bridges" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3>Crowns &amp; Bridges</h3>
                    <p>Dental bridges are a great way to replace missing teeth. They bridge the gap between remaining teeth and restore your smile's function.</p>
                    <a href="<?php echo esc_url( home_url( '/services/crowns/' ) ); ?>" class="btn btn-outline">Read More</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card-img">
                    <img src="<?php echo esc_url( $img_uri . 'smile2.jpg' ); ?>" alt="Cosmetic Dentistry" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3>Cosmetic Dentistry</h3>
                    <p>From ZOOM whitening to veneers and bonding, we offer a full range of cosmetic treatments to give you the bright, beautiful smile you've always wanted.</p>
                    <a href="<?php echo esc_url( home_url( '/services/veneers/' ) ); ?>" class="btn btn-outline">Read More</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card-img">
                    <img src="<?php echo esc_url( $img_uri . 'oral-cancer-screening.jpg' ); ?>" alt="Root Canal / Endodontics" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3>Root Canals</h3>
                    <p>Root canals are probably the most notorious procedure in dentistry. Modern techniques make the process comfortable and virtually pain-free.</p>
                    <a href="<?php echo esc_url( home_url( '/services/endodontics/' ) ); ?>" class="btn btn-outline">Read More</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card-img">
                    <img src="<?php echo esc_url( $img_uri . 'dr-cimo-half.jpg' ); ?>" alt="Dentures" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3>Dentures</h3>
                    <p>Dentures are a replacement for missing teeth that can be removed and put back into your mouth. We offer both full and partial dentures.</p>
                    <a href="<?php echo esc_url( home_url( '/services/dentures/' ) ); ?>" class="btn btn-outline">Read More</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-card-img">
                    <img src="<?php echo esc_url( $img_uri . 'office-photo.jpg' ); ?>" alt="Dental Hygiene" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3>Dental Hygiene</h3>
                    <p>Regular cleanings and exams are the foundation of a healthy smile. Our hygienists provide thorough professional cleanings and oral health education.</p>
                    <a href="<?php echo esc_url( home_url( '/services/dental-hygiene/' ) ); ?>" class="btn btn-outline">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── VIDEO SECTION ── -->
<section class="video-section">
    <div class="container">
        <h2>See Our Practice in Action</h2>
        <p>Take a virtual tour of our office and learn more about the care we provide to our Houston patients.</p>
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/YvBfUjWufD0"
                    title="Brittmoore Dental Practice Video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- ── TESTIMONIALS SECTION ── -->
<section class="testimonials-section section-pad">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">What Our Patients Say</h2>
            <p class="section-subtitle">Read why Houston families trust Brittmoore Dental for all their dental needs</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">Dr. Cimo and his staff are excellent in courtesy, professionalism, and the right diagnosis. I always leave feeling well taken care of.</p>
                <div class="testimonial-author">— Melody Ellis</div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">Dr. Cimo explains issues very thoroughly and clearly. He does not try to push cosmetic items. Honest and professional doctor.</p>
                <div class="testimonial-author">— Michael Finch</div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-text">What an unbelievable experience for going to the dentist! From the moment you arrive until you leave, everyone is so welcoming.</p>
                <div class="testimonial-author">— Ned S.</div>
            </div>
        </div>
        <div class="text-center" style="margin-top:35px;">
            <a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>" class="btn btn-primary">Read All Testimonials</a>
        </div>
    </div>
</section>

<!-- ── CTA BANNER ── -->
<section class="cta-banner">
    <div class="container">
        <h2>Ready for a Healthier, Brighter Smile?</h2>
        <p>Call us today or use our online appointment request form. New patients are always welcome!</p>
        <div class="cta-btns">
            <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-white btn-lg">
                <i class="fas fa-calendar-check"></i> Schedule Appointment
            </a>
            <a href="<?php echo esc_url( bmd_phone_link() ); ?>" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">
                <i class="fas fa-phone"></i> Call <?php echo esc_html( bmd_phone() ); ?>
            </a>
        </div>
    </div>
</section>

<!-- ── BLOG SECTION ── -->
<section class="blog-section section-pad">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Latest from Our Blog</h2>
            <p class="section-subtitle">Dental tips and health insights from Dr. Cimo's team</p>
        </div>
        <div class="blog-grid">
            <?php
            $recent_posts = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ) );
            if ( $recent_posts->have_posts() ) :
                while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                ?>
                <div class="blog-card">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="blog-card-img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'bmd-card', array( 'loading' => 'lazy' ) ); ?></a>
                    </div>
                    <?php endif; ?>
                    <div class="blog-card-body">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline">Read More</a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();
            endif; ?>
        </div>
        <div class="text-center" style="margin-top:35px;">
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-primary">View All Posts</a>
        </div>
    </div>
</section>

<!-- ── CONTACT / LOCATION SECTION ── -->
<section class="contact-section section-pad-sm">
    <div class="container">
        <div class="contact-grid">
            <div>
                <h2 class="section-title left">Find Us</h2>
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
                        <h4>Office Hours</h4>
                        <table class="hours-table">
                            <tr><td>Monday – Thursday</td><td>8:00 AM – 5:00 PM</td></tr>
                            <tr><td>Friday</td><td>8:00 AM – 2:00 PM</td></tr>
                            <tr><td>Saturday – Sunday</td><td>Closed</td></tr>
                        </table>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary" style="margin-top:15px;">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.09!2d-95.5694654!3d29.7873521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDQ3JzE0LjUiTiA5NcKwMzQnMTAuMSJX!5e0!3m2!1sen!2sus!4v1"
                    loading="lazy"
                    allowfullscreen
                    title="Brittmoore Dental Location Map"
                    aria-label="Map showing Brittmoore Dental location at 1046 Brittmoore Road, Houston TX">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
