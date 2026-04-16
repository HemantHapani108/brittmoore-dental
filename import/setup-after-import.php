<?php
/**
 * Brittmoore Dental — Post-Import Setup Script
 *
 * Run this via WP-CLI after importing the WXR file:
 *   wp eval-file import/setup-after-import.php
 *
 * OR place in wp-content/mu-plugins/ and run once, then remove.
 *
 * What this script does:
 *   1. Sets the homepage to the "Home" page
 *   2. Sets blog page
 *   3. Assigns "Primary Menu" to the primary nav location
 *   4. Builds menu items in correct order
 *   5. Activates Yoast SEO plugin (if available)
 *   6. Sets general WordPress options
 */

if ( ! defined( 'ABSPATH' ) ) {
    // Running from WP-CLI context
    echo "This script must be run via WP-CLI: wp eval-file import/setup-after-import.php\n";
    exit;
}

// ── 1. Set Static Front Page ──────────────────────────────
$home_page = get_page_by_path( 'home' );
$blog_page = get_page_by_path( 'blog' );

if ( $home_page ) {
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $home_page->ID );
    echo "✓ Homepage set to: " . $home_page->post_title . " (ID: " . $home_page->ID . ")\n";
}

// Create a blog listing page if it doesn't exist
if ( ! $blog_page ) {
    $blog_id = wp_insert_post( array(
        'post_title'  => 'Blog',
        'post_name'   => 'blog',
        'post_status' => 'publish',
        'post_type'   => 'page',
    ) );
    if ( ! is_wp_error( $blog_id ) ) {
        update_option( 'page_for_posts', $blog_id );
        echo "✓ Blog page created (ID: $blog_id)\n";
    }
} else {
    update_option( 'page_for_posts', $blog_page->ID );
    echo "✓ Blog page set (ID: " . $blog_page->ID . ")\n";
}

// ── 2. Create & Assign Primary Navigation Menu ────────────
$menu_name = 'Primary Menu';
$menu_id   = wp_create_nav_menu( $menu_name );

