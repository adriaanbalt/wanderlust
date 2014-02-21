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
		navActive: false
	},

	/**
	 * @name WANDERLUST.Nav~_initialize
	 * @exports WANDERLUST.Nav~_initialize as WANDERLUST.Nav.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'WANDERLUST.Nav.initialize' );

		$navigation = $('#navigation');
		$nav = $('#navigation nav');
		$menuBlack = $('#navigation .menu.black');
		$menuWhite = $('#navigation .menu.white');

		$menuBlack.on('click', toggleNav );
		$menuWhite.on('click', toggleNav );

		// subscribe to the resize
		resize();
		this.resize_uid = RwdResize.subscribe(resize, this);
		console.log ( 'this.resize_uid: ', this.resize_uid );
	},

	toggleNav = function() {
		config.navActive = !config.navActive;
		if ( config.navActive ) {
			_gaq.push(['_trackEvent', 'Nav opened']);
			$navigation.addClass( 'open' );
			$nav.clearQueue().animate({
				'opacity':1
			}, 150, function() {
			});

		} else {
			$nav.clearQueue().animate({
				'opacity':0
			}, 150, function() {
				$navigation.removeClass( 'open' );
			});
		}
	},

	resize = function() {
		// config.$nav.width( WANDERLUST.$window.width() );
		// config.$nav.height( WANDERLUST.$window.height() );
	};

	// public methods for this class
	return {
		initialize: _initialize
	};

}(WANDERLUST, window, undefined));

