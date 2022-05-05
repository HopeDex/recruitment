
 <?php
  include("config.php");
  if (isset($_POST['submit'])) {
		$email=mysqli_real_escape_string($link, $_POST['email']);
		$password=mysqli_real_escape_string($link, $_POST['password']);
    $role=mysqli_real_escape_string($link, $_POST['role']);

        $getdata=mysqli_query($link,"SELECT * FROM users WHERE email='$email' AND password='$password' ");
        $result=mysqli_num_rows($getdata);
        if ($result > 0) {
              $getrole=mysqli_query($link,"SELECT * FROM users WHERE email='$email' AND password='$password' ");
               $num=mysqli_fetch_array($getrole);
               $xrole= $num['role'];
               if ($xrole=="administrator") {
                  session_start();
                  $_SESSION["user"]=$email;
                  $_SESSION["role"]=$xrole;
                  header("location:../ad/index.php");
               }
               elseif ($xrole=="applicant") {
                   session_start();
                   $_SESSION["user"]=$email;
                   $_SESSION["role"]=$xrole;
                   header("location:../appl/index.php");
               }
               elseif ($xrole=="hr") {
                    session_start();
                    $_SESSION["user"]=$email;
                    $_SESSION["role"]=$xrole;
                    header("location:../hr/index.php");
               }
               else{
                header("location:../index.html");
               }
        	
        }
        else{
        	header("location:../login.html");
        	$err="<small>invalid credentials..please try again</small>";
        	
        }
    }
 ?>