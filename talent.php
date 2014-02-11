<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>wanderlust management</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=640,user-scalable=no">

		<link rel="stylesheet" href="css/screen.css">

		<script src="js/lib/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		
		<div id="content" class='pink'>
			<div id='navigation' class='desktop'>
				<div class='logo'>
					<img src='/img/logo-pink.svg'/>
				</div>
				<nav>
					<a href='talent'>TALENT</a>
					<a href='about'>ABOUT</a>
					<a href='contact'>JOIN</a>
					<a href='guidance'>GUIDANCE</a>
				</nav>
			</div>
			<section id='intro' class='hidden'>
				<div class='valign'></div>
				<div class='vcontent'>
					<img src='img/logo-pink.svg'/>
				</div>
			</section>
			<section id='talent'>
				<ul>
					<li>
						<a href='talent/chelsea'>
							<img src='img/talent/chelsea/0-cover.jpg'/>
							<h2>CHELSEA</h2>
						</a>
					</li>
					<li>
						<a href='talent/irina'>
							<img src='/img/talent/Irina/0-cover.jpg'/>
							<h2>IRINA</h2>
						</a>
					</li>
					<li>
						<a href='talent/maria'>
							<img src='/img/talent/MariaHeloise/0-cover.jpg'/>
							<h2>MARIA</h2>
						</a>
					</li>
				</ul>
			</section>
		</div>

		<script src="js/lib/jquery-1.8.3.js"></script>
		<script src="js/lib/jquery.history.js"></script>
		<script src="js/lib/requestAnimationFrame.js"></script>
		<script src="js/wanderlust.models.js"></script>
		<script src="js/wanderlust.js"></script>

		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-###-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>


