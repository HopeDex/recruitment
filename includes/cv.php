<?php
include("config.php");
$getData=mysqli_query($link,"SELECT*FROM vacancyproposal");
$i=1;
while ( $i<=100) {
while ($fetch=mysqli_fetch_array($getData)) {

 echo "<div class='row mb-4 mb-4'>";
    echo "<div class='col-md-10'>";
      echo "<div class='row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>";
        echo "<div class='col p-4 d-flex flex-column position-static'>";
          echo "<strong class='d-inline-block mb-2 text-success'>"; 
              echo "application position".": ".$fetch['id'];
          echo "</strong>";
          echo "<h3 class='mb-0'>";
           echo "Resume of applicant".": ".$fetch['file_name']; 
          echo "</h3>";
          echo "<div class='mb-1 text-muted'>";
          echo "Refference number".": ".$fetch['Refference']; 
          echo " </div>";
          echo "<p class='card-text mb-auto'>";
         
          echo "</p>";
         echo "</div>";
        echo "<div class='col-auto d-none d-lg-block'>";
         // echo "<img src='../icons/job-post-icone-1.png'>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
 
}
 $i++;
}
?>
<div id="content">
        <div class="post">
          
          <h2 class="title"><?php echo $_GET['nm']; ?></h2>
          <p class="meta"></p>
          <div class="entry">
        
          <table border="0" width="100%">
        
        <tr>
            <td width="10%">Refference
            <td width="50%">Title
            <td width="30%">Resume
            
          </tr>
        
          
        <?php
        $count=1;
          while($row=mysql_fetch_array($res))
          {
            
            echo '<tr> <td width="10%">'.$count.'
                <td width="50%">'.$row['ee_fnm'].'
                <td width="30%"><a href="'.$row['ee_resume'].'">resume</a>
                ';
              $count++;
          }
        ?>
        
          </table>
            
          </div>
        </div>
        
      </div>