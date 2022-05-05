<?php
include("config.php");
$getData=mysqli_query($link,"SELECT*FROM vacancy");
$i=1;
while ( $i<=3) {
while ($fetch=mysqli_fetch_array($getData)) {

 echo "<div class='row mb-4 mb-4'>";
    echo "<div class='col-md-10'>";
      echo "<div class='row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>";
        echo "<div class='col p-4 d-flex flex-column position-static'>";
          echo "<strong class='d-inline-block mb-2 text-success'>"; 
              echo "Refference number".": ".$fetch['Refference'];
          echo "</strong>";
          echo "<h3 class='mb-0'>";
           echo "Company name".": ".$fetch['Company name']; 
          echo "</h3>";
          echo "<h3 class='mb-0'>";
           echo "Post".": ".$fetch['Title']; 
          echo "</h3>";
          echo "<div class='mb-1 text-muted'>";
          echo "Expiration Date".": ".$fetch['Expiration']; 
          echo " </div>";
          echo "<p class='card-text mb-auto'>";
          echo $fetch['Description'];
          echo "</p>";
         echo "</div>";
        echo "<div class='col-auto d-none d-lg-block'>";
         echo "<img src='../icons/job-post-icone-1.png'>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
 
}
 $i++;
}
?>