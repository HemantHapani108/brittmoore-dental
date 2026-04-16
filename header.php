<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-contact">
            <span><i class="fas fa-phone"></i> <a href="<?php echo esc_url( bmd_phone_link() ); ?>"><?php echo esc_html( bmd_phone() ); ?></a></span>
            <span><i class="fas fa-envelope"></i> <a href="mailto:<?php echo esc_attr( bmd_email() ); ?>"><?php echo esc_html( bmd_email() ); ?></a></span>
            <span><i class="fas fa-map-marker-alt"></i> <?php echo esc_html( bmd_address() ); ?></span>
        </div>
        <div class="top-bar-hours">
            <i class="fas fa-clock"></i> Mon–Thu 8AM–5PM &nbsp;|&nbsp; Fri 8AM–2PM
        </div>
    </div>
</div>

<!-- Site Header -->
<header class="site-header" role="banner">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <div class="site-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php bloginfo( 'name' ); ?> - Home">
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        $logo_url = get_template_directory_uri() . '/assets/images/logo-white.png';
                        echo '<img src="' . esc_url( $logo_url ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" width="200" height="55">';
                    }
                    ?>
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Open Menu">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Primary Navigation -->
            <nav class="main-nav" id="primary-menu" role="navigation" aria-label="Primary Navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-nav',
                    'container'      => false,
                    'fallback_cb'    => 'bmd_fallback_menu',
                ) );
                ?>
            </nav>
        </div>
    </div>
</header>

<?php
/**
 * Fallback primary menu when no menu is assigned
 */
function bmd_fallback_menu() { ?>
    <ul id="primary-nav">
        <li <?php if ( is_front_page() ) echo 'class="current-menu-item"'; ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Welcome</a></li>
        <li><a href="<?php echo esc_url( home_url( '/our-practice/' ) ); ?>">Our Practice</a></li>
        <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>">Testimonials</a></li>
        <li class="menu-item-has-children">
            <a href="#">Our Services</a>
            <ul class="sub-menu">
                <li><a href="<?php echo esc_url( home_url( '/services/dental-implants/' ) ); ?>">Dental Implants</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/crowns/' ) ); ?>">Crowns</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/bridges/' ) ); ?>">Bridges</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/dentures/' ) ); ?>">Dentures</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/veneers/' ) ); ?>">Veneers</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/whitening/' ) ); ?>">Whitening</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/bonding/' ) ); ?>">Bonding/White Fillings</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/extractions/' ) ); ?>">Extractions</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/endodontics/' ) ); ?>">Endodontics</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/dental-hygiene/' ) ); ?>">Dental Hygiene</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/periodontics/' ) ); ?>">Periodontics</a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/smile-gallery/' ) ); ?>">Smile Gallery</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dental-implant-faqs/' ) ); ?>">Dental Implant FAQs</a></li>
        <li><a href="<?php echo esc_url( home_url( '/patient-resources/' ) ); ?>">Patient Resources</a></li>
        <li><a href="<?php echo esc_url( home_url( '/our-technology/' ) ); ?>">Our Technology</a></li>
        <li><a href="<?php echo esc_url( home_url( '/financing/' ) ); ?>">Financing</a></li>
        <li class="appointment-btn"><a href="<?php echo esc_url( home_url( '/appointment-request/' ) ); ?>">Appointment Request</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
    </ul>
<?php }
