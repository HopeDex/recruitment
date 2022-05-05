<script type="text/javascript">
	
	function confirm() {
		alert('are you sure?');
	}
</script>


<?php
include("config.php");
?>

 <h2>Current Job Updates</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
	
	<Tr class="active">
		<th>Sr.No</th>
		<th>Company name</th>
		<th>Title</th>
		<th>Location</th>
		<th>Pay grade</th>
		<th>Postions</th>
		<th>Expiration</th>
		<th width="10%">Action</th>
		
	</Tr>
		<?php
		include("config.php");
         error_reporting(1);
         $rec_limit =10;
         $inc=1;
         /* Get total number of records */
         $retval = mysqli_query($link,"SELECT * FROM vacancy ");
		 while($row = mysqli_fetch_array($retval))
		  {
		  
            echo "<Tr>";
echo "<td>".$inc."</td>";
echo "<td>".$row['Company name']."</td>";
echo "<td>".$row['Title']."</td>";
echo "<td>".$row['Location']."</td>";
echo "<td>".$row['Pay']."</td>";
echo "<td>".$row['Positions']."</td>";
echo "<td>".$row['Expiration']."</td>";
echo "<td>"."<a  href='open.php'>"."<button class='btn btn-success' style='width:auto; margin-top:-6px;  margin-bottom:6px;'>View</button>"." "."</a>"."</td>";
echo "</Tr>";
$inc++;
};

		?>
		
</table>
      </div>

   <!--    <h2>System users</h2>
      <table class="table table-striped table-sm">
	
	<Tr class="active">
		<th>Sr.No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Organisation</th>
		<th>Role</th>
		<th width="10%">Action</th>
		
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
echo "<td>"."<a  href='#'>"."<button class='btn btn-success' style='width:auto; margin-top:-6px;  margin-bottom:6px;'>View</button>"." "."</a>"."</td>";

echo "</Tr>";

$inc++;
};


		?>
		
</table>  

<!--<h2>Registered Organisations</h2>
      <table class="table table-striped table-sm">
	
	<Tr class="active">
		<th>Sr.No</th>
		<th>Org id</th>
		<th>Organisation</th>
		<th>Address</th>
		<th>Email</th>
		<th>City</th>
		<th width="11%">Action</th>
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
echo "<td>"."<a  href='#'  onClick='return confirm()';>"."<button class='btn btn-success' style='width:auto; margin-top:-6px;  margin-bottom:6px;'>View</button>"." "."</a>"."</td>";

echo "</Tr>";
$inc++;
};



		?>
		<button onClick="return confirm('Are you sure you want to delete?')"></button>
		
</table>