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
		<th>Title</th>
		<th>Location</th>
		<th>Pay grade</th>
		<th>Postions</th>
		<th>Expiration</th>
		<th width="5%%">Action</th>
		
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
echo "<td>".$row['Title']."</td>";
echo "<td>".$row['Location']."</td>";
echo "<td>".$row['Pay']."</td>";
echo "<td>".$row['Positions']."</td>";
echo "<td>".$row['Expiration']."</td>";
echo "<td>"."<a  href='wrld.php'>"."<button class='btn btn-success' style='width:auto; margin-top:-6px;  margin-bottom:6px;'>View</button>"." "."</a>"."</td>";
echo "</Tr>";
$inc++;
};

		?>
		
</table>
      </div>

       