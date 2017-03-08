<div id="bdstestintroduction" class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<!--<b>Backward Digit Span / Tersine Say&#305; Dizisi</b>-->
		
		<b>Backward Digit Span</b>
		
		<!--<p class="justify">In deze taak zullen wij je reeksen van gesproken cijfers laten horen, 
		die je vervolgens in omgekeerde volgorde dient op te noemen (bijvoorbeeld: 2-1-3 wordt 3-1-2). 
		Wanneer je de cijfers 2-1-3 hoort, zul je deze omgekeerd opnoemen, in dit geval 3-1-2. 
		Na elke twee reeksen van cijfers wordt de reeks uitgebreid met &eacute;&eacute;n cijfer, 
		te beginnen met een reeks van twee cijfers. Deze taak duurt ongeveer 10 minuten.</p>-->
        
        <?php echo $instructiontext; ?>
	
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="navigationbuttons">		
        
        <!--Start the test!Teste Ba&#351;layal&#305;m!-->
        
		<a href="#" class="slidesjs-next slidesjs-navigation">
            <?php echo $buttontext; ?>
        </a>
	</div>
</div>

<?php
	
	//declares array of mottier trials
	$bdstrialarray = array();

	//declares array with all mottier trial filenames
	$bdstrialfilenames = array(	"bdst_2n1s_42", "bdst_2n2s_85", "bdst_3n1s_926", "bdst_3n2s_514",	"bdst_4n1s_9723",
	"bdst_4n2s_8694", "bdst_5n1s_68251", "bdst_5n2s_34816", "bdst_6n1s_814935", "bdst_6n2s_658427", "bdst_7n1s_5639218", "bdst_7n2s_8219374",
	"bdst_8n1s_85267349", "bdst_8n2s_35691827");
	
	//adds language postfix to every filename
	foreach ($bdstrialfilenames as &$value) {
		$value = $value.'_'.$languagecode;
	}
	
	$tijdelijkeecho = $bdstrialfilenames;
	
	$amountoftrials = count($bdstrialfilenames);
	
	// For testing
	$amountoftrials = 14;
	
	//creates all bds trials through iterating
	for ($i = 0; $i <= $amountoftrials - 1; $i++) {
		
		//Number into string
		$istring = strval($i+1);
		
		//Creates a mottier trial
		$bdstrialarray[$i] = Question("BDS Trial " . $istring, "other", "audio/bdsfragments/" . $language . "/" . $bdstrialfilenames[$i] . $audiotype, $playbuttontexts);
		
	}
	
	foreach ($bdstrialarray as &$value) {
		echo $value;
	}
	
?>
<div class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<!--<b>Dit was de Backward Digit Span</b>-->
		<b>This was the Backward Digit Span test</b>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<!--<p>Kat&#305;l&#305;m&#305;n&#305;z i&ccedil;in te&#351;ekk&uuml;r ederiz!</p>-->
		<p>Thank you for your participation!</p>
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="navigationbuttons">
		<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
		<!--<a href="#" id="gotomelodicaltest">Start the Musical Ear Test</a>-->
	</div>
</div>
