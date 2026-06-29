/**
 * Minamart Theme - Main JavaScript File
 * 
 * @package Minamart
 * @since 1.0.0
 */

(function() {
	'use strict';

	// Global Minamart object
	window.minamart = window.minamart || {};

	/**
	 * Initialize theme on DOM ready
	 */
	function init() {
		console.log('Minamart Theme initialized');
		// Initialize all components
		if (window.minamart.header) {
			window.minamart.header.init();
		}
		if (window.minamart.products) {
			window.minamart.products.init();
		}
		if (window.minamart.animations) {
			window.minamart.animations.init();
		}
	}

	// Run on DOM ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}

})();
