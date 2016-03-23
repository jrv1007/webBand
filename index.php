<?php
	// Start the session
	session_start();
?>
<html>
<head>
	<title>Web Band - CPSC 427 Final Project | Slippery Rock University</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>
	<script>
		function init(){	
		
			var wWidth = $(window).width();
			var wHeight = $(window).height();
		
			console.log("init started");

			console.log("init finished");
		}
	</script>
</head>
<body onload="init()">
	<?php if(!isset($_SESSION['un'])){require_once('login_splash.php');} ?>
	
	<?php
		//DEBUG: Stop the session variable from being unset.
		$_SESSION['un'] = "tempStop"; 
	?>

	<div id='header'>
		<h1>Web Band Project - CPSC 427 - Allan Dick, James Pozzuoli, James Valenti, Chase Wickerham</h1>
	</div>
	<div id='leftContainer' class='synthContainer'>
		<div id='toolbar'>
		
		</div>
		<div id='patchBrowser_tab'>
		
		</div>
		<div id='viewport'>
			
		</div>
		<div id='oscContainer'>
			<h1>Oscillator:</h1>
			<div class='subContainer'>
			
			</div>
		</div>
		<div id='fxContainer'>
			<h1>Effects:</h1>
			<div class='subContainer'>
			
			</div>
		</div>
	</div>
	<div id='rightContainer' class='synthContainer'>
		<div id='loggedInContainer'>
		
		</div>
		<div id='currentPatch'>
		
		</div>
		<div id='recordingContainer'>
			<h1>Recording:</h1>
			<div class='subContainer'>
			
			</div>
		</div>
	</div>
</body>
</html>