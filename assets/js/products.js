/**
 * Minamart Theme - Products Module
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const productsModule = {
		/**
		 * Initialize products module
		 */
		init() {
			this.setupProductCards();
			this.setupGridView();
		},

		/**
		 * Setup product card interactions
		 */
		setupProductCards() {
			const cards = document.querySelectorAll('.product-card');
			cards.forEach((card) => {
				card.addEventListener('mouseenter', () => {
					card.classList.add('hover');
				});
				card.addEventListener('mouseleave', () => {
					card.classList.remove('hover');
				});
			});
		},

		/**
		 * Setup grid view options
		 */
		setupGridView() {
			const grids = document.querySelectorAll('.products-grid');
			grids.forEach((grid) => {
				const columns = grid.dataset.columns;
				if (columns) {
					grid.style.setProperty('--grid-columns', columns);
				}
			});
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.products = productsModule;

})();
