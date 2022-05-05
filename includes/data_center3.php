<?php
include("config.php");


function confirm() {
	$id = $_GET['id'];
		$sql="UPDATE users SET status=1 WHERE id=$id" ;
		alert($id);
		return true;
	}
?>





 
        <h2>System users</h2>
      <table class="table table-striped table-sm">
	
	<Tr class="active">
		<th>Sr.No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Organisation</th>
		<th>Role</th>
		<th width="15%" style="text-align: center;">Action</th>
		
	</Tr>
		<?php
		include("config.php");
         error_reporting(1);
         $rec_limit =10;
         $inc=1;
         /* Get total number of records */
         $retval = mysqli_query($link,"SELECT * FROM users ");
		 while($row = mysqli_fetch_array($retval))
		  {
		  
            echo "<Tr>";
echo "<td>".$inc."</td>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo "<td>".$row['gender']."</td>";

$q1=mysqli_query($conn,"select * from users where email='".$row['email']."'");
$r1=mysqli_fetch_assoc($q1);
echo "<td>".$row['organization']."</td>";
echo "<td>".$row['role']."</td>";
echo "<td>"."<a  href='#' id=".$row['id']."  onClick='return confirm()';>"."<button class='btn' style='width:50; margin-top:-6px;  margin-bottom:8px; background-color:red; color:white;'>Disable</button>"." "."</a>"."</td>";

echo "</Tr>";
$inc++;
};

		?>
		
</table>

<h2>Registered Organisations</h2>
      <table class="table table-striped table-sm">
	
	<Tr class="active">
		<th>Sr.No</th>
		<th>Org id</th>
		<th>Organisation</th>
		<th>Address</th>
		<th>Email</th>
		<th>City</th>
		<th width="15%">Action</th>
	</Tr>
		<?php
		include("config.php");
         error_reporting(1);
         $rec_limit =10;
         $inc=1;
         /* Get total number of records */
         $retval = mysqli_query($link,"SELECT * FROM organisation ");
		 while($row = mysqli_fetch_array($retval))
		  {
		  
            echo "<Tr>";
echo "<td>".$inc."</td>";
echo "<td>".$row['org_id']."</td>";
echo "<td>".$row['Organisation']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['City']."</td>";
echo "<td>"."<a  href='#'  onClick='return confirm()';>"."<button class='btn' style='width:auto; margin-top:-6px;  margin-bottom:8px; background-color:red; color:white'>Disable</button>"." "."</a>"."</td>";

echo "</Tr>";
$inc++;
};



		?>
		<button onClick="return confirm('Are you sure you want to delete?')"></button>
		
</table>