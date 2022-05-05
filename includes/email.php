<?php

$email_to="hello@at.me";
$subject="csimple mail ";
$message="called for interviews";







$headers="from:nickfrist demo<hello@at.me\r\n";
$headers .="MIME-VERSION: 1.0\r\n";
$headers .="content-Type: text/thml; charset=ISO-8859-1\r\n";

//create the html message//
$message ="<html>
<body>
<h1>checkout this h1 tag</h1>
<p> ghfgchcggh</p>
</body>

</html>";

if(mail($email_to,$subject,$message,$headers))
echo 'success';
else
echo'not sent';



?>