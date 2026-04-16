<?php
$logo_white = get_template_directory_uri() . '/assets/images/logo-white.png';
?>

<!-- Site Footer -->
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">

            <!-- Col 1: About -->
            <div class="footer-widget">
                <div class="footer-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( $logo_white ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="180" height="50">
                    </a>
                </div>
                <p class="footer-about">Philip J. Cimo DDS, FAGD provides comprehensive dental care with a focus on patient comfort. Serving Houston, TX and surrounding areas since 2004.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Yelp" target="_blank" rel="noopener noreferrer"><i class="fab fa-yelp"></i></a>
                    <a href="#" aria-label="Google Reviews" target="_blank" rel="noopener noreferrer"><i class="fab fa-google"></i></a>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="footer-widget">
                <h4><?php _e( 'Quick Links', 'brittmoore-dental' ); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/our-practice/' ) ); ?>">Our Practice</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/our-technology/' ) ); ?>">Our Technology</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/smile-gallery/' ) ); ?>">Smile Gallery</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>">Testimonials</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/financing/' ) ); ?>">Financing</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>">Request Appointment</a></li>
                </ul>
            </div>

            <!-- Col 3: Contact Info -->
            <div class="footer-widget">
                <h4><?php _e( 'Contact Us', 'brittmoore-dental' ); ?></h4>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>1046 Brittmoore Road<br>Houston, TX 77043</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="<?php echo esc_url( bmd_phone_link() ); ?>"><?php echo esc_html( bmd_phone() ); ?></a>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo esc_attr( bmd_email() ); ?>"><?php echo esc_html( bmd_email() ); ?></a>
                </div>
            </div>

            <!-- Col 4: Hours -->
            <div class="footer-widget">
                <h4><?php _e( 'Office Hours', 'brittmoore-dental' ); ?></h4>
                <div class="footer-hours-row"><span>Monday</span><span>8:00 AM – 5:00 PM</span></div>
                <div class="footer-hours-row"><span>Tuesday</span><span>8:00 AM – 5:00 PM</span></div>
                <div class="footer-hours-row"><span>Wednesday</span><span>8:00 AM – 5:00 PM</span></div>
                <div class="footer-hours-row"><span>Thursday</span><span>8:00 AM – 5:00 PM</span></div>
                <div class="footer-hours-row"><span>Friday</span><span>8:00 AM – 2:00 PM</span></div>
                <div class="footer-hours-row"><span>Saturday</span><span>Closed</span></div>
                <div class="footer-hours-row"><span>Sunday</span><span>Closed</span></div>
                <br>
                <a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>" class="btn btn-primary" style="font-size:0.85rem;padding:10px 20px;">
                    <i class="fas fa-calendar-check"></i> Schedule Appointment
                </a>
            </div>

        </div><!-- .footer-grid -->
    </div><!-- .container -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <p>
                &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> &mdash; Philip J. Cimo DDS, FAGD. All rights reserved.
                &nbsp;|&nbsp; <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a>
                &nbsp;|&nbsp; <a href="<?php echo esc_url( wp_login_url() ); ?>">Admin</a>
            </p>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" aria-label="Back to top" style="display:none;position:fixed;bottom:25px;right:25px;width:44px;height:44px;background:var(--primary);color:#fff;border:none;border-radius:50%;cursor:pointer;z-index:999;align-items:center;justify-content:center;font-size:1.1rem;box-shadow:0 2px 8px rgba(0,0,0,0.2);">
    <i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
