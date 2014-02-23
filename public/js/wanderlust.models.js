/**
 * @fileOverview BALT - WANDERLUST 2013 Models
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare WANDERLUST in case it has not been declared yet
window.WANDERLUST = window.WANDERLUST || {};

/**
 * @name WANDERLUST.Models
 * @namespace The public namespace and api for the WANDERLUST Models functionality.
 * @description The public namespace and api for the WANDERLUST Models functionality. 
 * @requires WANDERLUST
 */
WANDERLUST.Models = (function(WANDERLUST, window, undefined){
	
	var config = {
		initialized: false,
		columns: 150, 
		rows:150, 
		margin: 1
	},


	_Model = function( $target ) {
		console.log ( "model " );
		this.$target = $target;
		this.$target.data('this', this);
		this.setWidth();
	},

	/**
	 * @name WANDERLUST.Models-_initialize
	 * @exports WANDERLUST.Models-_initialize as WANDERLUST.Models.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'WANDERLUST.Models.initialize ', $('#grid ul li') );
		$('#grid ul li').each( function() {
			console.log ( "here " );
			model = new _Model( $(this) );
		});
		// $('#grid ul').masonry({
		// 	itemSelector : 'li',
		// 	isResizable: true
		// });
	};

	_Model.prototype = {

		setWidth : function() {
			// var max = 40,
			// 	min = 25,
			// 	r = Math.floor(Math.random() * (max - min + 1)) + min;
			
			// console.log ( "setWidth: ", r );

			// this.$target.width( r + '%' );
		},

		resize : function() {

		},

		randomWidth : function( min, max ) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
			
	};
	
	// public methods for this class
	return {
		initialize: _initialize
	};

}(WANDERLUST, window, undefined));