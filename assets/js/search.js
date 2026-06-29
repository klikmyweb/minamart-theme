/**
 * Minamart Theme - Search Functionality
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const searchModule = {
		/**
		 * Initialize search module
		 */
		init() {
			this.setupFormHandling();
			this.setupAutocomplete();
		},

		/**
		 * Setup form handling
		 */
		setupFormHandling() {
			const forms = document.querySelectorAll('.search-form');
			forms.forEach((form) => {
				form.addEventListener('submit', (e) => {
					const input = form.querySelector('.search-field');
					if (!input.value.trim()) {
						e.preventDefault();
					}
				});
			});
		},

		/**
		 * Setup autocomplete (placeholder for future implementation)
		 */
		setupAutocomplete() {
			// Autocomplete functionality can be added here
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.search = searchModule;

})();