if ( ! is_wp_error( $menu_id ) ) {
    // Assign menu to theme location
    $locations = get_theme_mod( 'nav_menu_locations', array() );
    $locations['primary'] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );
    echo "✓ Primary menu created and assigned.\n";

    // Menu structure
    $menu_items = array(
        array( 'title' => 'Welcome',            'url' => home_url( '/' ),                       'parent' => 0 ),
        array( 'title' => 'Our Practice',        'url' => home_url( '/our-practice/' ),           'parent' => 0 ),
        array( 'title' => 'Testimonials',        'url' => home_url( '/testimonials/' ),           'parent' => 0 ),
        array( 'title' => 'Our Services',        'url' => '#',                                    'parent' => 0, 'is_parent' => true ),
        array( 'title' => 'Dental Implants',     'url' => home_url( '/services/dental-implants/' ), 'parent' => 'Our Services' ),
        array( 'title' => 'Crowns',              'url' => home_url( '/services/crowns/' ),        'parent' => 'Our Services' ),
        array( 'title' => 'Bridges',             'url' => home_url( '/services/bridges/' ),       'parent' => 'Our Services' ),
        array( 'title' => 'Veneers',             'url' => home_url( '/services/veneers/' ),       'parent' => 'Our Services' ),
        array( 'title' => 'Teeth Whitening',     'url' => home_url( '/services/whitening/' ),     'parent' => 'Our Services' ),
        array( 'title' => 'ZOOM Whitening',      'url' => home_url( '/services/zoom-whitening/' ),'parent' => 'Our Services' ),
        array( 'title' => 'Bonding/White Fillings','url' => home_url( '/services/bonding/' ),     'parent' => 'Our Services' ),
        array( 'title' => 'Dentures',            'url' => home_url( '/services/dentures/' ),      'parent' => 'Our Services' ),
        array( 'title' => 'Extractions',         'url' => home_url( '/services/extractions/' ),   'parent' => 'Our Services' ),
        array( 'title' => 'Root Canal',          'url' => home_url( '/services/endodontics/' ),   'parent' => 'Our Services' ),
        array( 'title' => 'Dental Hygiene',      'url' => home_url( '/services/dental-hygiene/' ),'parent' => 'Our Services' ),
        array( 'title' => 'Periodontics',        'url' => home_url( '/services/periodontics/' ),  'parent' => 'Our Services' ),
        array( 'title' => 'Smile Gallery',       'url' => home_url( '/smile-gallery/' ),          'parent' => 0 ),
        array( 'title' => 'Dental Implant FAQs', 'url' => home_url( '/dental-implant-faqs/' ),    'parent' => 0 ),
        array( 'title' => 'Patient Resources',   'url' => home_url( '/patient-resources/' ),      'parent' => 0 ),
        array( 'title' => 'Our Technology',      'url' => home_url( '/our-technology/' ),         'parent' => 0 ),
        array( 'title' => 'Financing',           'url' => home_url( '/financing/' ),              'parent' => 0 ),
        array( 'title' => 'Appointment Request', 'url' => home_url( '/appointment-request/' ),    'parent' => 0 ),
        array( 'title' => 'About Us',            'url' => home_url( '/about/' ),                  'parent' => 0 ),
        array( 'title' => 'Contact Us',          'url' => home_url( '/contact-us/' ),             'parent' => 0 ),
        array( 'title' => 'Blog',                'url' => home_url( '/blog/' ),                   'parent' => 0 ),
    );

    $parent_ids = array();
    $order      = 1;

    foreach ( $menu_items as $item ) {
        $parent_id = 0;
        if ( $item['parent'] !== 0 && isset( $parent_ids[ $item['parent'] ] ) ) {
            $parent_id = $parent_ids[ $item['parent'] ];
        }

        $item_id = wp_update_nav_menu_item( $menu_id, 0, array(
            'menu-item-title'  => $item['title'],
            'menu-item-url'    => $item['url'],
            'menu-item-status' => 'publish',
            'menu-item-type'   => 'custom',
            'menu-item-parent-id' => $parent_id,
            'menu-item-position'  => $order++,
        ) );

        if ( ! is_wp_error( $item_id ) && isset( $item['is_parent'] ) ) {
            $parent_ids[ $item['title'] ] = $item_id;
        }
    }
    echo "✓ Menu items created.\n";
}

