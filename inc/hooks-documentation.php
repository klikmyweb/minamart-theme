<?php
/**
 * Minamart Theme - Hooks Filter Documentation
 *
 * @package Minamart
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove or modify default WooCommerce hooks.
 */

// Remove default product gallery on single product page (optional)
// remove_theme_support( 'wc-product-gallery-zoom' );
// remove_theme_support( 'wc-product-gallery-lightbox' );
// remove_theme_support( 'wc-product-gallery-slider' );

/**
 * Custom action hooks available for developers:
 *
 * do_action( 'minamart_homepage_sections' )
 *   - Hook for adding custom homepage sections
 *
 * do_action( 'minamart_hero_title' )
 *   - Hook for custom hero title
 *
 * do_action( 'minamart_hero_subtitle' )
 *   - Hook for custom hero subtitle
 *
 * do_action( 'minamart_hero_image' )
 *   - Hook for custom hero image
 *
 * do_action( 'minamart_trust_badges' )
 *   - Hook for adding trust badges
 *
 * do_action( 'minamart_promo_banner_content' )
 *   - Hook for promotional banner content
 *
 * do_action( 'minamart_special_promo_content' )
 *   - Hook for special promo section content
 *
 * do_action( 'minamart_why_choose_features' )
 *   - Hook for why choose us features
 *
 * do_action( 'minamart_customer_testimonials' )
 *   - Hook for customer testimonials
 *
 * do_action( 'minamart_newsletter_form' )
 *   - Hook for newsletter subscription form
 */
