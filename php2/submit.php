<?php
session_start();
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
  include "db_conn.php";
$success = "File SuccessFully UPloaded.";
        $date = $_POST['date'];
      $_SESSION['date'] = $date;
    $printtype = $_POST['printtype'];
    $username = $_POST['username'];
    $no_token = $_POST['no_token'];
    $img_owner = $_POST['image_owner'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$imgname = $no_token.$img_owner;

	if ($error === 0) {

		
		if ($img_size > 1250000) {
			$em = '<span style="color:rgb(228, 0, 0);text-align:center;,font-weight: bold;,">Oops,Sorry, your file is too large. Under 1.25 MB Only Accepted  </span>';
		    header("Location: product-detail.php?error=$em");
		}
		
		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "pdf"); 

			if (in_array($img_ex_lc, $allowed_exs)) 
			{
				$new_img_name = $imgname.'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				

				// Insert into Database
				$sql = "INSERT INTO  imgaadhar(date,image_url,no_token,username)
				        VALUES('$date','$img_owner','$no_token','$username')";
				mysqli_query($conn, $sql);
				$query_run= mysqli_query($conn,$sql);

				
				
				
			}
			
			
			else {
				$em = '<span style="color:rgb(228, 0, 0);text-align:center;,font-weight: bold;,">Oops, You Cannot Upload FIle THis Type, Only PNG,JPEG,JPG,PDF Accepted.</span>';
		        header("Location: product-detail.php?error=$em");
			   }

			
		}

		if($error === 0)
			{
				// =========Coast Sessions=========
                $_SESSION['no_tokenn'] = $no_token;
				header("Location: coast.php?");

				 $_SESSION['usernamee'] = $username;
				 header("Location: coast.php?");

				 $_SESSION['image_ownerr'] = $img_owner;
				 header("Location: coast.php?");
				 
				 $_SESSION['printtype'] = $printtype;
				 header("Location: coast.php?");

				 $_SESSION['success'] = $success ;
				 header("Location: coast.php?");
				 



			
			}

			else
			{
				echo"something went wrong";
			}

		
			
    }
    
	
	
}
?>