// ── 3. Set Template for Each Imported Page ────────────────
$page_templates = array(
    // Core pages
    'home'                            => 'front-page.php',
    'about'                           => 'template-about.php',
    'our-practice'                    => 'template-our-practice.php',
    'testimonials'                    => 'template-testimonials.php',
    'smile-gallery'                   => 'template-smile-gallery.php',
    'dental-implant-faqs'             => 'template-implant-faqs.php',
    'patient-resources'               => 'template-patient-resources.php',
    'our-technology'                  => 'template-technology.php',
    'financing'                       => 'template-financing.php',
    'appointment-request'             => 'template-appointment.php',
    'contact-us'                      => 'template-contact.php',
    // Restorative / Cosmetic
    'crowns'                          => 'template-service.php',
    'bridges'                         => 'template-service.php',
    'dentures'                        => 'template-service.php',
    'veneers'                         => 'template-service.php',
    'whitening'                       => 'template-service.php',
    'zoom-whitening'                  => 'template-service.php',
    'bonding-and-white-fillings'      => 'template-service.php',
    'inlays-and-onlays'               => 'template-service.php',
    'lumineers'                       => 'template-service.php',
    'snap-on-smile'                   => 'template-service.php',
    'britesmile'                      => 'template-service.php',
    'clear-braces'                    => 'template-service.php',
    'traditional-braces'              => 'template-service.php',
    'restorative'                     => 'template-service.php',
    'cosmetic-services'               => 'template-service.php',
    // Implants
    'dental-implants'                 => 'template-service.php',
    'implants'                        => 'template-service.php',
    'mini-implants'                   => 'template-service.php',
    'simplant'                        => 'template-service.php',
    'osstell'                         => 'template-service.php',
    // Endodontics
    'root-canal'                      => 'template-service.php',
    'endodontics'                     => 'template-service.php',
    'retreatment'                     => 'template-service.php',
    'apicoectomy-endodontic-surgery'  => 'template-service.php',
    'rotary-endodontics'              => 'template-service.php',
    'endo-microscope'                 => 'template-service.php',
    // Periodontics
    'periodontal-gum-disease'         => 'template-service.php',
    'periodontic'                     => 'template-service.php',
    'scaling-a-root-planing'          => 'template-service.php',
    'osseous-surgery'                 => 'template-service.php',
    'osseous-grafting'                => 'template-service.php',
    'gum-grafting'                    => 'template-service.php',
    'soft-tissue-graft'               => 'template-service.php',
    'crown-lengthening'               => 'template-service.php',
    'cosmetic-periodontal-surgery'    => 'template-service.php',
    'periodontal-splinting'           => 'template-service.php',
    'arestin'                         => 'template-service.php',
    'frenectomy'                      => 'template-service.php',
    // Oral Surgery
    'extractions'                     => 'template-service.php',
    'multiple-tooth-extractions'      => 'template-service.php',
    'wisdom-teeth'                    => 'template-service.php',
    'bone-grafting'                   => 'template-service.php',
    'sinus-augmentation'              => 'template-service.php',
    'ridge-augmentation'              => 'template-service.php',
    'extraction-site-preservation'    => 'template-service.php',
    'oral-surgery'                    => 'template-service.php',
    'biopsy'                          => 'template-service.php',
    'oral-pathology'                  => 'template-service.php',
    'canine-exposure'                 => 'template-service.php',
    'facial-trauma'                   => 'template-service.php',
    'orthognathic-surgery'            => 'template-service.php',
    'platelet-rich-plasma-prp'        => 'template-service.php',
    // Sedation
    'sedation'                        => 'template-service.php',
    'iv-sedation'                     => 'template-service.php',
    'oral-conscious-sedation'         => 'template-service.php',
    'nitrous-oxide'                   => 'template-service.php',
    'anxiolysis'                      => 'template-service.php',
    'before-anesthesia'               => 'template-service.php',
    'sedation-faq'                    => 'template-service.php',
    'sedation-q-a'                    => 'template-service.php',
    // Preventive
    'dental-hygiene'                  => 'template-service.php',
    'sealants'                        => 'template-service.php',
    'oral-cancer-screenings'          => 'template-service.php',
    'mouth-guards'                    => 'template-service.php',
    'night-guards'                    => 'template-service.php',
    'occlusal-adjustment'             => 'template-service.php',
    'tmj'                             => 'template-service.php',
    // Technology
    'cerec'                           => 'template-service.php',
    'digital-xray'                    => 'template-service.php',
    'i-cat'                           => 'template-service.php',
    'panorex'                         => 'template-service.php',
    'intraoral-camera'                => 'template-service.php',
    'laser'                           => 'template-service.php',
    'waterlase'                       => 'template-service.php',
    'electric-handpieces'             => 'template-service.php',
    'lluma-ultra-cone-beam-ct-scanner'=> 'template-service.php',
    // Post-Op / Patient Info
    'post-op-instructions'            => 'template-service.php',
    'after-dental-implant-surgery'    => 'template-service.php',
    'after-impacted-tooth'            => 'template-service.php',
    'after-wisdom-tooth-removal'      => 'template-service.php',
    'surgical-instructions'           => 'template-service.php',
    // Staff / Other
    'doctor'                          => 'template-about.php',
    'staff'                           => 'template-service.php',
    'our-services'                    => 'template-service.php',
    'vip-amenities'                   => 'template-service.php',
    'reviews'                         => 'template-testimonials.php',
    'q-a'                             => 'template-implant-faqs.php',
    'educational-videos'              => 'template-service.php',
    'dental-implant-faq'              => 'template-implant-faqs.php',
);

