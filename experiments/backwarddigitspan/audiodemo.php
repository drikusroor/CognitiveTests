<html>

<head>
	<title>BDS Audio Demo</title>
</head>
<body>
	
	<?php
		
		function echoAudio($title, $filename){
		
		$audiohtml = <<< AUDIOHTML
		
			<tr>
				<td>
					<p>$title</p>
				</td>
				<td>
					<audio controls>
						<source src="audio/$filename" type="audio/wav">
					</audio>
				</td>
			</tr>
AUDIOHTML;
		
		echo $audiohtml;
		
		}
		
	?>
	
	<table>
		
		<?php
			
			echoAudio("926", "926_mixdown.wav");
			echoAudio("85267349", "85267349_mixdown.wav");
			echoAudio("1", "1V2_DU.wav");
			echoAudio("2", "2V2_DU.wav");
			echoAudio("3", "3V2_DU.wav");
			echoAudio("4", "4V2_DU.wav");
			echoAudio("5", "5V2_DU.wav");
			echoAudio("6", "6V2_DU.wav");
			echoAudio("7", "7V2_DU.wav");
			echoAudio("8", "8V2_DU.wav");
			echoAudio("9", "9V2_DU.wav");
			
		?>
		
	</table>
	
</body>
</html>