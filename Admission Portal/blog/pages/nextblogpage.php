<?php
	include('dbh.php');
 	 $query = "SELECT * FROM blog";
 	 $result = mysqli_query($conn, $query);
 	 $data = array();
 	 while ($row = mysqli_fetch_array($result)) {
		 $data[] = array("b_id"=>$row['b_id'],"b_title"=>$row['b_title'],"b_content"=>$row['b_content'],"b_image"=>$row['b_image'],"b_authorname"=>$row['b_authorname']);
	 }
     echo json_encode($data);
?>