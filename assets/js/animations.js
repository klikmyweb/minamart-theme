/**
 * Minamart Theme - Animations Module
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const animationsModule = {
		/**
		 * Initialize animations module
		 */
		init() {
			this.setupIntersectionObserver();
			this.setupScrollAnimations();
		},

		/**
		 * Setup Intersection Observer for elements
		 */
		setupIntersectionObserver() {
			if ('IntersectionObserver' in window) {
				const observer = new IntersectionObserver((entries) => {
					entries.forEach((entry) => {
						if (entry.isIntersecting) {
							entry.target.classList.add('animate-in');
							observer.unobserve(entry.target);
						}
					});
				}, {
					threshold: 0.1,
				});

				const elements = document.querySelectorAll('[data-animate]');
				elements.forEach((el) => observer.observe(el));
			}
		},

		/**
		 * Setup scroll animations
		 */
		setupScrollAnimations() {
			let ticking = false;

			window.addEventListener('scroll', () => {
				if (!ticking) {
					window.requestAnimationFrame(() => {
						this.updateScrollAnimations();
						ticking = false;
					});
					ticking = true;
				}
			});
		},

		/**
		 * Update scroll-based animations
		 */
		updateScrollAnimations() {
			const parallaxElements = document.querySelectorAll('[data-parallax]');
			parallaxElements.forEach((el) => {
				const scrollY = window.scrollY;
				const offset = el.dataset.parallax || 0.5;
				el.style.transform = `translateY(${scrollY * offset}px)`;
			});
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.animations = animationsModule;

})();
