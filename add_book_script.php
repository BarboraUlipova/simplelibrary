<?php
$link = mysqli_connect("localhost:3306", "root","","simplelibrary");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}

else {
	
	$sql_query = "INSERT INTO `publications`(`isbn`,`title`,`numpages`, `edition`,`published`) VALUES ('".$_POST['isbn']."','".$_POST['nazev']."',".$_POST['pocet_stran'].",".$_POST['cislo_edice'].",'".$_POST['datum_vydani']."')";
	mysqli_query($link, $sql_query);
}

mysqli_close($link);