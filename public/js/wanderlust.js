/**
 * @fileOverview WANDERLUST bootstrap JavaScript file
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a> - <a href="http://BALT.us">www.BALT.us</a> 
 * @version 1
 */

/**
 * @name WANDERLUST
 * @namespace The global namespace for the WANDERLUST website
 * @description The global namespace for the WANDERLUST website
 * @requires <a href="http://www.jquery.com">jQuery 1.7.2+</a>
 */
window.WANDERLUST = (function(self, window, undefined){
	
	/**
	 * @name WANDERLUST-_initialize
	 * @exports WANDERLUST-_initialize as WANDERLUST
	 * @function
	 * @description The initialize method that kicks off all WANDERLUST functionality
	 */
	var _initialize = function() {
		
		// prevent bootstrap from executing twice
		if (self.initialized) {
			return;
		}
		
		// console overwrite for IE8
		if (window.console === undefined) {
			window.console = {};
			console.log = function() {};
			console.error = function() {};
		}
		
		console.log('WANDERLUST.initialze');

		// Set body now that DOM is available	
		WANDERLUST.$body = $('body');

		WANDERLUST.Intro.initialize();
//		WANDERLUST.Models.initialize();

		// prevent bootstrap from executing twice
		self.initialized = true;
	
	};
	
	// WANDERLUST public variables & methods
	return {
		/**
		 * @name WANDERLUST.HAS_TOUCH
		 * @description Defines if touch events are supported. */ 
		HAS_TOUCH: ('ontouchstart' in window),
		/**
		 * @name WANDERLUST.$document
		 * @description Stored jQuery reference to document */
		$document: $(document),
		/**
		 * @name WANDERLUST.$window
		 * @description Stored jQuery reference to window */
		$window: $(window),
		/**
		 * @name WANDERLUST.$html
		 * @description Stored jQuery reference to html element */
		$html: $('html'),
		/**
		 * @name WANDERLUST.$body
		 * @description Stored jQuery reference to body element */
		$body: null,
		initialize: _initialize
	};

}(window.WANDERLUST || {}, window, undefined));


// Initialize functionality
$(document).ready(WANDERLUST.initialize);