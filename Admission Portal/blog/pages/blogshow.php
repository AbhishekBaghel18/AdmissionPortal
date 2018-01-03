<?php
include_once 'dbh.php';
?>
<div class="container">
   <div class="row">
   	<div class="col-md-8 col-md-offset-2">
        <?php
    
      	$query = "SELECT * FROM blog ORDER BY b_id DESC LIMIT 1 "; 
      	$result = mysqli_query($conn, $query);
      	if (mysqli_num_rows($result) > 0) {
      		while($row= mysqli_fetch_assoc($result)){    ?>
          <div class="page-header">
           <?php echo "<h2><center>".$row['b_title']."</center></h2><br>";
             echo "<center><small> Posted on:".$row['b_date']." | By:".$row['b_authorname']." | Auhtor email:".$row['b_authoremail']."</small></center><br>";  ?>
          </div>
      		 <?php 
      		 $src = $row['b_image'];
      		 ?> 
      		 <img src="pages<?php echo $src; ?>" class="img-responsive">
      		 <?php	 
      		 echo "<br>".$row['b_content'];
          
      		}
      	} 
      					   
      ?>
     		</div>
     	</div>
    </div>