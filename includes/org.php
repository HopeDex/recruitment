<?php
include("config.php");
if (isset($_POST['submit'])) 
{
	$org_id =mysqli_real_escape_string($link,$_POST["org_id"]);
	$Organisation =mysqli_real_escape_string($link,$_POST["Organisation"]);
	$Description =mysqli_real_escape_string($link,$_POST["Description"]);
	$email =mysqli_real_escape_string($link,$_POST["email"]); 
	$address=mysqli_real_escape_string($link,$_POST["address"]);
	$City =mysqli_real_escape_string($link,$_POST["City"]);
	$area =mysqli_real_escape_string($link,$_POST["area"]);

	$f_name =mysqli_real_escape_string($link,$_POST["f_name"]);
	$l_name =mysqli_real_escape_string($link,$_POST["l_name"]);
	$remail =mysqli_real_escape_string($link,$_POST["remail"]);
	$default =mysqli_real_escape_string($link,$_POST["default"]); 
	$role=mysqli_real_escape_string($link,$_POST["role"]);
	
  
    	$insertdata =mysqli_query($link,"INSERT INTO organisation(org_id,Organisation,Description,email,address,City,area)VALUES('$org_id','$Organisation','$Description','$email','$address','$City','$area')")OR die(mysqli_error($link));

    	$insert=mysqli_query($link,"INSERT INTO users(first_name,last_name,email,role,password) VALUES('$f_name','$l_name','$remail','$role','$default')") OR die(mysqli_error($link));

            
             echo "Organisation added successsfully";
             header("location:../ad/organisations.php");
}

?>