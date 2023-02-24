<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['code'])){
		$code = $_POST['code'];
        date_default_timezone_set('Asia/Manila');
		$date = date('Y-m-d h:i:s'); 
	    
        $query 		= mysqli_query($conn, "SELECT * FROM currently_running WHERE  code='$code'");
	    $row		= mysqli_fetch_array($query);
		$num_row 	= mysqli_num_rows($query);
 
		if ($num_row > 0) 
		
        {			

            $sql = "UPDATE currently_running SET date_ended = '$date' WHERE code = '$code'";

        }
        else
        
        {

            $sql = "INSERT INTO currently_running (code, date) VALUES ('$code', '$date')";

        }

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

	header('location: index.php');
?>