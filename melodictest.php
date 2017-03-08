<div id="audiotestintroduction" class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>The Musical Ear Test - The Melodical Ear Test</b>
	</div>
	<br>
	<br>
	<br>

	<div id="id" class="surveyquestion">
		<span class="keyalignleft">Participant ID:</span>
		
		<input type="text" name="id">
		
	</div>
	
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">Talimatlara gitmek</a>
	</div>
	
</div>

<div id="audiotestintroduction" class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>The Melodical Ear Test</b>
	</div>
	
	<div class="surveyquestion">
		<!-- <p class="justify">Deze taak bestaat uit twee delen. In het eerste (melodische) deel zul je gepresenteerd worden met een reeks paren van melodie&eumln. Jouw taak is om te beoordelen of de twee melodie&eumln van het paar identiek zijn of van elkaar verschillen. Dit doe je door op de knoppen "Hetzelfde" of "Verschillend" te drukken. Antwoord zo snel en accuraat mogelijk als mogelijk door te drukken op de correcte knop. Deze taak duurt ongeveer 10 minuten.</p> -->
		
		
		<p class="justify">Bu test 2 b&ouml;l&uuml;mden meydana gelecek, melodi b&ouml;l&uuml;m&uuml; ve ritim b&ouml;l&uuml;m&uuml;. Melodi b&ouml;l&uuml;m&uuml;nde size

&ccedil;ift halinde melodiler sunulacak. Sizin yapman&#305;z gereken bu melodilerin ayn&#305; m&#305; farkl&#305; m&#305; oldu&#287;una 

karar vermek. Bunu &ldquo;Ayn&#305;&rdquo; veya &ldquo;Farkl&#305;&rdquo; butonuna basarak yapacaks&#305;n&#305;z. L&uuml;tfen, 

bunu yapabildi&#287;iniz kadar h&#305;zl&#305; ve do&#287;ru butona t&#305;klamaya &ccedil;al&#305;&#351;arak yap&#305;n. Melodi b&ouml;l&uuml;m&uuml; yakla&#351;&#305;k 10 

dakika s&uuml;recek.</p>
		
		
		
	</div>
	
	
	
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">&#304;ki pratik sorular ile ba&#351;lar</a>
	</div>
</div>

<?php 
	//echo Question("Voorbeeld 1:", "trial", "audio/paulametfragments/mu_1.wav", 0); 
?>

<div id="audiotestintroduction" class="slide">

	<div class="surveyquestion" style="text-align: center;">
		<b>Pratik soru 1</b>
	</div>
	
	<div class="surveyquestion">
		<p class="justify">
			<audio controls>
				
				<source src="audio/melodicfragments/Mel_Ex01.wav" type="audio/wav">
				Your browser does not support the audio tag.
</audio>
		</p>
	</div>

	<div class="surveyquestion">
		<p class="justify">Bu melodiler ayn&#305;d&#305;r. Siz &quot;ayn&#305;&quot; cevap vermelidir.</p>
	</div>
	
	
	
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">&#304;kinci &ouml;rnek soruya gidin</a>
	</div>
	
</div>

<?php 
	//echo Question("Voorbeeld 2:", "trial", "audio/paulametfragments/mu_2.wav", 0); 
?>

<div id="audiotestintroduction" class="slide">

	<div class="surveyquestion" style="text-align: center;">
		<b>Pratik soru 2</b>
	</div>
	
	<div class="surveyquestion">
		<p class="justify">
			<audio controls>
				
				<source src="audio/melodicfragments/Mel_Ex02.wav" type="audio/wav">
				Your browser does not support the audio tag.
			</audio>
		</p>
	</div>
	
	<div class="surveyquestion">
		<p class="justify">Bu melodiler ayn&#305; de&#287;ildir. Siz &quot;farkl&#305;&quot; bir cevap vermelidir.</p>
	</div>
	
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">Testi ba&#351;latmak</a>
	</div>
	
</div>

<?php
	

	$melodictrialarray = array();

	//creates all melodic trials through iterating
	for ($i = 0; $i <= $amountoftrials - 1; $i++) {
		
		//Number into string
		$istring = strval($i+1);
		
		//Creates a melodic trial
		$melodictrialarray[$i] = Question("Melodic Trial " . $istring, "trial", "audio/paulametfragments/m_" . $istring . ".wav", 0);
		
	}

	// inserts (echo's) all trials from array in page
	for($x=0;$x<count($melodictrialarray);$x++){
	
		echo $melodictrialarray[$x];
		
	}
?>
<div class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>Bu melodi testti</b>
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="navigationbuttons">
		<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
		<a href="#" id="gotorhythmicaltest">Ritmik testine gidin</a>
	</div>
</div>
