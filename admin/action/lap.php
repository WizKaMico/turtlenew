<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['submit'])){
		
       
        $start = $_POST['start']; 
        $end = $_POST['end']; 
        $category = $_POST['category'];
      

		$sql = "INSERT INTO category (start, end, category) VALUES ('$start', '$end', '$category')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../index.php?view=LAP');
?>