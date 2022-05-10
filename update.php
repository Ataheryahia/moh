<?php
$link = mysqli_connect("localhost", "root", "", "cs") or die("ERROR: Could not connect. ");

$sql = "UPDATE st SET Age='28' WHERE id=201";
if(mysqli_query($link, $sql)){
	echo "Record was updated successfully.";
} else {
	echo "ERROR: Could not able to execute $sql. ");
}
mysqli_close($link);
?>
