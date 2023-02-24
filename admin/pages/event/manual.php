<?php
	session_start();
	include '../../../connection/connection.php';  
    $category = $_GET['category'];
    $id = $_GET['id'];
	$result1=mysqli_query($conn, "select *, COUNT(id) as participants from registration where category='$category'");
	$crow=mysqli_fetch_array($result1);
   
	$result2=mysqli_query($conn, "select *, COUNT(id) as participants from currently_running where category='$category' AND date_ended = '0000-00-00 00:00:00'");
	$xrow=mysqli_fetch_array($result2);
   
	$result3=mysqli_query($conn, "select *, COUNT(id) as participants from currently_running where category='$category' AND date_ended != '0000-00-00 00:00:00'");
	$xroy=mysqli_fetch_array($result3);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
	
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	
	<div class="row">

	
		
		<div class="col-sm-12">
		<table class="table table-bordered">
                       <thead>
                          <tr style="text-align:center;">
                            <td>PARTICIPANT</td>
                            <td>JOINED</td>
                            <td>FINISHED</td>
                          </tr>
                       </thead>
                       <tbody>
                    
                    
                          <tr style="text-align:center;">
                            <td><?php echo $crow['participants'];  ?></td>
                            <td><?php echo $xrow['participants'];  ?></td>
                            <td><?php echo $xroy['participants'];  ?></td>
                          </tr>


                    
                      </tbody>
                  </table>
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<!-- <div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
			</div> -->
			<div class="height10">
			</div>
            <div class="row col-md-6">
            <video id="preview" width="100%" style="margin-left:-100px;"></video>
            </div>
			<div class="row col-md-6">
            <div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary" style='background-color:#1ddd9f; border:#1ddd9f;'><span class="glyphicon glyphicon-plus"></span> START RACE</a>
			</div>
            <hr />
            <form action="add_user.php" method="POST">
                    <input type="text" name="code" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
            </form>
            <hr />
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
                
						<th>CODE</th>
						<th>PARTICIPANT</th>
						<th>STARTED</th>
						<th>ENDED</th>
					</thead>
					<tbody>
						<?php
							include_once('../../../connection/connection.php');
							$sql = "SELECT currently_running.date_ended as dend, currently_running.code as UID, registration.fname as FULL, currently_running.date AS DATE_START  FROM currently_running LEFT JOIN registration ON currently_running.code = registration.code WHERE registration.category = '$category'";
						
							//use for MySQLi-OOP

							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
							

								echo 
								"<tr>
					
									<td>".$row['UID']."</td>
									<td>".$row['FULL']."</td>
									<td>".$row['DATE_START']."</td>
									<td>".$row['dend']."</td>
								   
								</tr>";
								include('edit_delete_modal.php');
							}
				
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include('add_modal.php') ?>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>

<script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           window.onload = function(c){
           scanner.addListener('scan',function(c){
               
               
                document.getElementById('text').value=c;        
                document.forms[0].submit();
  
           });
        }

        </script>
</body>
</html>