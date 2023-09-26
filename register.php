<?php

	include($_SERVER['DOCUMENT_ROOT'].'./connection.php');
				
	$regusername = trim($_POST['username']);
	$email = trim($_POST['email']);
	$cmfpassword = trim($_POST['password']);
	
	
	
			$sql = "INSERT INTO `user01`(`username`, `email`, `password`) VALUES ('$regusername','$email','$cmfpassword')";
			$result = mysqli_query($conn, $sql);
		
	
				 
	if ($result){
		echo "<script>alert ('Welcome');document.location.href='./index.php'</script>";
		echo "<script>window.open('', '_self', '');window.close()</script>";
		//mysqli_free_result($result);
	}
	
	//mysqli_free_result($result);
	
			
?>

