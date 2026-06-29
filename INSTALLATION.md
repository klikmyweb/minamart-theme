# Minamart Theme - Installation & Setup Guide

## Quick Start

### Prerequisites
- WordPress 6.0 or higher installed
- PHP 8.0 or higher
- WooCommerce plugin
- FTP or file manager access

### Installation Steps

#### Method 1: Via WordPress Admin Dashboard

1. **Download Theme**
   - Get the `minamart-theme.zip` file

2. **Upload Theme**
   - Login to WordPress Admin
   - Go to `Appearance → Themes`
   - Click `Add New → Upload Theme`
   - Select `minamart-theme.zip`
   - Click `Install Now`
   - Click `Activate`

3. **Install WooCommerce**
   - Go to `Plugins → Add New`
   - Search for "WooCommerce"
   - Click `Install Now → Activate`
   - Complete WooCommerce setup wizard

#### Method 2: Via FTP

1. Extract `minamart-theme.zip` locally
2. Connect to your server via FTP
3. Navigate to `/wp-content/themes/`
4. Upload the `minamart-theme` folder
5. Go to WordPress Admin → `Appearance → Themes`
6. Find "Minamart" and click `Activate`

### Initial Configuration

#### 1. Set Homepage

1. Go to `Settings → Reading`
2. Select "Static Page" as homepage
3. Choose or create a page for homepage
4. Save changes

#### 2. Configure WooCommerce

1. Go to `WooCommerce → Settings → General`
2. Configure shop page settings
3. Set currency and product catalog
4. Enable tax and shipping

#### 3. Customize Theme

1. Go to `Appearance → Customize`
2. Configure:
   - Site identity (logo, tagline)
   - Colors (if customizer supports it)
   - Menus
   - Widgets

#### 4. Create Navigation Menus

1. Go to `Appearance → Menus`
2. Create menus for:
   - Primary Menu
   - Footer Menu
   - Mobile Menu (optional)
3. Assign menus to locations

#### 5. Create Essential Pages

- About Us
- Contact Us
- Shipping & Returns
- Terms & Conditions
- Privacy Policy

### Adding Products

1. Go to `Products → Add New`
2. Fill in:
   - Product name
   - Description
   - Product image
   - Price
   - Stock quantity
   - Category
   - Tags
3. Set as "Featured" if needed
4. Click `Publish`

## Theme Features

### Available Template Parts

- Header with navigation and search
- Hero banner section
- Product showcase
- Product categories
- Trust badges section
- Why choose us section
- Customer testimonials
- Newsletter signup
- Mobile-responsive footer
- WhatsApp button

### Customization Hooks

Add to your child theme's `functions.php`:

```php
// Hero Title
add_action( 'minamart_hero_title', function() {
    echo 'Welcome to Fresh Seafood';
});

// Hero Subtitle
add_action( 'minamart_hero_subtitle', function() {
    echo 'Premium quality, directly from the sea';
});

// Trust Badges
add_action( 'minamart_trust_badges', function() {
    ?>
    <div class="trust-badge">
        <div class="trust-badge-icon">✓</div>
        <div class="trust-badge-title">Fresh Guarantee</div>
        <div class="trust-badge-description">100% Fresh</div>
    </div>
    <?php
});
```

## File Structure Overview

```
Core Files:
- style.css        → Theme information
- functions.php    → Main functions file
- header.php       → Header template
- footer.php       → Footer template
- index.php        → Default page template

Inc Directory (Backend):
- setup.php        → Theme setup & registration
- enqueue.php      → CSS/JS loading
- security.php     → Security functions
- performance.php  → Performance optimization
- admin.php        → Admin functions
- woocommerce-config.php → WooCommerce integration

Assets:
- assets/css/      → All stylesheets
- assets/js/       → All JavaScript files

Templates:
- template-parts/  → Reusable template components
- woocommerce/     → WooCommerce templates
```

## Troubleshooting

### Theme Not Activating
- Check PHP version (must be 8.0+)
- Check file permissions
- Look for PHP errors in `/wp-content/debug.log`

### Styles Not Showing
- Clear cache (Ctrl+Shift+Delete)
- Check `/assets/css/` folder exists
- Verify file permissions (644 for files, 755 for folders)

### WooCommerce Not Working
- Ensure WooCommerce is activated
- Check shop page is configured
- Verify products exist
- Clear WooCommerce cache

### Blank Pages
- Check PHP error log
- Enable WordPress debug mode
- Verify theme files are complete
- Check theme permissions

## Performance Tips

1. **Use a caching plugin** (W3 Total Cache, WP Super Cache)
2. **Optimize images** before uploading
3. **Use a CDN** for assets
4. **Keep WordPress updated**
5. **Use lazy loading** for images
6. **Limit plugins** to essential ones

## Security Checklist

- [ ] Install WordPress security plugin
- [ ] Use strong passwords
- [ ] Enable 2-factor authentication
- [ ] Keep WordPress updated
- [ ] Keep plugins updated
- [ ] Use HTTPS/SSL
- [ ] Limit login attempts
- [ ] Backup regularly

## Support & Resources

- WordPress Documentation: https://wordpress.org/support/
- WooCommerce Documentation: https://docs.woocommerce.com/
- Theme GitHub: [Repository Link]
- Report Issues: [Issues Link]

## Next Steps

1. Create a child theme for customizations
2. Add your products and categories
3. Configure payment and shipping
4. Set up email notifications
5. Test all functionality
6. Set up analytics
7. Launch your store

---

**Happy selling! 🎉**
