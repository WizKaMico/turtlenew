<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['add'])){
		$category = $_POST['category'];
		$id = $_POST['id'];
		
			$sql = "SELECT * FROM registration WHERE category = '$category'";
			$query = $conn->query($sql);
			while($row = $query->fetch_assoc()){
			$code = $row['code'];   
			date_default_timezone_set('Asia/Manila');
		    $date = date('Y-m-d h:i:s'); 
			mysqli_query($conn,"INSERT INTO currently_running (code,category,date) VALUES ('$code','$category','$date')");
			}
		


	header('location: manual.php?id='.$id.'&category='.$category);
	}
?>