/**
 * @fileOverview BALT - WANDERLUST 2013 Intro
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare WANDERLUST in case it has not been declared yet
window.WANDERLUST = window.WANDERLUST || {};

/**
 * @name WANDERLUST.Intro
 * @namespace The public namespace and api for the WANDERLUST Intro functionality.
 * @description The public namespace and api for the WANDERLUST Intro functionality. 
 * @requires WANDERLUST
 */
WANDERLUST.Intro = (function(WANDERLUST, window, undefined){
	
	var config = {
		initialized: false,
		timeout: 5000,
		skip: false
	},

	/**
	 * @name WANDERLUST.Intro~_initialize
	 * @exports WANDERLUST.Intro~_initialize as WANDERLUST.Intro.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'WANDERLUST.Intro.initialize' );
		
		$('#intro').on( 'click', ready );
		if ( config.skip ) {
			$('#intro').addClass('hidden');
		} else {
			var timer = setTimeout ( ready, config.timeout );
		}

		// transitionend
		// oTransitionEnd
		// webkitTransitionEnd
	},

	ready = function() {
		window.location.href = 'some-girls';
		// $('#intro').addClass('hide');
		// $('#intro').on( 'webkitTransitionEnd', 
		// 	function( event ) { 
		// 		$('#intro').addClass('hidden');
		// 		console.log ( "INTRO Complete" );
		// 	});
	};

	// public methods for this class
	return {
		initialize: _initialize
	};

}(WANDERLUST, window, undefined));

