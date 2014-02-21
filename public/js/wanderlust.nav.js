/**
 * @fileOverview BALT - WANDERLUST 2013 Nav
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare WANDERLUST in case it has not been declared yet
window.WANDERLUST = window.WANDERLUST || {};

/**
 * @name WANDERLUST.Nav
 * @namespace The public namespace and api for the WANDERLUST Nav functionality.
 * @description The public namespace and api for the WANDERLUST Nav functionality. 
 * @requires WANDERLUST
 */
WANDERLUST.Nav = (function(WANDERLUST, window, undefined){
	
	var config = {
		initialized: false,
		timeout: 5000,
		skip: true,
		$nav: null,
		$navNav: null,
		$menuBlack: null,
		$menuWhite: null
	},

	/**
	 * @name WANDERLUST.Nav~_initialize
	 * @exports WANDERLUST.Nav~_initialize as WANDERLUST.Nav.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'WANDERLUST.Nav.initialize' );

		config.$nav = $('#navigation');
		config.$menuBlack = $('#navigation .menu.black');
		config.$menuWhite = $('#navigation .menu.white');

		config.$menuBlack.on('click', toggleNav );
		config.$menuWhite.on('click', toggleNav );

		// subscribe to the resize
		resize();
		this.resize_uid = RwdResize.subscribe(resize, this);
		console.log ( 'this.resize_uid: ', this.resize_uid );
	},

	toggleNav = function() {
		console.log ( 'toggle ', config.$nav.hasClass( 'open') );
		config.$nav.hasClass( 'open' ) ?  config.$nav.removeClass( 'open' ) : config.$nav.addClass( 'open' );
	},

	resize = function() {
		console.log ( "RESIZE ", WANDERLUST.$window.width() );
		config.$nav.width( WANDERLUST.$window.width() );
		config.$nav.height( WANDERLUST.$window.height() );
	};

	// public methods for this class
	return {
		initialize: _initialize
	};

}(WANDERLUST, window, undefined));

