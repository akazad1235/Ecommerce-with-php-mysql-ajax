<?php
$hostName="localhost";
$userName="root";
$pass="";
$DbName="shopping";
$conn=mysqli_connect($hostName, $userName, $pass, $DbName);
if (!$conn) {
	echo"database connect faild";
}

?>