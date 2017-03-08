<html>
<head>
     <title>Done</title>
</head>
<body>

<center>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>

</center>
<br>
<br>
<?php

//echo alle post data
foreach ($_POST as $key => $value) echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
echo "<hr>";
echo "<br>";

$keylist = array_keys($_POST);
$valuelist = array_values($_POST);

echo $keylist;
echo "<br>";

echo $valuelist;
echo "<br>";
echo "wtf";

var_dump($keylist);
var_dump($valuelist);

$dir = 'logs';

if ( !file_exists($dir) ) {
  mkdir ($dir, 0744);
 }

$participantid = $_POST["id"]; 

$file = fopen($dir."/met_".$participantid.".csv","c") or die("can't open file");

echo "===Dit is het andere: ".$dir."/met_".$participantid.".csv"."===";
echo "===Dit is filename en path: ".$file."===";

$keyvaluelist = array();

//DIT IS DE BACKUP DIE SOWIESO WERKT
/**foreach ($keylist as $key){
	echo $key;
	echo '---';
	echo $_POST[$key];
	echo '+++';
	$push_this = $key . ': ' . $_POST[$key];
	array_push($keyvaluelist, $push_this);
}**/

foreach ($keylist as $key){
	echo $key;
	echo '---';
	echo $_POST[$key];
	echo '+++';
	
	array_push($keyvaluelist, array($key, $_POST[$key]));
}

foreach ($keyvaluelist as $fields) {
    fputcsv($file, $fields);
}

//HOORTBIJ DE BACKUP DIE SOWIESO WERKT
//fputcsv($file, $keyvaluelist);

fclose($file);


echo "<hr>";
echo "<br>";
echo "<hr>";

$download_link = $dir."/met_".$participantid.".csv";

echo "<a href='".$download_link."'>Download this .csv file</a>";

?>
</body>
</html>