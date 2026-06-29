/**
 * Minamart Theme - Shopping Cart Module
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const cartModule = {
		/**
		 * Initialize cart module
		 */
		init() {
			this.setupAddToCart();
			this.setupCartUpdates();
		},

		/**
		 * Setup add to cart handlers
		 */
		setupAddToCart() {
			const buttons = document.querySelectorAll('.btn-add-cart');
			buttons.forEach((button) => {
				button.addEventListener('click', (e) => {
					// AJAX cart addition will be handled by WooCommerce JS
				});
			});
		},

		/**
		 * Setup cart update handlers
		 */
		setupCartUpdates() {
			document.addEventListener('added_to_cart', (e) => {
				this.updateCartCount();
			});
		},

		/**
		 * Update cart count display
		 */
		updateCartCount() {
			const counter = document.querySelector('.cart-count');
			if (counter) {
				// Update cart count (will be handled by WooCommerce)
			}
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.cart = cartModule;

})();
