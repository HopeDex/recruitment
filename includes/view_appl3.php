<?php
include('../includes/config.php');

?>
<script>
	function _confirm(){
		var confirmation = confirm("are you sure?");
		<?php
		$sql=mysqli_query($link,"DELETE FROM vacancy WHERE Refference='jjpt6063'");
		?>
		window.location='../hr/index.php';
	}
</script>


<?php
include("config.php");
?>

 <h2>Current Applicants Updates</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
	
	<Tr class="active">
		<th style="text-align: center;">Sr.No</th>
		<th style="text-align: center;">Catergories</th>
		<th width="13%" style="text-align: center;">Action</th>
		
	</Tr>
		<?php
		include("config.php");
         error_reporting(1);
         $rec_limit =10;
         $inc=1;
         /* Get total number of records */
         $retval = mysqli_query($link,"SELECT * FROM catergory ");
		 while($row = mysqli_fetch_array($retval))
		  {
		  
            echo "<Tr>";
echo "<td>".$inc."</td>";
echo "<td>".$row['Catergories']."</td>";
echo "<td>"."<a  href='#'>"." "."</a>"."<a  href='../includes/edit.php?Refference=".$row['Refference']."'  onClick='_confirm('".$row['Title']."')';>"."<button class='btn btn-primary' style='width:50px;margin-top:-6px;margin-bottom:8px;'>Edit</button>"." "."</a>"."</td>";
echo "</Tr>";
$inc++;
};

?>
	