<?php
include("config.php");
?>
<script>
  function _confirm(){
    var confirmation = confirm("are you sure?");
   
  //  window.location='../hr/show2.php';
  }
</script>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
  
  <Tr class="active">
    <th style="width: 2%;">No</th>
    <th style="width: 5%;">Name</th>
    <th width="13%" style="text-align:;">Action</th>
    
  </Tr>
    <?php

         error_reporting(1);
         $rec_limit =10;
         $inc=1;
         /* Get total number of records */

    $sql = "SELECT * FROM vacancyproposal status ";


    $result = $link->query( $sql )or die(msqli_error($link));
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
 echo "<td>  "."<a  href='../hr/email.php'>"."<button class='btn btn-primary' style='width:100px;margin-top:-6px;margin-bottom:8px;'>Email</button>"." "."</a></td>";

  echo "</tr>";
  $inc++;
};

?>



    
