<?php
		function createAnimationFrame($canvasId, $imageUrl, $numberOfFrames){
			
			$createanimation = <<<CA
				
				<canvas id="$canvasId"></canvas>
				<script>
					(function (){createBackwardDigitSpan("$canvasId", "$imageUrl", $numberOfFrames);})();
					
					
				</script>
		
CA;
		
	echo $createanimation;
	
		}
?>