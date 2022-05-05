<?php
include("config.php");
if (isset($_POST['submit'])) {
	$Refference =mysqli_real_escape_string($link,$_POST["Refference"]);
	$Title =mysqli_real_escape_string($link,$_POST["Title"]);
	$Description =mysqli_real_escape_string($link,$_POST["Description"]);
	$Location =mysqli_real_escape_string($link,$_POST["Location"]); 
	$Pay=mysqli_real_escape_string($link,$_POST["Pay"]);
	$Positions =mysqli_real_escape_string($link,$_POST["Positions"]);
	$Expiration =mysqli_real_escape_string($link,$_POST["Expiration"]);
	$Addition =mysqli_real_escape_string($link,$_POST["Addition"]);
	
  
    	$insertdata =mysqli_query($link,"INSERT INTO vacancy(Refference,Title,Description,Location,Pay,Positions,Expiration,Addition) VALUES('$Refference','$Title','$Description','$Location','$Pay','$Positions','$Expiration','$Addition')") OR die(mysqli_error($insertdata ));
    	header("Location:../hr/index.php");

}

?>