<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
   
    <link href="dashboard.css" rel="stylesheet">
    <link href="../hr/form-validation.css" rel="stylesheet">
  </head>
  <body>
  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-7">
        <h2>Edit account</h2>
        <form class="needs-validation" enctype="multipart/form-data" method="POST" action="../includes/update.php">
            <img src="../icons/service-icone-4.png"  alt="image" width="72" height="72"> <br />
            <input type="file" name="profile" id="profile"> <br />
             <div class="row">
          <div class="col-md-6 mb-3">
            <label for="first_name">first name</label>
            <input type="text" class="form-control" name="first-name" id="first_name" name="first_name" placeholder="first name" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="last_name">last name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" name="last_name" placeholder="last name" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone number" value="" required>
            <div class="invalid-feedback">
              Valid phone number is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="mobile">mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile number" value="" required>
            <div class="invalid-feedback">
              Valid mobile number is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email adress" value="<?php echo $_SESSION["user"]?> " required>
            <div class="invalid-feedback">
              Valid email address is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="area of residence" value="" required>
            <div class="invalid-feedback">
              Valid Location is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="password">password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="password" value="" required>
            <div class="invalid-feedback">
              Valid password is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="verify">verify</label>
            <input type="text" class="form-control" id="verify" name="verify" placeholder="verify password" value="" required>
            <div class="invalid-feedback">
              Valid match is required.
            </div>
          </div>
        </div>
         <button class="btn btn-success btn-lg btn-block" name="submit" type="submit">save</button>
        </form>

      </div>
      <div class="col-md-5">
        <h2>account information</h2>
        <img src="../icons/service-icone-4.png"  alt="image" width="72" height="72"> <br /> <br /><br />
        <h3>contact information</h3>
        <h5>Email:  <span style="color: blue"><?php echo $_SESSION["user"]?></span> </h5> 
         <h3>General information</h3>
        <?php
            include("../includes/config.php");
               $email=$_SESSION["user"];
               $data=mysqli_query($link,"SELECT * FROM users WHERE email='$email' ");
              while ($fetch=mysqli_fetch_array($data))
               { 
                echo "<tr>"; 
                    echo "<td>"."<h5>"."First Name"." :".$fetch['first_name']."</h5>"."</td>"; 
                    echo "<td>" ."<h5>"."Last Name"." :".$fetch['last_name'] ."</h5>"."</td>";
                    echo "<td>" ."<h5>"."Address"." :".$fetch['address'] ."</h5>"."</td>";
                    echo "<td>" ."<h5>"."City"." :".$fetch['city'] ."</h5>"."</td>";
                    echo "<td>" ."<h5>"."D.O.B"." :".$fetch['dob'] ."</h5>"."</td>";
                    echo "<td>" ."<h5>"."Gender"." :".$fetch['gender'] ."</h5>"."</td>";
                    echo "<td>" ."<h5>"."Organisation"." :".$fetch['organization'] ."</h5>"."</td>";
                     echo "<td>" ."<h5>"."Role"." :".$fetch['role'] ."</h5>"."</td>";
                echo "</tr>"; 
               
                 }
                   ?>
      </div>
 
    <hr>

  </div> <!-- /container -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
