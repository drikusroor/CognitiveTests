<div id="mottiertestintroduction" class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>Mottier-Test</b>
		
		<!--<p class="justify">Je zult worden gepresenteerd met gesproken woorden zonder betekenis (bv. <i>turasi</i> of <i>bamodeli</i>). De opdracht is om de woorden exact te herhalen zoals je ze hoort. Na elke reeks van zes woorden wordt er een nieuwe reeks van zes woorden, maar dan met een lettergreep meer. De eerste zes woorden zullen twee lettergrepen bevatten, de tweede reeks zal woorden van drie lettergrepen bevatten, etc. Deze taak duurt ongeveer 10 minuten.</p> -->
		
		<!--<p class="justify">Burada size belli bir anlam i&ccedil;ermeyen kelimeler s&ouml;ylenecek (&ouml;rne&#287;in <i>turasi</i> veya <i>bamodeli</i>). Burada yapman&#305;z gereken kelimeleri duydu&#287;unuz anda ve duydu&#287;unuz &#351;ekilde tekrar etmeniz. &#304;lk b&ouml;l&uuml;m 2 heceli 6 kelime i&ccedil;erecek, sonraki b&ouml;l&uuml;mde 3 heceli 6 kelime olacak. Her b&ouml;l&uuml;mden sonra verilecek 6 kelimeye bir hece eklenecek. Bu b&ouml;l&uuml;m yakla&#351;&#305;k 10 dakika s&uuml;recek. E&#287;er sorunuz varsa l&uuml;tfen bana bildirin. E&#287;er yoksa, teste ba&#351;layal&#305;m!</p>-->
		
		<!--<p class="justify">You will be presented with spoken words without any meaning (for example <i>turasi</i> or <i>bamodeli</i>). The task is to repeat the words exactly the way you hear them. There first sequence will contain 6 words of 2 syllables, the next sequence of 6 words will contain 3 syllables. After every sequence of 6 words a syllable will be added. This task will last for about 10 minutes. If you have any questions, please let me know. If not, let's start the test!</p>-->
        
        <?php echo $instructiontext; ?>
		
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="navigationbuttons">				
		<!--<a href="#" class="slidesjs-next slidesjs-navigation">Teste Ba&#351;layal&#305;m!</a>-->
		<a href="#" class="slidesjs-next slidesjs-navigation">
            <?php echo $buttontext; ?>
        </a>
	</div>
</div>

<?php
	
	//declares array of mottier trials
	$mottiertrialarray = array();
	
	//declares array with all mottier trial filenames
	$mottiertrialfilenames = array(	"01rela", "02noma", "03godu", "04mera",	"05luri",
	"06limo", "07kapeto", "08giboda", "09lorema", "10tokipa", "11dugabe", "12nomari",
	"13pikatura", "14gabodila", "15monalura", "16tokapimo", "17debagusi", "18relomano",
	"19katopinafe",	"20gebidafino",	"21ronamelita",	"22tapikusawe",	"23degobesaro",	"24muralenoka",
	"25pekatorisema", "26dagobilaseta",	"27leraminofeko", "28kapotilafesa",	"29bigadonafera",
	"30nomalirakosa", "31badi-fibu-gopela",	"32rota-witu-silamo", "33dafi-rota-kepasi",
	"34faki-lubo-werigo", "35sena-bado-felupi",	"36miko-fitu-sobago" );
	
	//adds language postfix to every filename
	foreach ($mottiertrialfilenames as &$value) {
		$value = $value.'_'.$languagecode;
	}
	
	$tijdelijkeecho = $mottiertrialfilenames;
	
	$amountoftrials = count($mottiertrialfilenames);
	
	// For testing
	$amountoftrials = 36;
	
	// Echo't alle filenames, maar uitgecommented

	/**foreach($tijdelijkeecho as $value){
		echo $value;
	};**/
	
	//creates all mottier trials through iterating
	for ($i = 0; $i <= $amountoftrials - 1; $i++) {
		
		//Number into string
		$istring = strval($i+1);
		
		//Creates a mottier trial
		$mottiertrialarray[$i] = Question("Mottier Trial " . $istring, "other", "audio/mottierfragments/" . $language . "/" . $mottiertrialfilenames[$i] . $audiotype, $playbuttontexts);
		
	}
	
	foreach ($mottiertrialarray as &$value) {
		echo $value;
	}
	
?>
<div class="slide">
	
	<div class="surveyquestion" style="text-align: center;">
		<b>
		<?php
			if ($language == "Turkish") {
				echo "Bu testi tamamlad&#x131;n&#x131;z";
			} else {
				echo "This was the Mottier-Test";
			}
		?>
		</b>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<!--<p>Kat&#305;l&#305;m&#305;n&#305;z i&ccedil;in te&#351;ekk&uuml;r ederiz!</p>-->
		<p>
		<?php
			if ($language == "Turkish") {
				echo "Kat&#x131;l&#x131;m&#x131;n&#x131;z i&#xE7;in te&#x15F;ekk&#xFC;rler!";
			} else {
				echo "Thank you for your participation!";
			}
		?>
		</p>
	</div> <!-- sluit de surveyquestion div af -->
	
	<div class="navigationbuttons">
		<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
		<!--<a href="#" id="gotomelodicaltest">Start the Musical Ear Test</a>-->
	</div>
</div>
