<?php
	function Question($id, $audioclass, $url, $buttontexts) {
		$idselect = '#' . $id;
		$idcontrol = $id . 'control';
		$idcontrolselect = '#' . $idcontrol;
		$audioclasslink = "play".$audioclass."button";
        $playbuttontext = $buttontexts[0];
        $nextbuttontext = $buttontexts[1];
		
		if ($audioclass == "trial") { $trialradiobuttons = '<div class="surveyquestion radiobuttons">
			<span class="keyalignleft"><input type="radio" name="'.$id.'" value="same">Ayn&#305;</span>
			<input type="radio" name="'.$id.'" value="different">Farkl&#305;</div> <!-- sluit de surveyquestion div af -->';
		}
		
		/**if ($audioclass == "other") { $bdstextfields = '<div class="surveyquestion textfieldtrial">
			
			<span>
			
			<input type="text" class="textfieldcenter" name="'.$id.'"></span></div>';
			
			//<input type="radio" name="'.$id.'" value="same">Ayn&#305;</span>
			//<input type="radio" name="'.$id.'" value="different">Farkl&#305;</div> <!-- sluit de surveyquestion div af -->';
		}**/
		
		$Questiondiv = <<<QUESTIONDIV
		
		<div id="$id" class="slide">
			
			<div class="surveyquestion" style="text-align: center;">
				<b>$id</b>
			</div> <!-- sluit de surveyquestion div af -->
			
			<div class="surveyquestion" id="audioquestion">

				<br>
				
				<audio id="$id" class="$audioclass" controls>
					<source src="$url" type="audio/mp3" />
				</audio>
				
				<a class="$audioclasslink" title="button">$playbuttontext<!--Ses &Ccedil;almak--></a>
				

			</div> <!-- sluit de surveyquestion div af -->
			
			$trialradiobuttons
			
			$bdstextfields
			
			<div class="navigationbuttons">
				<a href="#" class="slidesjs-previous slidesjs-navigation">Previous</a>
				<a href="#" class="slidesjs-next slidesjs-navigation">Next<!--Sonraki--></a>
			</div> <!-- sluit de navigationbuttons div af -->
			
		</div> <!-- sluit de surveygroup div af -->

QUESTIONDIV;

return $Questiondiv;

   }




?>