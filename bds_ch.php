<?php session_start();

    // Sets language and creates language code
	$language = "Chinese";
	$languagecode = strtolower(substr($language, 0, 2)); //first two characters to lowercase make the language code
    
    // Sets Audio Type (choose between ".wav" or ".mp3")
    $audiotype = ".mp3";

    // Sets the text for instructions
    $instructiontext = "<p class= 'justify'>In this task we will present you with sequences of digits. Your task will be to give us the digits in a sequence in reversed order. 
		For example, when we present you the digits 3-1-8, you will return us the numbers 8-1-3. This you will do by saying the digits out loud. 
		The first two sequences will have two digits, the two sequences after that will have three digits. After every two sequences we will increase the amount of digits by one. 
		This task will last for about 10 minutes.</p>
        
        <p class='justify'>If you have any questions, please let me know. If not, let's start the test!</p>
        
        ";

    // Sets the start button text
    $buttontext = "Start the test!";
    $playbuttontexts = array(
        0 => "Play Sound",
        1 => "Next",
    );

    include 'bds_app.php';

?>