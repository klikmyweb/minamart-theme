/**
 * Minamart Theme - Header Navigation
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const headerModule = {
		/**
		 * Initialize header module
		 */
		init() {
			this.setupMobileMenu();
			this.setupSearch();
			this.handleScroll();
		},

		/**
		 * Setup mobile menu toggle
		 */
		setupMobileMenu() {
			const toggle = document.querySelector('.mobile-menu-toggle');
			const menu = document.querySelector('.mobile-nav');

			if (toggle && menu) {
				toggle.addEventListener('click', (e) => {
					e.preventDefault();
					toggle.classList.toggle('active');
					menu.classList.toggle('active');
				});

				// Close menu on link click
				menu.querySelectorAll('a').forEach((link) => {
					link.addEventListener('click', () => {
						toggle.classList.remove('active');
						menu.classList.remove('active');
					});
				});
			}
		},

		/**
		 * Setup search functionality
		 */
		setupSearch() {
			const searchToggle = document.querySelector('.search-toggle');
			const searchBar = document.querySelector('.search-bar-wrapper');

			if (searchToggle && searchBar) {
				searchToggle.addEventListener('click', (e) => {
					e.preventDefault();
					searchBar.classList.toggle('active');
				});

				// Close on outside click
				document.addEventListener('click', (e) => {
					if (!e.target.closest('.search-toggle') && !e.target.closest('.search-bar-wrapper')) {
						searchBar.classList.remove('active');
					}
				});
			}
		},

		/**
		 * Handle scroll events
		 */
		handleScroll() {
			let ticking = false;

			window.addEventListener('scroll', () => {
				if (!ticking) {
					window.requestAnimationFrame(() => {
						const header = document.querySelector('.site-header');
						if (window.scrollY > 50) {
							header?.classList.add('scrolled');
						} else {
							header?.classList.remove('scrolled');
						}
						ticking = false;
					});
					ticking = true;
			}
		});
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.header = headerModule;

})();
