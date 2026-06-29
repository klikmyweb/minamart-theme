/**
 * Minamart Theme - Admin JavaScript
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	const adminModule = {
		/**
		 * Initialize admin module
		 */
		init() {
			this.setupThemeOptions();
		},

		/**
		 * Setup theme options handlers
		 */
		setupThemeOptions() {
			// Admin theme customization can be added here
		},
	};

	// Expose to global Minamart object
	window.minamart = window.minamart || {};
	window.minamart.admin = adminModule;

})();
