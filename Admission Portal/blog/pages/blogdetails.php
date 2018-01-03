<?php
	include('dbh.php');
	$id = $_GET['id'];
 	 $query = "SELECT * FROM blog WHERE b_id = '$id' ";
 	 $result = mysqli_query($conn, $query);
 	 $data = array();
 	 while ($row = mysqli_fetch_array($result)) {
		 $data[] = array("b_id"=>$row['b_id'],"b_title"=>$row['b_title'],"b_content"=>$row['b_content'],"b_image"=>$row['b_image'],"b_authorname"=>$row['b_authorname'], "b_authoremail"=> $row['b_authoremail'], "b_date"=>$row['b_date']);
	 }
     echo json_encode($data);
?>