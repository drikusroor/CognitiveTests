<html>

	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		
        <!-- Setting character set for possible Turkish characters -->
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        
		<!-- Importing Jquery, Slide plugin, and Play Once script -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="jquery.slides.min.js"></script>
		<!--<script src="scripts/playonce.js" type="text/javascript"></script>-->

		<script>	
				
			$(function(){
				
				$("#bdstest_container").slidesjs({
					navigation: false,
					pagination: false
				});
				
				/**$("#mottiertest_container").slidesjs({
					navigation: false,
					pagination: false
				});
				
				$("#melodicaltest_container").slidesjs({
					navigation: false,
					pagination: false
				});
				
				$("#rhythmicaltest_container").slidesjs({
					navigation: false,
					pagination: false
				});**/
			});	
				
			$( document ).ready(function() {
				
				//hides rhythm test, shows only after melodic test is finished
				$( "#melodicaltest_container" ).hide();
				$( "#rhythmicaltest_container" ).hide();
				$( "audio" ).hide(); // Hides all audio elements, e.g. all trials
				$( ".textfieldcenter" ).hide(); // Hides all audio elements, e.g. all trials
				
				
				//hides all navigation buttons and radio buttons in melodic/rhythmic trials
				$( "a.slidesjs-navigation" ).hide();
				$( ".radiobuttons" ).hide();
				
				$( "div#bdstestintroduction" ).find( "a.slidesjs-navigation" ).show(); //shows button at introduction of bds
				$( "div#mottiertestintroduction" ).find( "a.slidesjs-navigation" ).show(); //shows button at introduction of mottier test
				$( "div#audiotestintroduction" ).find( "a.slidesjs-navigation" ).show(); //shows button at introduction of melodical test
				$( "div#rhythmicaltestintroduction" ).find( "a.slidesjs-navigation" ).show(); //shows button at introduction of rhythmical test
				
				$( "#gotomelodicaltest" ).click(function() {
					$( "#mottiertest_container" ).slideUp( "fast", function() {
						$( "#melodicaltest_container" ).slideDown( "fast", function() {
					//alert( "Animation complete." );
						});
					});
				});	
				
				$( "#gotorhythmicaltest" ).click(function() {
					$( "#melodicaltest_container" ).slideUp( "fast", function() {
						$( "#rhythmicaltest_container" ).slideDown( "fast", function() {
					//alert( "Animation complete." );
						});
					});
				});	
				
				$(".playotherbutton").click(function(){
					
					//Gets active slide through which every element can be selected
					var DOM = $(this).closest('.slide');
					
					//Gets audio element in active slide and plays the corresponding fragment
					var audio = $(DOM).find('audio.other').get(0);
					audio.play();
					
					//Hides audio player after clicking play
					$(this).fadeOut();
					
					var button = $(DOM).find(".radiobuttons"); //Gets navigation button of current slide
					
					//checks if audio playback has ended
					audio.addEventListener('ended', function(){
						
						//Gets the current active DIV
						var DOM = $(this).closest('.slide');
						var button = $(DOM).find("a.slidesjs-next"); //Gets navigation button of current slide
						$(button).show();	//Shows navigationbuttons (thus after clicking radiobutton)
						
						var textfield = $(DOM).find(".textfieldcenter"); //Gets textfield of current slide
						$(textfield).show();	//Shows navigationbuttons (thus after clicking radiobutton)
						
					});
					
				});
				
				$(".playtrialbutton").click(function(){
					
					//Gets active slide through which every element can be selected
					var DOM = $(this).closest('.slide');
					
					//Gets audio element in active slide and plays the corresponding fragment
					var trialaudio = $(DOM).find('audio.trial').get(0);
					trialaudio.play();
					
					//Hides audio player after clicking play
					$(this).fadeOut();
					
					//Gets radiobuttons (same/different) in active slide and sees whether checked or not
					var checkbox = $(DOM).find('input').get(0);
					var checkboxtwo = $(DOM).find('input').get(1);
					var checkboxboolean = checkbox.checked;
					var checkboxtwoboolean = checkboxtwo.checked;
					var checked = false;
					if (checkboxboolean || checkboxtwoboolean) { checked = true }; //Gives TRUE when one of the two radiobuttons is checked
					
					var radiobuttons = $(DOM).find(".radiobuttons"); //Gets navigation button of current slide
					
					//checks if audio playback has ended
					trialaudio.addEventListener('ended', function(){
						$(radiobuttons).show();
					});
				});
					
				$( ":radio" ).click(function(){
					
					//Gets the current active DIV
					var DOM = $(this).closest('.slide');
					var button = $(DOM).find("a.slidesjs-next"); //Gets navigation button of current slide
					$(button).show();	//Shows navigationbuttons (thus after clicking radiobutton)
					
				});
				
				
				
			});
		</script>
		
		<?php
			// To include functions etc. from other files
			include 'questions.php';
		?>
		
		<title>Multilinguality and Musicality - Musical Ear Test</title>
	</head>
	
	<body>
	<?php

		include 'randomstring.php';

		$id = generateRandomString();

		$_SESSION['id']=$id;

		$amountoftrials = 2;
		
		?>
	<form action="post.php" method="post">

		<!-- Total form. Every variable from the whole experiment will be exported within this form-->
		<div id="totaalexperiment">
		
			<!-- Starts the BDS Test -->
			<div id="survey">
				<div id="bdstest_container">
					<?php include("bds_test.php"); //includes the bdstest.php script ?>
				</div>
			</div>
			
		</div>
		
	</form>
	</body>
</html>