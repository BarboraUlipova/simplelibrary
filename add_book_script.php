<?php
echo $_POST['nazev'];

$link = mysqli_connect("localhost:3306", "root","","simplelibrary");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

else {
	$new_isbn = (string)$_POST['isbn'];
	var_dump($new_isbn);
	$sql_query = "INSERT INTO `publications`(`isbn`) VALUES (".$new_isbn.")";
	mysqli_query($link, $sql_query);
}

mysqli_close($link);
?>