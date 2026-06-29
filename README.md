# Minamart Theme

A premium, native WordPress WooCommerce theme designed specifically for fresh fish and seafood e-commerce stores. Built with performance, accessibility, and user experience in mind.

## 🎯 Overview

Minamart is a production-ready WordPress WooCommerce theme that combines:
- Native WordPress theme architecture
- Full WooCommerce integration
- Mobile-first responsive design
- Performance optimization
- SEO best practices
- Accessibility compliance
- Clean, maintainable code

## ✨ Features

### Core Features
- ✅ Native WordPress WooCommerce Theme
- ✅ Mobile-First Responsive Design
- ✅ Premium UI with Soft Shadows & Animations
- ✅ WooCommerce Fully Integrated
- ✅ SEO Optimized Structure
- ✅ Fast Loading & Performance Optimized
- ✅ WCAG Accessibility Ready
- ✅ No Page Builder Dependencies
- ✅ No Bootstrap or Tailwind (Custom CSS)
- ✅ Clean, Maintainable Code

### WooCommerce Support
- Product catalog display
- Single product pages
- Shopping cart functionality
- Checkout integration
- Order management
- Customer accounts
- Product search
- Product categories and tags
- Product reviews and ratings
- Related products
- Upsell & cross-sell products

### Design System
- **Color Palette**: Navy Blue (#0B3C5D), Fresh Green (#00A651), Light Gray (#F6F8FC)
- **Typography**: Poppins font family with 9 size scales
- **Spacing**: 4px base unit with 9-step scale
- **Border Radius**: Standardized radius values (4px - 16px)
- **Shadows**: Soft to strong shadow elevation system
- **Animations**: Smooth transitions and page animations

### Development Features
- WordPress Coding Standards compliance
- WooCommerce best practices
- Security functions & nonce verification
- Performance optimization hooks
- Lazy loading support
- Image optimization
- Asset enqueuing with versioning
- Modular template architecture
- Custom action/filter hooks
- Admin theme page
- Theme customizer integration

## 📋 Requirements

- **PHP**: 8.0 or higher
- **WordPress**: 6.0 or higher
- **WooCommerce**: 6.0 or higher (optional, theme works without it)
- **Browser Support**: All modern browsers (Chrome, Firefox, Safari, Edge)

## 🚀 Installation

### Step 1: Download & Install

1. Download the theme folder to your local machine
2. Compress it as `minamart-theme.zip`
3. In WordPress admin, go to **Appearance → Themes → Add New**
4. Click **Upload Theme** and select the zip file
5. Click **Install Now**
6. Click **Activate**

### Step 2: Install WooCommerce (Required)

1. Go to **Plugins → Add New**
2. Search for "WooCommerce"
3. Click **Install Now** then **Activate**
4. Complete WooCommerce setup wizard

### Step 3: Configure Theme

1. Go to **Appearance → Customize**
2. Configure site identity (logo, tagline)
3. Set homepage to "Static Page" and select a homepage
4. Set shop page from WooCommerce settings

### Step 4: Add Products

1. Go to **Products → Add New**
2. Add product details, images, prices
3. Publish the product
4. Repeat for all products

## 📁 Project Structure

```
minamart-theme/
├── assets/                 # Theme assets
│   ├── css/               # Stylesheets
│   │   ├── variables.css     # Design tokens
│   │   ├── global.css        # Global styles
│   │   ├── typography.css    # Typography
│   │   ├── header.css        # Header styles
│   │   ├── hero.css          # Hero section
│   │   ├── products.css      # Product styles
│   │   ├── sections.css      # Section styles
│   │   ├── footer.css        # Footer styles
│   │   ├── animations.css    # Animations
│   │   ├── responsive.css    # Responsive design
│   │   └── admin.css         # Admin styles
│   └── js/                # JavaScript
│       ├── main.js           # Main entry point
│       ├── navigation.js     # Navigation logic
│       ├── search.js         # Search functionality
│       ├── mobile-nav.js     # Mobile menu
│       ├── products.js       # Product interactions
│       ├── cart.js           # Cart functionality
│       ├── wishlist.js       # Wishlist feature
│       ├── animations.js     # Animation triggers
│       └── admin.js          # Admin scripts
├── inc/                   # PHP include files
│   ├── setup.php             # Theme setup
│   ├── enqueue.php           # Asset enqueuing
│   ├── hooks.php             # Custom hooks
│   ├── helpers.php           # Helper functions
│   ├── security.php          # Security functions
│   ├── performance.php       # Performance optimization
│   ├── utilities.php         # Utility functions
│   ├── admin.php             # Admin functions
│   ├── woocommerce-config.php # WooCommerce integration
│   └── hooks-documentation.php # Hooks reference
├── template-parts/        # Reusable template parts
│   ├── header/
│   │   ├── navigation.php
│   │   ├── search-bar.php
│   │   ├── cart-icon.php
│   │   └── account-menu.php
│   ├── hero/
│   │   └── banner.php
│   ├── products/
│   │   ├── card.php
│   │   ├── grid.php
│   │   ├── featured.php
│   │   ├── best-seller.php
│   │   └── sale.php
│   ├── sections/
│   │   ├── trust.php
│   │   ├── categories.php
│   │   ├── promo-banner.php
│   │   ├── special-promo.php
│   │   ├── why-choose.php
│   │   ├── testimonials.php
│   │   └── newsletter.php
│   ├── footer/
│   │   ├── footer-content.php
│   │   └── mobile-nav.php
│   ├── content.php
│   └── content-none.php
├── woocommerce/           # WooCommerce templates
│   ├── archive-product.php
│   ├── single-product.php
│   ├── content-product.php
│   ├── cart/              # (Future overrides)
│   ├── checkout/          # (Future overrides)
│   ├── myaccount/         # (Future overrides)
│   └── loop/              # (Future overrides)
├── languages/             # Translation files
│   └── minamart.pot
├── style.css              # Theme stylesheet header
├── functions.php          # Main functions file
├── header.php             # Header template
├── footer.php             # Footer template
├── front-page.php         # Homepage template
├── index.php              # Default template
├── page.php               # Page template
├── single.php             # Post template
├── archive.php            # Archive template
├── search.php             # Search template
├── 404.php                # 404 template
├── README.md              # This file
└── .gitignore             # Git ignore rules
```

## 🎨 Customization

### Colors

Edit `assets/css/variables.css` to change color values:

```css
:root {
    --color-primary: #0B3C5D;
    --color-secondary: #00A651;
    /* ... other colors ... */
}
```

### Typography

Edit `assets/css/typography.css` to modify font sizes, weights, and line heights.

### Using Theme Hooks

Add custom content via action hooks in your child theme or custom plugin:

```php
add_action( 'minamart_hero_title', function() {
    echo 'Welcome to our seafood store';
});
```

Available hooks:
- `minamart_hero_title`
- `minamart_hero_subtitle`
- `minamart_hero_image`
- `minamart_trust_badges`
- `minamart_promo_banner_content`
- `minamart_special_promo_content`
- `minamart_why_choose_features`
- `minamart_customer_testimonials`
- `minamart_newsletter_form`
- `minamart_homepage_sections`

## 🔒 Security Features

- Nonce verification for forms
- Input sanitization
- Output escaping
- User capability checks
- WordPress security best practices
- No hardcoded sensitive data

## ⚡ Performance Optimization

- CSS variables for efficient styling
- Lazy loading for images
- Deferred CSS and JavaScript loading
- Preconnect to external domains
- Removed unnecessary WordPress features (emojis, etc.)
- Optimized asset loading
- Mobile-first responsive design

## ♿ Accessibility

- WCAG 2.1 Level AA compliant
- Semantic HTML structure
- ARIA labels and attributes
- Keyboard navigation support
- Screen reader friendly
- Color contrast ratios met
- Focus indicators on interactive elements

## 📱 Responsive Design

- Mobile-first approach
- Breakpoints: 640px, 1024px, 1920px+
- Touch-friendly interface
- Flexible grid layouts
- Responsive typography
- Adaptive images

## 🔄 WooCommerce Integration

### Hooks and Filters

The theme properly uses WooCommerce hooks:

```php
// Example: Customize products per page
add_filter( 'loop_shop_per_page', function() {
    return 12; // 12 products per page
});
```

### Template Overrides

To override a WooCommerce template:
1. Copy the template from `wp-content/plugins/woocommerce/templates/`
2. Paste it in `wp-content/themes/minamart-theme/woocommerce/`
3. Customize as needed

## 🐛 Troubleshooting

### Theme Not Showing Products
- Ensure WooCommerce is installed and activated
- Check that shop page is set in WooCommerce settings
- Verify products have been created and published

### Styles Not Loading
- Clear browser cache (Ctrl+Shift+Delete)
- Check that assets folder permissions are correct (755)
- Verify CSS files exist in `/assets/css/`

### JavaScript Not Working
- Check browser console for errors (F12)
- Verify jQuery is loaded (required by WooCommerce)
- Ensure JavaScript files are in `/assets/js/`

## 📚 Developer Resources

### Adding a Child Theme

1. Create folder: `wp-content/themes/minamart-theme-child/`
2. Create `style.css`:

```css
/*
Theme Name: Minamart Child
Template: minamart-theme
Version: 1.0.0
*/
```

3. Create `functions.php`:

```php
<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});
```

### Using Theme Constants

```php
// Theme version
echo MINAMART_VERSION; // 1.0.0

// Theme paths
echo MINAMART_DIR;     // /wp-content/themes/minamart-theme
echo MINAMART_URI;     // https://example.com/wp-content/themes/minamart-theme
echo MINAMART_ASSETS;  // https://example.com/wp-content/themes/minamart-theme/assets
```

## 📝 Changelog

### Version 1.0.0 (Initial Release)
- Initial theme release
- Native WooCommerce integration
- Responsive design
- Performance optimization
- Security implementation
- Accessibility compliance

## 📄 License

GNU General Public License v2 or later

## 🤝 Support

For support, please visit the theme documentation or contact the development team.

## 🎓 Best Practices for Using This Theme

1. **Always create a child theme** for customizations
2. **Use hooks and filters** instead of modifying core files
3. **Test on multiple browsers** and devices
4. **Keep WordPress and plugins updated**
5. **Regularly backup your website**
6. **Use a staging environment** for testing changes
7. **Follow WordPress Coding Standards**
8. **Validate HTML and CSS** regularly

## 🚀 Ready to Deploy?

Before going live:
- [ ] All products added and prices set
- [ ] Payment gateway configured
- [ ] Shipping zones configured
- [ ] Tax settings configured
- [ ] Contact information added
- [ ] Social media links set
- [ ] Site tested on mobile
- [ ] SSL certificate installed
- [ ] Backup created
- [ ] Analytics configured

---

**Made with ❤️ for seafood e-commerce**
