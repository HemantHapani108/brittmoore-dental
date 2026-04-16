<?php
/**
 * Brittmoore Dental Theme Functions
 *
 * @package brittmoore-dental
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'BMD_VERSION', '1.0.0' );
define( 'BMD_DIR',     get_template_directory() );
define( 'BMD_URI',     get_template_directory_uri() );

// ────────────────────────────────────────
// Theme Setup
// ────────────────────────────────────────
function bmd_setup() {
    load_theme_textdomain( 'brittmoore-dental', BMD_DIR . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    // Register navigation menus
    register_nav_menus( array(
        'primary'  => __( 'Primary Menu', 'brittmoore-dental' ),
        'footer'   => __( 'Footer Menu', 'brittmoore-dental' ),
    ) );

    // Set thumbnail sizes
    add_image_size( 'bmd-hero',    1280, 720,  true );
    add_image_size( 'bmd-card',    600,  400,  true );
    add_image_size( 'bmd-blog',    1200, 600,  true );
    add_image_size( 'bmd-thumb',   400,  300,  true );
    add_image_size( 'bmd-square',  600,  600,  true );
}
add_action( 'after_setup_theme', 'bmd_setup' );

// ────────────────────────────────────────
// Enqueue Scripts & Styles
// ────────────────────────────────────────
function bmd_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'bmd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Lato:wght@400;700;900&display=swap',
        array(),
        null
    );
    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );
    // Theme main CSS
    wp_enqueue_style(
        'bmd-main',
        BMD_URI . '/assets/css/main.css',
        array(),
        BMD_VERSION
    );
    // Theme main JS
    wp_enqueue_script(
        'bmd-main',
        BMD_URI . '/assets/js/main.js',
        array(),
        BMD_VERSION,
        true
    );
    // Comment reply (only on singular pages with comments)
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bmd_scripts' );

// ────────────────────────────────────────
// Widget Areas
// ────────────────────────────────────────
function bmd_widgets_init() {
    // Sidebar
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'brittmoore-dental' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Add widgets here for the blog sidebar.', 'brittmoore-dental' ),
        'before_widget' => '<div class="sidebar-widget" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    // Footer widgets
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'brittmoore-dental' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'bmd_widgets_init' );

// ────────────────────────────────────────
// Custom Page Templates (registered via template-parts)
// ────────────────────────────────────────
function bmd_get_page_templates() {
    return array(
        'template-home.php'           => 'Home Page',
        'template-about.php'          => 'About Us',
        'template-our-practice.php'   => 'Our Practice',
        'template-testimonials.php'   => 'Testimonials',
        'template-smile-gallery.php'  => 'Smile Gallery',
        'template-implant-faqs.php'   => 'Dental Implant FAQs',
        'template-technology.php'     => 'Our Technology',
        'template-patient-resources.php' => 'Patient Resources',
        'template-financing.php'      => 'Financing',
        'template-contact.php'        => 'Contact Us',
        'template-appointment.php'    => 'Appointment Request',
    );
}

// ────────────────────────────────────────
// Custom Post Meta (for Yoast-compatible SEO data)
// ────────────────────────────────────────
function bmd_add_meta_boxes() {
    add_meta_box(
        'bmd_seo_meta',
        __( 'SEO Settings (Yoast)', 'brittmoore-dental' ),
        'bmd_seo_meta_callback',
        array( 'page', 'post' ),
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'bmd_add_meta_boxes' );

function bmd_seo_meta_callback( $post ) {
    wp_nonce_field( 'bmd_seo_nonce', 'bmd_seo_nonce' );
    $title = get_post_meta( $post->ID, '_yoast_wpseo_title', true );
    $desc  = get_post_meta( $post->ID, '_yoast_wpseo_metadesc', true );
    echo '<p><label><strong>' . esc_html__( 'Yoast SEO Title:', 'brittmoore-dental' ) . '</strong><br>';
    echo '<input type="text" name="bmd_seo_title" value="' . esc_attr( $title ) . '" style="width:100%;margin-top:5px;padding:6px;"></label></p>';
    echo '<p><label><strong>' . esc_html__( 'Yoast SEO Meta Description:', 'brittmoore-dental' ) . '</strong><br>';
    echo '<textarea name="bmd_seo_desc" rows="3" style="width:100%;margin-top:5px;padding:6px;">' . esc_textarea( $desc ) . '</textarea></label></p>';
}

function bmd_save_seo_meta( $post_id ) {
    if ( ! isset( $_POST['bmd_seo_nonce'] ) || ! wp_verify_nonce( $_POST['bmd_seo_nonce'], 'bmd_seo_nonce' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    if ( isset( $_POST['bmd_seo_title'] ) ) {
        update_post_meta( $post_id, '_yoast_wpseo_title', sanitize_text_field( $_POST['bmd_seo_title'] ) );
    }
    if ( isset( $_POST['bmd_seo_desc'] ) ) {
        update_post_meta( $post_id, '_yoast_wpseo_metadesc', sanitize_textarea_field( $_POST['bmd_seo_desc'] ) );
    }
}
add_action( 'save_post', 'bmd_save_seo_meta' );

// ────────────────────────────────────────
// Yoast SEO: output meta if plugin NOT active
// ────────────────────────────────────────
function bmd_fallback_seo_meta() {
    if ( function_exists( 'wpseo_init' ) ) return; // Yoast is active, skip
    global $post;
    if ( ! is_singular() && ! is_archive() ) return;
    if ( is_singular() && $post ) {
        $title = get_post_meta( $post->ID, '_yoast_wpseo_title', true );
        $desc  = get_post_meta( $post->ID, '_yoast_wpseo_metadesc', true );
        if ( $title ) {
            echo '<title>' . esc_html( $title ) . '</title>' . "\n";
        }
        if ( $desc ) {
            echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
        }
    }
}
add_action( 'wp_head', 'bmd_fallback_seo_meta', 1 );

// ────────────────────────────────────────
// Excerpt length & read more
// ────────────────────────────────────────
function bmd_excerpt_length( $length ) { return 30; }
add_filter( 'excerpt_length', 'bmd_excerpt_length' );

function bmd_excerpt_more( $more ) {
    return '&hellip; <a class="btn btn-primary" href="' . esc_url( get_permalink() ) . '">' . __( 'Read More', 'brittmoore-dental' ) . '</a>';
}
add_filter( 'excerpt_more', 'bmd_excerpt_more' );

// ────────────────────────────────────────
// Helper: Phone number (global)
// ────────────────────────────────────────
function bmd_phone() {
    return apply_filters( 'bmd_phone', '713-464-1887' );
}
function bmd_phone_link() {
    return 'tel:' . preg_replace( '/[^0-9]/', '', bmd_phone() );
}
function bmd_address() {
    return apply_filters( 'bmd_address', '1046 Brittmoore Road, Houston, TX 77043' );
}
function bmd_email() {
    return apply_filters( 'bmd_email', 'phil@philipcimodds.com' );
}

// ────────────────────────────────────────
// Yoast SEO: Recommend plugin notice
// ────────────────────────────────────────
function bmd_recommend_yoast_notice() {
    if ( is_plugin_active( 'wordpress-seo/wp-seo.php' ) ) return;
    echo '<div class="notice notice-info is-dismissible"><p>';
    printf(
        wp_kses_post( __( '<strong>Brittmoore Dental Theme:</strong> We recommend installing <a href="%s">Yoast SEO</a> for full SEO functionality. All meta titles and descriptions are pre-configured for import.', 'brittmoore-dental' ) ),
        esc_url( admin_url( 'plugin-install.php?s=yoast+seo&tab=search&type=term' ) )
    );
    echo '</p></div>';
}
add_action( 'admin_notices', 'bmd_recommend_yoast_notice' );

// ────────────────────────────────────────
// Schema.org JSON-LD Structured Data
// ────────────────────────────────────────
function bmd_schema_markup() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => array( 'Dentist', 'MedicalBusiness' ),
        'name'     => 'Philip J. Cimo DDS, FAGD',
        'alternateName' => 'Brittmoore Dental',
        'url'      => home_url(),
        'telephone' => '+17134641887',
        'email'    => 'phil@philipcimodds.com',
        'address'  => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => '1046 Brittmoore Road',
            'addressLocality' => 'Houston',
            'addressRegion'   => 'TX',
            'postalCode'      => '77043',
            'addressCountry'  => 'US',
        ),
        'geo' => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => 29.7873521,
            'longitude' => -95.5694654,
        ),
        'openingHoursSpecification' => array(
            array( '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday' ), 'opens' => '08:00', 'closes' => '17:00' ),
            array( '@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Friday', 'opens' => '08:00', 'closes' => '14:00' ),
        ),
        'sameAs' => array(
            'https://www.facebook.com',
            'https://www.instagram.com',
            'https://www.yelp.com',
        ),
        'priceRange' => '$$',
    );
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
add_action( 'wp_head', 'bmd_schema_markup' );

// ────────────────────────────────────────
// Register Custom Post Type: Testimonials
// ────────────────────────────────────────
function bmd_register_testimonials_cpt() {
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name'          => __( 'Testimonials', 'brittmoore-dental' ),
            'singular_name' => __( 'Testimonial', 'brittmoore-dental' ),
            'add_new_item'  => __( 'Add New Testimonial', 'brittmoore-dental' ),
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => array( 'title', 'editor' ),
        'menu_icon'    => 'dashicons-format-quote',
    ) );
}
add_action( 'init', 'bmd_register_testimonials_cpt' );

// ────────────────────────────────────────
// Flush rewrite rules on theme activation
// ────────────────────────────────────────
function bmd_rewrite_flush() {
    bmd_register_testimonials_cpt();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'bmd_rewrite_flush' );
