<?php session_start();

    // Sets language and creates language code
	$language = "Turkish";
	$languagecode = strtolower(substr($language, 0, 2)); //first two characters to lowercase make the language code
    
    // Sets Audio Type (choose between ".wav" or ".mp3")
    $audiotype = ".mp3";

    // Sets the text for instructions
    $instructiontext = "<p class='justify'>Burada size belli bir anlam i&ccedil;ermeyen kelimeler s&ouml;ylenecek (&ouml;rne&#287;in <i>turasi</i> veya <i>bamodeli</i>). Burada yapman&#305;z gereken kelimeleri duydu&#287;unuz anda ve duydu&#287;unuz &#351;ekilde tekrar etmeniz. &#304;lk b&ouml;l&uuml;m 2 heceli 6 kelime i&ccedil;erecek, sonraki b&ouml;l&uuml;mde 3 heceli 6 kelime olacak. Her b&ouml;l&uuml;mden sonra verilecek 6 kelimeye bir hece eklenecek. Bu b&ouml;l&uuml;m yakla&#351;&#305;k 10 dakika s&uuml;recek. E&#287;er sorunuz varsa l&uuml;tfen bana bildirin. E&#287;er yoksa, teste ba&#351;layal&#305;m!</p>
        
        ";

    // Sets the start button text
    $buttontext = "Teste Ba&#351;layal&#305;m!";
    //$playbuttontexts = "Ses oynayın.";

    $playbuttontexts = array(
        0 => "Ses oynayın",
        1 => "Next",
    );

    include 'mot_app.php';

?>