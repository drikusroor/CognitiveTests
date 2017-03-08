<?php session_start();

    // Sets language and creates language code
	$language = "Turkish";
	$languagecode = strtolower(substr($language, 0, 2)); //first two characters to lowercase make the language code
    
    // Sets Audio Type (choose between ".wav" or ".mp3")
    $audiotype = ".wav";

    // Sets the text for instructions
    $instructiontext = "<p class= 'justify'>Burada size rakam dizisi verece&#287;iz. Sizin yapman&#305;z gereken verdi&#287;imiz rakamlar&#305; tersten s&ouml;ylemeniz. 
		&Ouml;rne&#287;in, biz 2-1-3 rakamlar&#305;n&#305; verdi&#287;imizde, siz 3-1-2 olarak geri s&ouml;yleyeceksiniz. Ve bu rakamlar&#305; 
		sesli bir &#351;ekilde s&ouml;ylemeniz gerekecek. &#304;lk iki dizi iki rakam i&ccedil;erecek, bu iki dizi daha sonra &uuml;&ccedil; rakam 
		i&ccedil;erecek. Her iki diziden sonra rakam say&#305;s&#305;n&#305; birer birer art&#305;raca&#287;&#305;z. Bu b&ouml;l&uuml;m yakla&#351;&#305;k 10 dakika
		s&uuml;recek.</p>
        
        <p class='justify'>E&#287;er sorunuz varsa l&uuml;tfen bana bildirin. E&#287;er yoksa, teste ba&#351;layal&#305;m!</p>
        
        ";

    // Sets the start button text
    $buttontext = "Teste Ba&#351;layal&#305;m!";
    //$playbuttontexts = "Ses oynayın.";

    $playbuttontexts = array(
        0 => "Ses oynayın",
        1 => "Next",
    );

    include 'bds_app.php';

?>