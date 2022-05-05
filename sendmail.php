<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$con = mysqli_connect("localhost", "root", "", "recruitment");

$query = "SELECT DISTINCT(report.student),applicant_id,Email,vacancy FROM users,report WHERE users.applicant_id = report.student AND vacancy < 40 ORDER BY report.id DESC";

$result = mysqli_query($con, $query) or die("Coudn't run the query " . mysqli_error($con));

$number_of_rows = $result->num_rows;

$emails = [];

if ($number_of_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)) {

		if (!in_array($row['Email'], $emails)) {
			$emails[] = $row['Email'];
		}
	}
}


foreach ($emails as $email) {
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'stelnet';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username = '';
	$mail->Password = '';
	$mail->SetFrom('mcasystem123@gmail.com');
	$mail->Subject = 'Vacancy NOTIFICATION ';
	$mail->Body = $_POST['body'];;
	$mail->AddAddress($email);

	if (!$mail->Send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Messag
		    e has been sent';
	}
}
