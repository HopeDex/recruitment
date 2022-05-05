<?php
include("config.php");
if (isset($_POST["submit"])) 
{
	$firstname =mysqli_real_escape_string($link,$_POST["firstname"]);
	$lastname =mysqli_real_escape_string($link,$_POST["lastname"]);
	$uni =mysqli_real_escape_string($link,$_POST["uni"]);
	$email =mysqli_real_escape_string($link,$_POST["email"]); 
	$address=mysqli_real_escape_string($link,$_POST["address"]);
	$city =mysqli_real_escape_string($link,$_POST["city"]);
	$dob =mysqli_real_escape_string($link,$_POST["dob"]);
	$gender =mysqli_real_escape_string($link,$_POST["gender"]);
	$role =mysqli_real_escape_string($link,$_POST["role"]);
	$password =mysqli_real_escape_string($link,$_POST["password"]);
	$verify =mysqli_real_escape_string($link,$_POST["verify"]);

    if ($password!=$verify) {
    	header("location:../check.php");
    }
    else{

    	if(!(empty($email))){
    		$query = "SELECT * from users where email = $email";
    		$conn = mysqli_query($link, $query);
    		$fetch = mysqli_num_rows($conn);

    		if($fetch > 0){
    			echo "<script>window.alert('Email already exist')<script>";
    		}else{

    		$insertdata =mysqli_query($link,"INSERT INTO users(first_name,last_name,email,address,city,dob,gender,organization,role,password) VALUES('$firstname','$lastname','$email','$address','$city','$dob','$gender','$uni','$role','$password')") OR die(mysqli_error($link));

    	session_start();
    	$_SESSION['user']= $email;
    	$_SESSION['role']= $role;
    	header("location:../appl/index.php");

    		}


    	}
    	

    }
}


?>