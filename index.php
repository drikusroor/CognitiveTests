<?php session_start();?>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<!-- Importing Jquery, Slide plugin, and Play Once script -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="jquery.slides.js"></script>
		<!--<script src="scripts/playonce.js" type="text/javascript"></script>-->

        <script>	
			$(function(){
			
				$(".survey_container").slidesjs({
					navigation: false,
					pagination: false
				});
				
				$(".audiotest_container").slidesjs({
					navigation: false,
					pagination: true
				});
				
			});
			
			$( document ).ready(function() {
			
				$( ".audiotest_container" ).hide();
			
				$( "#gotoexperiment" ).click(function() {
				  $( "#survey" ).slideUp( "slow", function() {
					$( ".audiotest_container" ).slideDown( "slow", function() {
					//alert( "Animation complete." );
				        });
				  });
				  
				});
				
				$( "#gotosurvey" ).click(function() {
				  $( ".audiotest_container" ).slideUp( "slow", function() {
					$( "#survey" ).slideDown( "slow", function() {
					//alert( "Animation complete." );
				        });
				  });
				  
				});
				
			});
			
        </script>
		
		<title>Pilot for Web Based Experiment for Drikus Roor's Master Thesis</title>
	</head>
	
	<body>
	<?php

		include 'randomstring.php';

		$id = generateRandomString();

		$_SESSION['id']=$id;

		?>
	<form action="post.php" method="post">

		<!-- Total form. Every variable from the whole experiment will be exported within this form-->
		<div id="totaalexperiment">
		
			<div id="survey">
			
				<div id="survey_container">
				
					<div id="generalinformation" class="slide">
					
						<div id="id" class="surveyquestion">
							<span class="keyalignleft">Unique Id:</span>
							<select name="id">
							<option value=<?php echo "$id"; ?>><?php echo "$id"; ?></option>
							</select>
						</div>
						
						<div id="name" class="surveyquestion">
							<span class="keyalignleft">Name (optional):</span> 
							<input type="text" name="name">
						</div>
						
						<div id="email" class="surveyquestion">
							<span class="keyalignleft">Email Address: </span>
							<input type="text" name="email">
						</div>
						
						<div id="countryofbirth" class="surveyquestion">
							<span class="keyalignleft">Country/Place of birth:</span>
							<select name="countryofbirth">
								<option value="turkey">Turkey</option>
								<option value="netherlands">Netherlands</option>
								<option value="japan">Japan</option>
								<option value="other">Other</option>
							</select>
						</div>
						
						<div id="gender" class="surveyquestion">
							<span class="keyalignleft">Gender: </span>
							<input type="radio" name="sex" value="male">Male 
							<input type="radio" name="sex" value="female">Female 
						</div>
						
						<div id="age" class="surveyquestion">
							<span class="keyalignleft">Age: </span>
							<select name="age">
							
								<?php
									//for loops all ages from 15 to 100
									echo 'lol';
									for ($x=15; $x<=100; $x++){
									echo '<option value="'.$x.'">'.$x.'</option>';
									}
								?>

							</select>
						</div>
						
						<div class="navigationbuttons">
							<a href="#" class="slidesjs-next slidesjs-navigation">Next</a>
						</div>
						
					</div>
					
					
					
					<div id="nativelanguage" class="slide">
						
						<div id="nativelanguagequestion" class="surveyquestion">
						
							<span class="keyalignleft">Native Language:</span>
							<select name="native">
							<option value="turkish">Turkish</option>
							<option value="dutch">Dutch</option>
							<option value="japanese">Japanese</option>
							</select>
						
						</div>
						
						<div id="yearsinnative" class="surveyquestion">
						
							<span class="keyalignleft">Years living/lived in Country of Native Language: </span>
							<select name="yearsinnative">
								<?php
									//for loops all years from 15 to 100
									for ($x=15; $x<=100; $x++){
									echo '<option value="'.$x.'">'.$x.'</option>';
									}
								?>

							</select>
						
						</div>
						
						<div class="navigationbuttons">
							<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
							<a href="#" class="slidesjs-next slidesjs-navigation">Next</a>
						</div>
						
					</div>
					
					<div id="secondlanguage" class="slide">
						
						<div id="ageonsetsecondlanguage" class="surveyquestion">

							<span class="keyalignleft">Second Language:</span>
							<select name="second">
							<option value="turkish">Turkish</option>
							<option value="dutch">Dutch</option>
							<option value="japanese">Japanese</option>
							</select>
						</div>
						
						<div id="ageonsetsecondlanguage" class="surveyquestion">
						
							<span class="keyalignleft">Age of Onset of Acquiring Second Language: </span>
							<select name="ageonsetsecondlanguage">
							
								<?php
									//for loops all years from 1 to 100
									for ($x=1; $x<=100; $x++){
									echo '<option value="'.$x.'">'.$x.'</option>';
									}
								?>

							</select>
						
						</div>
						
						<div id="yearsformaleducation" class="surveyquestion">
						
							<span class="keyalignleft">Years of Formal Education: </span>
							<select name="yearsformaleducation">
							
								<?php
									//for loops all years from 1 to 25
									for ($x=1; $x<=25; $x++){
									echo '<option value="'.$x.'">'.$x.'</option>';
									}
								?>

							</select>
						
						</div>
						
						<div id="yearsresidence" class="surveyquestion">
						
							<span class="keyalignleft">Years of Residence in English Speaking Country(ies): </span>
							<select name="yearsresidence">
							
								<?php
									//for loops all years from 1 to 100
									for ($x=1; $x<=25; $x++){
									echo '<option value="'.$x.'">'.$x.'</option>';
									}
								?>

							</select>
						
							<div class="navigationbuttons">
								<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
								<a href="#" class="slidesjs-next slidesjs-navigation">Next</a>
							</div>
						
						</div>
						
						
						
					</div>
					
					<div id="education" class="slide">
					
						<div id="educationlevel" class="surveyquestion">
							<span class="keyalignleft">Highest level of Education you have completed:</span>
							<select name="education">
							<option value="elementary">Elementary School</option>
							<option value="highschool">Highschool</option>
							<option value="vocational">Trade/Vocational/Technical Training</option>
							<option value="bachelor">Bachelor's Degree</option>
							<option value="master">Masters's Degree or higher</option>
							</select>
						</div>
						
						<div class="navigationbuttons">
							<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
							<a href="#" id="gotoexperiment">Start the Audio Experiment</a>
						</div>
						
					</div>
			
				</div>
			<!-- closes survey div -->
			</div>
			<div id="survey">                     <!-- 2e survey div om audiotest_container heen-->
				<div id="audiotest_container">
				
					<div id="audiotestintroduction" class="slide">
						
						<div class="navigationbuttons">				
							<a href="#" id="gotosurvey">Go back to survey</a>
							<a href="#" class="slidesjs-next slidesjs-navigation">Next</a>
						</div>
					</div>
				
					<?php
					include 'questions.php';
					

					$question1 = Question("Fragment1", "audio/MET_1.mp3");
					$question2 = Question("Fragment2", "audio/MET_2.mp3");
					$question3 = Question("Fragment3", "audio/MET_3.mp3");
					$question4 = Question("Fragment4", "audio/MET_4.mp3");
				
					$questionarray = array($question1, $question2, $question3, $question4); //all questions into array before randomizing order
					shuffle($questionarray); // randomizes the order of questions!!!

					for($x=0;$x<count($questionarray);$x++)
					  {
					  echo $questionarray[$x];
					  }  // inserts (echo's) all questions in page in current, randomized, order

					//echo $question1;
					
					//echo $question2;
					
					//echo $question3;
					
					//echo $question4;

					?>
					<div class="slide">
										<div class="surveyquestion" style="text-align: center; margin-top: 20%;">
						<input type="submit" value="Done">
										</div>
											<div class="navigationbuttons">
							 <a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
											</div>
					</div>
				</div>
			</div> <!-- sluit 2e survey div -->
		
		</div>
		
	</form>
	</body>
</html>