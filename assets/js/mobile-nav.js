/**
 * Minamart Theme - Mobile Navigation
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const mobileNavModule = {
		/**
		 * Initialize mobile navigation module
		 */
		init() {
			this.setupMenuToggle();
			this.setupBackdrop();
		},

		/**
		 * Setup menu toggle
		 */
		setupMenuToggle() {
			const toggle = document.querySelector('.mobile-menu-toggle');
			const menu = document.querySelector('.mobile-nav');

			if (toggle && menu) {
				toggle.addEventListener('click', (e) => {
					e.stopPropagation();
					toggle.classList.toggle('active');
					menu.classList.toggle('active');
				});
			}
		},

		/**
		 * Setup backdrop click handling
		 */
		setupBackdrop() {
			document.addEventListener('click', (e) => {
				const toggle = document.querySelector('.mobile-menu-toggle');
				const menu = document.querySelector('.mobile-nav');

				if (menu && menu.classList.contains('active')) {
					if (!e.target.closest('.mobile-nav') && !e.target.closest('.mobile-menu-toggle')) {
						toggle?.classList.remove('active');
						menu.classList.remove('active');
					}
				}
			});
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.mobileNav = mobileNavModule;

})();
