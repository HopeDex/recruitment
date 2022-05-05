<?php
include("config.php");
?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
  
  <Tr class="active">
    <th style="width: 2%;">No</th>
    <th style="width: 5%;">Name</th>
    <th width="10%" style="text-align:;">Action</th>
    
  </Tr>
    <?php

         error_reporting(1);
         $rec_limit =10;
         $inc=1;
         /* Get total number of records */

    $sql = "SELECT * FROM vacancyproposal Refference ";


    $result = $link->query( $sql );
if(!$result){
  echo "there is an error";
  exit();
}

while ( $row =  mysqli_fetch_array($result)){
echo "<tr>";
  $sql = "SELECT first_name FROM users WHERE `id` = ".$row['applicant']." ";
  $name = $link->query( $sql );

  $rename = mysqli_fetch_array($name);


  echo "<td> ".$row['id']." </td> " ;
  echo "<td> ".$rename[0]." </td> " ;
 echo "<td>  "."<a  href=".'../uploads/'.$row['file_name']."   onClick='_confirm()';>"."<button class='btn btn-primary' style='width:100px;margin-top:-6px;margin-bottom:8px;'>download</button>"." "."</a>  "."<a href='show2.php?k=00' class='btn btn-primary' style='width:100px;margin-top:-6px;margin-bottom:8px;'>shortlist</a>"."</td>"; 

  echo "</tr>";
  $inc++;
};

?>



    
