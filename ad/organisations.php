<?php
session_start();
$check=$_SESSION['user'];
if ($check=="") {
 header("location:../login.html");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Organisations</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="dashboard.css" rel="stylesheet">
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
    <link href="offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">CRS</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../includes/logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<!-- <div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="index.php">Dashboard </a>
    <a class="nav-link" href="#">organisation <span class="sr-only">(current)</span></a>
    <a class="nav-link" href="#">User accounts</a>
    <a class="nav-link" href="#">Recent posts</a>
    <a class="nav-link" href="profile.php">Profile</a>
  </nav>
</div> -->
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item3">
            <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
               <button class='btn btn-primary' style='width:200px; margin-top:-6px; margin-bottom:6px;'> Dashboard </button>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="organisations.php">
              <span data-feather="file"></span>
              <button class='btn btn-primary' style='width:200px; margin-top:-6px; margin-bottom:6px;'>   Organisations </button>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="shopping-cart"></span>
              <button class='btn btn-primary' style='width:200px; margin-top:-6px; margin-bottom:6px;'>  User accounts  </button> 
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wrld.php">
              <span data-feather="users"></span>
               <button class='btn btn-primary' style='width:200px; margin-top:-6px; margin-bottom:6px;'> Recent posts </button> 
        
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <span data-feather="bar-chart-2"></span>
               <button class='btn btn-primary' style='width:200px; margin-top:-6px; margin-bottom:6px;'> Profile </button>

              
            </a>
          </li>
          
        </ul>

      </div>
    </nav>


<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
    <img class="mr-3" src="../assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">ORGANISATIONS</h6>
      <big>current organisational updates</big>
    </div>
  </div>

 
      
    <?php
          include("org.php");
    ?>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="offcanvas.js"></script></body>
</html>
