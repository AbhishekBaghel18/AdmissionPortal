<?php

if (isset($_POST['submit'])) {

	include 'dbh.php';
 
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	$authorname = mysqli_real_escape_string($conn, $_POST['authorname']);
	$authoremail = mysqli_real_escape_string($conn, $_POST['authoremail']);

	
	$imageName = $_FILES['file']['name'];
	$imageSize = $_FILES['file']['size'];
	$imageType = $_FILES['file']['type'];
	$imageTmpname = $_FILES['file']['tmp_name'];
	$imageError = $_FILES['file']['error'];

	$ext = explode('.', $imageName)[1];
	$extArray = array('jpg','jpeg','png','gif','JPG','JPEG','PNG');

	if ( empty($title) || empty($content) || empty($authorname) || empty($authoremail) ) {
		 echo "Please fill all required fields.";
	}
	else{
			if (in_array($ext, $extArray)) {
				if ($imageSize < 20000000) {
					if ($imageError > 0) {
						echo "Error: $imageError <br>";
					}
					else{ 
							if (!file_exists("./uploads/$authorname/blogimg")) {
								mkdir("./uploads/$authorname/blogimg", 0777, true);
								}
							  $upload_path = "./uploads/$authorname/blogimg/";
							  $image = "./uploads/$authorname/blogimg/$imageName";
							  if (file_exists($image)) {
							  	echo "$imageName already exist";
							  }
							
							  else{
							  	
							  	$sql= "INSERT INTO blog (b_title, b_content, b_image, b_authorname, b_authoremail, b_date ) VALUES ('$title', '$content', '$image' ,'$authorname',' $authoremail', now() )";
								mysqli_query($conn, $sql);
								move_uploaded_file($imageTmpname, $image);
								echo "Successfuly published.";
								
							  }
					}
				}
				else{
					echo "Image is too big";
				}

			}
			else{
				echo "This type of file can not be uploaded.";
			}
				 
	}



}
else{
	header('Location: ../index.php');
}

?>