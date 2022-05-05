<?php
include("config.php");
?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
  
  <Tr class="active">
    <th style="width: 2%;">Sr.No</th>
    <th style="width: 5%;">Categories</th>
    <th width="10%" style="text-align:;">Action</th>
    
  </Tr>
    <?php
    include("config.php");
         error_reporting(1);
         $rec_limit =10;
         $inc=1;
         /* Get total number of records */
         $retval = mysqli_query($link,"SELECT * FROM category ");
     while($row = mysqli_fetch_array($retval))
      {
      
            echo "<Tr>";
echo "<td sty>".$inc."</td>";
echo "<td>".$row['cat_name']."</td>";
echo "<td>"."<a  href='#'>"." "."</a>"."<a  href='../hr/show1.php'  onClick='_confirm('".$row['Title']."')';>"."<button class='btn btn-primary' style='width:50px;margin-top:-6px;margin-bottom:8px;'>view</button>"." "."</a>"."</td>";
echo "</Tr>";
$inc++;
};

?>
  