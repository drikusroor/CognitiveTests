<?php session_start();

    // Sets language and creates language code
	$language = "Turkish";
	$languagecode = strtolower(substr($language, 0, 2)); //first two characters to lowercase make the language code
    
    // Sets Audio Type (choose between ".wav" or ".mp3")
    $audiotype = ".wav";

    // Sets the text for instructions
    $instructiontextold = "<p class= 'justify'>Burada size rakam dizisi verece&#287;iz. Sizin yapman&#305;z gereken verdi&#287;imiz rakamlar&#305; tersten s&ouml;ylemeniz. 
		&Ouml;rne&#287;in, biz 2-1-3 rakamlar&#305;n&#305; verdi&#287;imizde, siz 3-1-2 olarak geri s&ouml;yleyeceksiniz. Ve bu rakamlar&#305; 
		sesli bir &#351;ekilde s&ouml;ylemeniz gerekecek. &#304;lk iki dizi iki rakam i&ccedil;erecek, bu iki dizi daha sonra &uuml;&ccedil; rakam 
		i&ccedil;erecek. Her iki diziden sonra rakam say&#305;s&#305;n&#305; birer birer art&#305;raca&#287;&#305;z. Bu b&ouml;l&uuml;m yakla&#351;&#305;k 10 dakika
		s&uuml;recek.</p>
        
        <p class='justify'>E&#287;er sorunuz varsa l&uuml;tfen bana bildirin. E&#287;er yoksa, teste ba&#351;layal&#305;m!</p>
        
        ";

    $instructiontext = "
        <p class= 'justify'>
            Burada size bir rakam dizisi verece&#x11F;iz. Sizin yapman&#x131;z gereken, verdi&#x11F;imiz rakamlar&#x131; tersten s&#xF6;ylemek. &#xD6;rne&#x11F;in, biz 2-1-3 rakamlar&#x131;n&#x131; verdi&#x11F;imizde, siz 3-1-2 olarak sesli bir &#x15F;ekilde ara&#x15F;t&#x131;rmac&#x131;ya s&#xF6;yleyeceksiniz. &#x130;lk iki dizi iki rakam i&#xE7;erecek, daha sonraki iki dizi &#xFC;&#xE7; rakam i&#xE7;erecek. Her iki diziden sonra rakam say&#x131;s&#x131;n&#x131; birer birer art&#x131;raca&#x11F;&#x131;z. Bu b&#xF6;l&#xFC;m yakla&#x15F;&#x131;k 10 dakika s&#xFC;recek.
        </p>
        <p class='justify'>
            E&#x11F;er sorunuz varsa l&#xFC;tfen bana bildirin. E&#x11F;er yoksa, teste ba&#x15F;layal&#x131;m!
        </p>
    "

    // Sets the start button text
    $buttontext = "Teste Ba&#351;layal&#305;m!";
    //$playbuttontexts = "Ses oynayın.";

    $playbuttontexts = array(
        0 => "Ses oynayın",
        1 => "Next",
    );

    include 'bds_app.php';

?>