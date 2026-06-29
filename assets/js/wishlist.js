/**
 * Minamart Theme - Wishlist Module
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const wishlistModule = {
		/**
		 * Initialize wishlist module
		 */
		init() {
			this.setupWishlistButtons();
			this.loadWishlist();
		},

		/**
		 * Setup wishlist button handlers
		 */
		setupWishlistButtons() {
			const buttons = document.querySelectorAll('.btn-wishlist');
			buttons.forEach((button) => {
				button.addEventListener('click', (e) => {
					e.preventDefault();
					this.toggleWishlist(button);
				});
			});
		},

		/**
		 * Toggle wishlist item
		 */
		toggleWishlist(button) {
			const productId = button.dataset.productId;
			if (productId) {
				button.classList.toggle('active');
				// Save to localStorage
				this.saveToWishlist(productId);
			}
		},

		/**
		 * Save to wishlist
		 */
		saveToWishlist(productId) {
			let wishlist = JSON.parse(localStorage.getItem('minamart_wishlist') || '[]');
			if (wishlist.includes(productId)) {
				wishlist = wishlist.filter((id) => id !== productId);
			} else {
				wishlist.push(productId);
			}
			localStorage.setItem('minamart_wishlist', JSON.stringify(wishlist));
		},

		/**
		 * Load wishlist from storage
		 */
		loadWishlist() {
			const wishlist = JSON.parse(localStorage.getItem('minamart_wishlist') || '[]');
			wishlist.forEach((productId) => {
				const button = document.querySelector(`[data-product-id="${productId}"]`);
				if (button) {
					button.classList.add('active');
				}
			});
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.wishlist = wishlistModule;

})();