foreach ( $page_templates as $slug => $template ) {
    $page = get_page_by_path( $slug );
    if ( $page ) {
        update_post_meta( $page->ID, '_wp_page_template', $template );
        echo "✓ Template '$template' assigned to page '$slug'\n";
    }
}

// ── 4. General Site Settings ──────────────────────────────
update_option( 'blogname',        'Brittmoore Dental' );
update_option( 'blogdescription', 'Houston Dentist | Philip J. Cimo DDS, FAGD' );
update_option( 'timezone_string', 'America/Chicago' );
update_option( 'date_format',     'F j, Y' );
update_option( 'time_format',     'g:i A' );
update_option( 'posts_per_page',  10 );
update_option( 'permalink_structure', '/%postname%/' );
flush_rewrite_rules();
echo "✓ Site settings updated.\n";

// ── 5. Activate Yoast SEO (if installed) ─────────────────
if ( ! function_exists( 'wpseo_init' ) ) {
    $activate = activate_plugin( 'wordpress-seo/wp-seo.php' );
    if ( is_wp_error( $activate ) ) {
        echo "⚠ Yoast SEO not found. Install it from: Admin > Plugins > Add New > Search 'Yoast SEO'\n";
    } else {
        echo "✓ Yoast SEO activated.\n";
    }
}

// ── 6. Set featured images for blog posts ────────────────
$post_images = array(
    'time-for-some-spring-cleaning'              => 'blog-spring-cleaning.jpg',
    'are-you-nervous-about-seeing-the-dentist'   => 'blog-dental-anxiety.jpg',
    'how-missing-teeth-can-affect-your-health'   => 'blog-missing-teeth.jpg',
    'what-exactly-is-biofilm'                    => 'blog-biofilm.jpg',
    'bright-ideas-for-your-smile'                => 'blog-bright-smile.jpg',
    'clean-toothbrush-healthy-toothbrush'        => 'blog-toothbrush.jpg',
    'three-must-have-dental-treatments'          => 'blog-dental-treatments.jpg',
);

$upload_dir = wp_upload_dir();
$theme_img  = get_template_directory() . '/assets/images/';

foreach ( $post_images as $slug => $img_file ) {
    $post = get_page_by_path( $slug, OBJECT, 'post' );
    if ( ! $post ) continue;

    // Check if thumbnail already set
    if ( has_post_thumbnail( $post->ID ) ) continue;

    $img_path = $theme_img . $img_file;
    if ( ! file_exists( $img_path ) ) continue;

    // Copy to uploads
    $dest = $upload_dir['path'] . '/' . $img_file;
    copy( $img_path, $dest );

    $filetype = wp_check_filetype( $img_file );
    $attachment = array(
        'guid'           => $upload_dir['url'] . '/' . $img_file,
        'post_mime_type' => $filetype['type'],
        'post_title'     => preg_replace( '/\.[^.]+$/', '', $img_file ),
        'post_status'    => 'inherit',
    );
    $attach_id = wp_insert_attachment( $attachment, $dest, $post->ID );
    require_once ABSPATH . 'wp-admin/includes/image.php';
    $attach_data = wp_generate_attachment_metadata( $attach_id, $dest );
    wp_update_attachment_metadata( $attach_id, $attach_data );
    set_post_thumbnail( $post->ID, $attach_id );
    echo "✓ Featured image set for post: $slug\n";
}

echo "\n✅ Setup complete! Your Brittmoore Dental WordPress site is ready.\n";
echo "   Next steps:\n";
echo "   1. Go to Settings > Reading and confirm the homepage is set.\n";
echo "   2. Go to Appearance > Menus and verify the Primary Menu.\n";
echo "   3. Install and activate the Yoast SEO plugin if not done automatically.\n";
echo "   4. Upload remaining gallery images via Media > Add New.\n";
