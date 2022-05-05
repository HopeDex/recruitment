<?php 
$host="localhost";
$user="root";
$password="";

$link = mysqli_connect($host,$user,$password);
$db=mysqli_select_db($link,'recruitment') OR DIE(mysqli_error($link));

if (!$link) {
	echo "error";
}
 ?>