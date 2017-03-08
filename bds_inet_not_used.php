<div id="bdstestintroduction" class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<!--<b>Backward Digit Span / Tersine Say&#305; Dizisi</b>-->
		
		<!--<p class="justify">In deze taak zullen wij je reeksen van gesproken cijfers laten horen, die je vervolgens in omgekeerde volgorde dient op te noemen (bijvoorbeeld: 2-1-3 wordt 3-1-2). Wanneer je de cijfers 2-1-3 hoort, zul je deze omgekeerd opnoemen, in dit geval 3-1-2. Na elke twee reeksen van cijfers wordt de reeks uitgebreid met &eacute;&eacute;n cijfer, te beginnen met een reeks van twee cijfers. Deze taak duurt ongeveer 10 minuten.</p>-->
	
		<!--<p class= "justify">Burada size rakam dizisi verece&#287;iz. Sizin yapman&#305;z gereken verdi&#287;imiz rakamlar&#305; tersten s&ouml;ylemeniz. 
		&Ouml;rne&#287;in, biz 2-1-3 rakamlar&#305;n&#305; verdi&#287;imizde, siz 3-1-2 olarak geri s&ouml;yleyeceksiniz. Ve bu rakamlar&#305; 
		sesli bir &#351;ekilde s&ouml;ylemeniz gerekecek. &#304;lk iki dizi iki rakam i&ccedil;erecek, bu iki dizi daha sonra &uuml;&ccedil; rakam 
		i&ccedil;erecek. Her iki diziden sonra rakam say&#305;s&#305;n&#305; birer birer art&#305;raca&#287;&#305;z. Bu b&ouml;l&uuml;m yakla&#351;&#305;k 10 dakika
		s&uuml;recek.</p>-->

		<!--<p class="justify">K&#305;saca :</p>

		<p class="justify">E&#287;er duydu&#287;unuz rakamlar bunlarsa: Sizin s&ouml;ylemeniz gereken : 
		
		Rakam 1, Rakam 2, Rakam 3, Rakam 4 Rakam 4, Rakam 3, Rakam 2, Rakam 1-->

		<!--<p class="justify">E&#287;er sorunuz varsa l&uuml;tfen bana bildirin. E&#287;er yoksa, teste ba&#351;layal&#305;m!</p>-->
	
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="navigationbuttons">				
		<a href="#" class="slidesjs-next slidesjs-navigation">Teste Ba&#351;layal&#305;m!</a>
	</div>
</div>

<?php
	
	//declares array of mottier trials
	$bdstrialarray = array();
	
	//sets language and creates language code
	$language = "Turkish";
	$languagecode = strtolower(substr($language, 0, 2)); //first two characters to lowercase make the language code
	
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
	
	// Echo't alle filenames, maar uitgecommented

	/**foreach($tijdelijkeecho as $value){
		echo $value;
	};**/
	
	//creates all bds trials through iterating
	for ($i = 0; $i <= $amountoftrials - 1; $i++) {
		
		//Number into string
		$istring = strval($i+1);
		
		//Creates a mottier trial
		$bdstrialarray[$i] = Question("BDS Trial " . $istring, "other", "audio/bdsfragments/" . $language . "/" . $bdstrialfilenames[$i] . ".wav", 0);
		
	}
	
	foreach ($bdstrialarray as &$value) {
		echo $value;
	}
	
?>
<div class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>Dit was de Backward Digit Span</b>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<p>Kat&#305;l&#305;m&#305;n&#305;z i&ccedil;in te&#351;ekk&uuml;r ederiz!</p>
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="navigationbuttons">
		<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
		<!--<a href="#" id="gotomelodicaltest">Start the Musical Ear Test</a>-->
	</div>
</div>
