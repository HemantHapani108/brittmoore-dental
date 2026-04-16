# Brittmoore Dental — WordPress Import Guide

## Quick Start

### Step 1: Upload Theme
Copy the entire `brittmoore-dental` folder to:
```
wp-content/themes/brittmoore-dental/
```
Activate it at: **Appearance > Themes**

### Step 2: Install Required Plugins
Go to **Plugins > Add New** and install:
- **Yoast SEO** (for meta titles/descriptions — all pre-configured)
- **Contact Form 7** (optional, for contact forms)

### Step 3: Import Content
1. Go to **Tools > Import > WordPress**
2. Install the WordPress importer if prompted
3. Upload: `import/brittmoore-dental.xml`
4. Map the author to your admin user
5. Check "Download and import file attachments"

### Step 4: Run Setup Script
Via WP-CLI:
```bash
wp eval-file wp-content/themes/brittmoore-dental/import/setup-after-import.php
```

Or manually:
1. Go to **Settings > Reading** → set Homepage to "Home" page
2. Go to **Appearance > Menus** → assign "Primary Menu" to Primary Location
3. Go to each page → set the correct page template

### Step 5: Set Front Page
1. Settings > Reading
2. Select "A static page"
3. Front page: **Home**
4. Posts page: **Blog**

---

## Pages Created & Templates

| Page | Slug | Template File |
|------|------|---------------|
| Home | `/` | `front-page.php` |
| About Us | `/about/` | `template-about.php` |
| Our Practice | `/our-practice/` | `template-our-practice.php` |
| Testimonials | `/testimonials/` | `template-testimonials.php` |
| Smile Gallery | `/smile-gallery/` | `template-smile-gallery.php` |
| Dental Implant FAQs | `/dental-implant-faqs/` | `template-implant-faqs.php` |
| Patient Resources | `/patient-resources/` | `template-patient-resources.php` |
| Our Technology | `/our-technology/` | `template-technology.php` |
| Financing | `/financing/` | `template-financing.php` |
| Appointment Request | `/appointment-request/` | `template-appointment.php` |
| Contact Us | `/contact-us/` | `template-contact.php` |

---

## Blog Posts (7 posts imported)
1. Time for Some Spring Cleaning!
2. Are you nervous about seeing the dentist? You're not alone!
3. How Missing Teeth Can Affect Your Health
4. What exactly is biofilm?
5. Bright Ideas for Your Smile
6. Clean Toothbrush/Healthy Toothbrush
7. Three Must-Have Dental Treatments

---

## Yoast SEO Meta Data
All pages and blog posts have pre-configured Yoast SEO data stored as post meta:
- `_yoast_wpseo_title` — Custom SEO title
- `_yoast_wpseo_metadesc` — Meta description
- `_yoast_wpseo_focuskw` — Focus keyword (on select pages)

These are automatically imported with the WXR file and picked up by Yoast SEO.

---

## Local Images (in `assets/images/`)
| File | Used For |
|------|----------|
| `logo-white.png` | Header logo |
| `logo-color.png` | Light background use |
| `dr-cimo-door.jpg` | Homepage / hero section |
| `dr-cimo-half.jpg` | About page doctor photo |
| `office-photo.jpg` | Our Practice page |
| `oral-cancer-screening.jpg` | Hero background |
| `img-dental.jpg` | Service cards |
| `smile1.jpg` | Gallery / service cards |
| `smile2.jpg` | Gallery / service cards |
| `blog-spring-cleaning.jpg` | Blog post 1 featured image |
| `blog-dental-anxiety.jpg` | Blog post 2 featured image |
| `blog-missing-teeth.jpg` | Blog post 3 featured image |
| `blog-biofilm.jpg` | Blog post 4 featured image |
| `blog-bright-smile.jpg` | Blog post 5 featured image |
| `blog-toothbrush.jpg` | Blog post 6 featured image |
| `blog-dental-treatments.jpg` | Blog post 7 featured image |

---

## Site Info
- **Practice:** Philip J. Cimo DDS, FAGD / Brittmoore Dental
- **Address:** 1046 Brittmoore Road, Houston, TX 77043
- **Phone:** 713-464-1887
- **Email:** phil@philipcimodds.com
- **YouTube:** https://youtu.be/YvBfUjWufD0
- **Primary Color:** #3f5c6c
