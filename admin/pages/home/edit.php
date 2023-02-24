<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		date_default_timezone_set('Asia/Manila'); 
		$dob1 = date('Y-m-d') - $_POST['dob']; 
		$dob = $_POST['dob']; 
		$age = $dob1;
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$ref = $_POST['ref'];
		$sponmem = $_POST['sponmem'];
		$category = $_POST['category'];
		$type = $_POST['type'];
		$sql = "UPDATE registration SET fname = '$fname', mname = '$mname', lname = '$lname', address = '$address', dob = '$dob', age = '$age', contact = '$contact', ref = '$ref', email = '$email', sponmem = '$sponmem', category = '$category', type = '$type'  WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>