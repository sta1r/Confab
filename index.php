<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width" />
  	<title>Confab</title>

  	<link rel="stylesheet" href="stylesheets/normalize.css" />
  	<link rel="stylesheet" href="stylesheets/app.css" />
  	<!--[if lt IE 9]><link rel="stylesheet" href="stylesheets/ie.css" type="text/css" /><![endif]-->

	<!--[if lt IE 10]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body id="top" data-spy="scroll" data-target=".top-bar" class="">

	<header id="main-nav" class="contains-nav green-bg contain-to-grid sticky">
		<div class="row">
			<nav class="top-bar">
				<ul class="title-area">
					<!-- Title Area -->
					<li class="name">
					  <h1><a class="scroll-btn" href="#top"><img alt="Confab" src="img/confab.jpg"></a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">				
					<!-- Right Nav Section -->
					<ul class="nav right">
						<li><a class="scroll-btn" href="#about">About</a></li>
						<li><a class="scroll-btn" href="#event">Event</a></li>
						<li><a class="scroll-btn" href="#register">Register</a></li>
					</ul>
				</section>
			</nav>
		</div>
	</header>

	<div id="banner" class="section">
		<div class="row">
			<div class="large-12 columns add-bottom centered">
				<img src="img/cardboard-bubbles.jpg">
				<?php perch_content('Banner'); ?>
				<a href="#register" class="scroll-btn large button aligncenter">Register Now</a>
			</div>
			<div class="large-12 columns centered">
				<a href="https://twitter.com/Confab2013" class="twitter-follow-button" data-show-count="false">Follow @Confab2013</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="Confab2013" data-count="none">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
		</div>
		<div class="row divider">
			<div class="large-10 large-offset-1 columns centered">
				<hr class="faded">
			</div>
		</div>
	</div>

	<?php perch_content('About'); ?>

	<?php perch_content('Event'); ?>

	<section id="register" class="section">

		<div class="row">
			<div class="large-8 large-offset-2 columns centered">
				<h2>Register</h2>
				<div id="wufoo-z7x3p3">
					Fill out my <a href="http://nlgn.wufoo.com/forms/z7x3p3">online form</a>.
				</div>
				<script type="text/javascript">var z7x3p3;(function(d, t) {
				var s = d.createElement(t), options = {
				'userName':'nlgn', 
				'formHash':'z7x3p3', 
				'autoResize':true,
				'height':'520',
				'async':true,
				'header':'show'};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { z7x3p3 = new WufooForm();z7x3p3.initialize(options);z7x3p3.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
				})(document, 'script');</script>
			</div>
		</div>
		<div class="full-width add-bottom"><a class="scroll-btn arrow up aligncenter" href="#top" title="Back to top"></a></div>

	</section>

	<footer class="site-footer green-bg">
		<div class="row">
			<p>&copy; Northamptonshire County Council 2013</p>
		</div>

	</footer>

	<script>
		document.write('<script src=' +
		('__proto__' in {} ? 'javascripts/vendor/jquery' : 'javascripts/vendor/zepto') +
		'.js><\/script>')
	</script>

	<script src="javascripts/foundation/foundation.js"></script>
	<script src="javascripts/foundation/foundation.topbar.js"></script>
	<script src="javascripts/vendor/bootstrap-scrollspy.js"></script>
	<script src="javascripts/script.js"></script>	
	<script>
		$(document).foundation();


	</script>

</body>
</html>