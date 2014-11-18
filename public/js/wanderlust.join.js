/**
 * @fileOverview BALT - WANDERLUST 2013 Join
 * @author <a href="mailto:adriaan@BALT.us">Adriaan Scholvinck</a>
 * @version 1.0
 */

// declare WANDERLUST in case it has not been declared yet
window.WANDERLUST = window.WANDERLUST || {};

/**
 * @name WANDERLUST.Join
 * @namespace The public namespace and api for the WANDERLUST Join functionality.
 * @description The public namespace and api for the WANDERLUST Join functionality. 
 * @requires WANDERLUST
 */
WANDERLUST.Join = (function(WANDERLUST, window, undefined){
	
	var config = {
		initialized: false
		allowSubmit: true
	},

	/**
	 * @name WANDERLUST.Join~_initialize
	 * @exports WANDERLUST.Join-_initialize as WANDERLUST.Join.initialize
	 * @function
	 * @description
	 */
	_initialize = function() {
		console.log ( 'WANDERLUST.Join.initialize' );
	},

	/**
	 * @name WANDERLUST.Join~setError
	 * @function
	 * @description applies error class to form element
	 */
	setError = function (field, isError) {
		var className = field.getAttribute('class') != null ? field.getAttribute('class') : '';
		if(isError){
			field.setAttribute('class', className + ' error');
		} else {
			field.setAttribute('class', className.replace(' error', ''));
		}
	},

	/**
	 * @name WANDERLUST.Join~validate
	 * @function
	 * @description validates form
	 */
	validate = function(form){
		dbnames = new Array('fname','lname','address','phone','zip','city');
		complete = 1;
		var seeError = false;

		if (allowSubmit == false) {
			seeError = true;
			console.log("Please allow uploads to complete before submitting the application.");
		}

		for(i=0; i< dbnames.length ;i++){
			if(form[dbnames[i]].value == ""){
				seeError = true;
				setError( form[dbnames[i]], true );
			} else {
				setError( form[dbnames[i]], false );
			}
		}
		
		dbnames = new Array('state', 'country', 'bdday','bdmonth','bdyear','height','weight');
		console.lognames = new Array('state', 'country', 'bdday','bdmonth','bdyear','height','weight');
		for(i=0; i< dbnames.length ;i++){
			if(form[dbnames[i]].selectedIndex == 0){
				seeError = true;
				setError( form[dbnames[i]], true );
			} else {
				setError( form[dbnames[i]], false );
			}
		}

		if(form['email'].value != ""){
			if(form['email'].value.match("@")){
				setError( form['email'], false );
			}else{
				setError( form['email'], true );
				seeError = true;
			}				
		}else{
			setError( form['email'], true );
			seeError = true;
		}	
		
		
		//if under 18
		//,'parentname','parentphone');
		//,'parent/guardian name','parent/guardian phone');
		var myDate=new Date();
		myDate.setFullYear(
			form['bdyear'].options[form['bdyear'].selectedIndex].text,
			form['bdmonth'].options[form['bdmonth'].selectedIndex].value-1,
			form['bdday'].options[form['bdday'].selectedIndex].text );

		//console.log(myDate.toString());
		var today = new Date();
		var yearsago = new Date();
		yearsago.setFullYear(today.getFullYear()-18,today.getMonth(),today.getDate());

		//console.log(yearsago.toString());
		//console.log(form['bdyear'].options[form['bdyear'].selectedIndex].text );

		if(myDate > yearsago){
		//console.log('hi');
			if(form['parentname'].value == ""){
				setError( form['parentname'], true );
				seeError = true;
			} else {
				setError( form['parentname'], false );
			}

			if(form['parentphone'].value == ""){
				setError( form['parentphone'], true );
				seeError = true;
			}
			else {
				setError( form['parentphone'], false );
			}

			if(form['parentemail'].value == ""){
				setError( form['parentemail'], true );
				seeError = true;
			} 
			else {
				setError( form['parentemail'], false );
			}		
		}

		
		//console.log(form['privacy'].length);
		
		if(!form['agree'].checked){
			setError( form['agree'].parentNode, true );
			seeError = true;
		} else {
			setError( form['agree'].parentNode, false );
		}
		
		//if(!form['community'].checked){
		//	console.log("please indicate your acceptance of the terms and conditions");
		//	return false;
		//}
		
		if (!seeError) {
			form.submit();
			return true;
		}
		return false;
	},

	/**
	 * @name WANDERLUST.Join~ofAge
	 * @function
	 * @description checks age of entrant async
	 */
	ofAge = function(){
		var month = document.f['bdmonth'].options[document.f['bdmonth'].selectedIndex].value;
		var day = document.f['bdday'].options[document.f['bdday'].selectedIndex].text;
		var year = document.f['bdyear'].options[document.f['bdyear'].selectedIndex].text;
		if(month == -1 || day == -1 || year == -1){
			return;
		}
		
		var myDate=new Date()
		myDate.setFullYear(year,
		(month-1),
		day);
		//console.log(myDate.toString());
		var today = new Date();
		var yearsago = new Date();
		yearsago.setFullYear(today.getFullYear()-18,today.getMonth(),today.getDate());
		//console.log(yearsago.toString());
		//console.log(form['bdyear'].options[form['bdyear'].selectedIndex].text );
		if(myDate > yearsago){
			document.getElementById('consenta').style.display = 'block';
			document.getElementById('consentb').style.display = 'block';
			document.getElementById('consentc').style.display = 'block';
			document.getElementById('bio').style.backgroundColor = '#ffffff';
		}else{
			document.getElementById('consenta').style.display = 'none';
			document.getElementById('consentb').style.display = 'none';
			document.getElementById('consentc').style.display = 'none';
			document.getElementById('bio').style.backgroundColor = '#f2f2f2';
		}
	},
	/**
	 * @name WANDERLUST.Join~ofAge
	 * @function
	 * @description checks age of entrant async
	 */
	upload = function(ID,IMAGE,SLOT_ID,IS_VIDEO) {
		jQuery('#image-slot').val(IMAGE);
		jQuery('#DID').val(ID);
		jQuery('#upload-image').click();
		jQuery('#slot-id').val(SLOT_ID);
		jQuery('#is-video').val(IS_VIDEO);
	},

	uploadImage = function() {
		var error = false;
		var is_video = jQuery('#is-video').val();
		var file_limit = 409600;
		if (is_video == 'y') {
			file_limit = 26210000;
		} 
		var SLOT_ID = jQuery('#slot-id').val();
		var formdata = new FormData();
		jQuery.each(jQuery('#upload-image')[0].files, function(i, file) {
			var current_size = file.size;
			if (current_size > file_limit) {
				error = true;
				console.log("The file you are uploading exceeds our size limit. Please compress your file and try again.");
				return false;
			}
			formdata.append('Filedata', file);
		});
		var $params = '?DID=' + jQuery('#DID').val() + '&image=' + jQuery('#image-slot').val() + '&is_video=' + jQuery('#is-video').val();

		if (error == false) {
			if (SLOT_ID == 'video-upload-message') {
				jQuery('#'+SLOT_ID).html('please wait...');
				allowSubmit = false;
			}

			jQuery.ajax({
			url: '/apply/Flashupload.php'+$params,
			data: formdata,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST',
			success: function(data){
				allowSubmit = true;
				if (SLOT_ID == 'video-upload-message') {
					jQuery('#'+SLOT_ID).html(data);
				} else {
					var $rand = '?' + Math.random(); 
					var img = data.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
					jQuery('#'+SLOT_ID+' img').attr('src',img+$rand);
				}
			}
			});
		}
	};

	// public methods for this class
	return {
		initialize: _initialize
	};

}(WANDERLUST, window, undefined));
