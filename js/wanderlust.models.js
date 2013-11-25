/**
 * @fileOverview AKQA WANDERLUST 2013 Models
 * @author <a href="mailto:adriaan.scholvinck@akqa.com">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare AOY in case it has not been declared yet
window.WANDERLUST = window.WANDERLUST || {};

/**
 * @name WANDERLUST.Models
 * @namespace The public namespace and api for the WANDERLUST Models functionality.
 * @description The public namespace and api for the WANDERLUST Models functionality. 
 * @requires WANDERLUST
 */
WANDERLUST.Models = (function(WANDERLUST, window, undefined){
	
	var config = {
		initialized: false
	}, krpano, hlookat, vlookat;

	/**
	 * @name WANDERLUST.Models-_initialize
	 * @exports WANDERLUST.Models-_initialize as WANDERLUST.Models.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'WANDERLUST.Models.initialize' );
	},

	ready = function() {
	},

	raf = function() {
		requestAnimationFrame( raf );
	};
	
	// public methods for this class
	return {
		initialize: _initialize
	};

}(WANDERLUST, window, undefined));