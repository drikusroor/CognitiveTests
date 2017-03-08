<div id="audiotestintroduction" class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>The Musical Ear Test - The Rhythmical Ear Test</b>
	</div>
	
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">Talimatlara gitmek</a>
	</div>
	
</div>

<div id="audiotestintroduction" class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>The Rhythmical Ear Test</b>
	</div>
	
	<div class="surveyquestion">
		<!-- <p class="justify">In het tweede (ritmische) deel zul je gepresenteerd worden met een reeks paren van ritmische frasen. Jouw taak is om, net zoals bij het melodische deel, te beoordelen of de twee ritmes van het paar identiek zijn of van elkaar verschillen. Dit doe je door op de knoppen "Hetzelfde" of "Verschillend" te drukken. Antwoord zo snel en accuraat mogelijk als mogelijk door te drukken op de correcte knop. Je hebt twee seconden om antwoord te geven. Raak vooral niet in paniek, iedereen maakt fouten. Deze taak duurt ongeveer 10 minuten.</p>-->
			
			<p class="justify">M&uuml;zik Kula&#287;&#305; Testi &ndash; Ritim B&ouml;l&uuml;m&uuml;:

			Ritim g&ouml;revinde size &ccedil;ift halinde ritimler verilecek. Sizin yapman&#305;z gereken bu iki ritmin ayn&#305; m&#305; 

			farkl&#305; m&#305; oldu&#287;una karar vermek. Bunu &ldquo;Same&rdquo; (Ayn&#305;) veya &ldquo;Different&rdquo;(Farkl&#305;) butonuna basarak 

			yapacaks&#305;n&#305;z. L&uuml;tfen bunu yapabildi&#287;iniz kadar h&#305;zl&#305; ve do&#287;ru butona t&#305;klamaya &ccedil;al&#305;&#351;arak yap&#305;n. 

			Melodi b&ouml;l&uuml;m&uuml; yakla&#351;&#305;k 10 dakika s&uuml;recek.

			Sorunuz var m&#305;? E&#287;er yoksa, hadi ba&#351;layal&#305;m!</p>
		
	</div>
	
	
	
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">&#304;ki pratik sorular ile ba&#351;lar</a>
	</div>
</div>

<?php 
	//echo Question("Voorbeeld 1:", "trial", "audio/paulametfragments/ru_1.wav", 0); 
?>

<div id="audiotestintroduction" class="slide">

	<div class="surveyquestion" style="text-align: center;">
		<b>Pratik soru 1</b>
	</div>
	
	<div class="surveyquestion">
		<p class="justify">
			<audio controls>
				
				<source src="audio/rhythmicfragments/Rhy_Ex01.wav" type="audio/wav">
				Your browser does not support the audio tag.
</audio>
		</p>
	</div>

	<div class="surveyquestion">
		<p class="justify">Bu melodiler ayn&#305;d&#305;r. Siz &quot;ayn&#305;&quot; cevap vermelidir.</p>
	</div>
		
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">İkinci örnek soruya gidin</a>
	</div>
	
</div>

<?php 
	//echo Question("Voorbeeld 2:", "trial", "audio/paulametfragments/ru_2.wav", 0); 
?>

<div id="audiotestintroduction" class="slide">

	<div class="surveyquestion" style="text-align: center;">
		<b>Pratik soru 2</b>
	</div>
	
	<div class="surveyquestion">
		<p class="justify">
			<audio controls>
				
				<source src="audio/rhythmicfragments/Rhy_Ex02.wav" type="audio/wav">
				Your browser does not support the audio tag.
</audio>
		</p>
	</div>

	<div class="surveyquestion">
		<p class="justify">Bu melodiler ayn&#305;d&#305;r. Siz &quot;ayn&#305;&quot; cevap vermelidir.</p>
	</div>
		
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">Testi ba&#351;latmak</a>
	</div>
	
</div>

<?php
	

	$rhythmicaltrialarray = array();

	//creates all melodic trials through iterating
	for ($i = 0; $i <= $amountoftrials - 1; $i++) {
		
		//Number into string
		$istring = strval($i+1);
		
		//Creates a melodic trial
		$rhythmicaltrialarray[$i] = Question("Rhythmical Trial " . $istring, "trial", "audio/paulametfragments/r_" . $istring . ".wav", 0);
		
	}

	// inserts (echo's) all trials from array in page
	for($x=0;$x<count($rhythmicaltrialarray);$x++){
	
		echo $rhythmicaltrialarray[$x];
		
	}
?>
<div class="slide">

	<div class="surveyquestion" style="text-align: center;">
		<b>Bu ritmik testti. Kat&#305;ld&#305;&#287;&#305;n&#305;z i&ccedil;in te&#351;ekk&uuml;r ederiz.</b>
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="surveyquestion" style="text-align: center; margin-top: 20%;">
		<input type="submit" value="Done / Bitti">
	</div>
	
	<div class="navigationbuttons">
		<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
	</div>
</div>
