<?php 
$user_id  = $_GET['user_id'];
include('connection/connection.php');
$result=mysqli_query($conn, "select * from admin_credentials where user_id='$user_id'");
$row=mysqli_fetch_array($result);
$fullname = $row['email'];
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="adjscs/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper" style="height:100%;">
	<div class="container" style="margin-top:200px;">
		<h1>PUNTA FUEGO</h1>
        <p>HI! <b><?php echo strtoupper($fullname); ?></b></p>
		<form class="form" action="auth/security_validation.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" required="">
            <input type="hidden" name="email" value="<?php echo $row['email']; ?>" required="">
			<input type="number" name="code" placeholder="4-DIGIT CODE">
			<button type="submit" name="authenticate" class="button">AUTHENTICATE</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="adjscs/script.js"></script>

</body>
</html>