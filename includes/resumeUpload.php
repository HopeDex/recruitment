<?php
session_start();
include("config.php");


if(isset($_POST['submit'])){

	
		$jobID =mysqli_real_escape_string($link,$_POST["position_id"]);
        
		$resumeUpload =$_FILES['resume']['name'];

		if($_FILES['resume']['error'] == UPLOAD_ERR_OK ){
			
		
			if(is_uploaded_file($_FILES['resume']['tmp_name'] )){
				$result = move_uploaded_file($_FILES['resume']['tmp_name'], "../uploads/" . $resumeUpload);
				
				if(!$result == 1 ){
					echo "<p> THERE was a problem with the file </p>";
				}
				else{ 
					// $notice=" file was uploaded succefully  ";
					//  $_SESSION["notice"]=$notice;
                     
                  header("location:../appl/open.php");
					

					// $sql = "INSERT INTO vacanypropsal set 	hr_id = ,
					// 	job_id = "'.$_POST['position_id'].'" ,
					// 	applicant_id = ,
					// 	resume = ,
					// 	status = 'unread' ,
					// "
					}
			}else{
				echo "nothing";
			}
		}else{
			echo "<p> there was a problem uploading the file</p> ";
			header("location:../appl/application.php");
			
		}

		
}


 function submitResume($tarFile, $jobID, $userID, $conn){
	$target_dir = "../uploads/";
	$target_file = $target_dir.basename($tarFile);
	$upload_ok = 1;



 print_r($target_file);die();

}
?>
