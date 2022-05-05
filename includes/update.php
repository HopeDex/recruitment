<?php
include("config.php");
if (isset($_POST['submit'])) {
	    $first_name=mysqli_real_escape_string($link, $_POST['first_name']);
	    $last_name=mysqli_real_escape_string($link, $_POST['last_name']);
	    $email=mysqli_real_escape_string($link, $_POST['email']);
	    $location=mysqli_real_escape_string($link, $_POST['location']);
		$password=mysqli_real_escape_string($link, $_POST['password']);
        $photo=$_FILES["profile"]["name"];
		// $target_dir="uploads/";
		// $target_file=$target_dir.basename($_FILES["profile"]["name"]);
		// $uploadOk=1;
		// $imagefile=strtolower(pathinfo($target_file.PATHINFO_EXTENSION));
		// //ORIGINAL IMAGE CHECK
		// if (isset($_POST['submit'])) {
		// 	$check=getimagesize($_FILES['profile']['tmp_name']);
		// 	if ($check!==false) {
		// 		echo "file is an image-".$check['mine'].".";
		// 		$uploadOk=1;
		// 	}else{
		// 		echo "file is not an image";
		// 	}
		// }

        move_uploaded_file($_FILES["profile"]["tmp_name"],"uploads/".$_FILES["profile"]["name"]);
		$update =mysqli_query($link,"UPDATE users SET first_name='$first_name',last_name='$last_name',city='$location',password='$password' WHERE users.email='$email'") OR die(mysqli_error($link));

		header("location:../appl/profile.php");
}


?>