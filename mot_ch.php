<?php session_start();

    // Sets language and creates language code
	$language = "Chinese";
	$languagecode = strtolower(substr($language, 0, 2)); //first two characters to lowercase make the language code
    
    // Sets Audio Type (choose between ".wav" or ".mp3")
    $audiotype = ".mp3";

    // Sets the text for instructions
    $instructiontext = "<p class='justify'>You will be presented with spoken words without any meaning (for example <i>turasi</i> or <i>bamodeli</i>). The task is to repeat the words exactly the way you hear them. There first sequence will contain 6 words of 2 syllables, the next sequence of 6 words will contain 3 syllables. After every sequence of 6 words a syllable will be added. This task will last for about 10 minutes. If you have any questions, please let me know. If not, let's start the test!</p>
        
        ";

    // Sets the start button text
    $buttontext = "Start the test!";
    $playbuttontexts = array(
        0 => "Play Sound",
        1 => "Next",
    );

    include 'mot_app.php';

?>