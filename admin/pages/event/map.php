<?php 
  
 include '../../../connection/connection.php';  
 $id = $_GET['id']; 
 $category = $_GET['category']; 
 $result1=mysqli_query($conn, "select *, COUNT(id) as participants from registration where category='$category'");
 $crow=mysqli_fetch_array($result1);

 $result2=mysqli_query($conn, "select *, COUNT(id) as participants from currently_running where category='$category' AND date_ended = '0000-00-00 00:00:00'");
 $xrow=mysqli_fetch_array($result2);

 $result3=mysqli_query($conn, "select *, COUNT(id) as participants from currently_running where category='$category' AND date_ended != '0000-00-00 00:00:00'");
 $xroy=mysqli_fetch_array($result3);
?>


<html>
    <head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">
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
        </div>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-8">
                   
                    <form action="add_user.php" method="POST">
                    <input type="text" name="code" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
                   </form>
                   <table class="table table-bordered">
                       <thead>
                          <tr style="text-align:center;">
                            <td>CODE</td>
                            <td>PARTICIPANT</td>
                            <td>STARTED</td>
                            <td>ENDED</td>
                            <td>TIME</td>
                          </tr>
                       </thead>
                       <tbody>
                       <?php
							
							$sql = "SELECT currently_running.date_ended as dend, currently_running.code as UID, registration.fname as FULL, currently_running.date AS DATE_START  FROM currently_running LEFT JOIN registration ON currently_running.code = registration.code WHERE registration.category = '$category'";
				
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
                                
                        ?>
                    
                          <tr style="text-align:center;">
                            <td><?php echo $row['UID'];  ?></td>
                            <td><?php echo $row['FULL'];  ?></td>
                            <td><?php echo $row['DATE_START'];  ?></td>
                            <td><?php if($row['dend'] == '0000-00-00 00:00:00') {  echo 'NOT ENDED'; } else {  echo $row['dend'];  } ?></td>
                            <?php 
                            
                            $origin = new DateTime($row['DATE_START']);
                            $target = new DateTime($row['dend']);
                            $interval = $origin->diff($target);
                           
                            
                            ?>
                            <td><?php if($row['dend'] == '0000-00-00 00:00:00') {  echo 'NOT ENDED'; } else {   echo (($interval->format('%d')*24) + $interval->format('%h'))*60;   } ?></td>
                          </tr>


                       <?php } ?>
                      </tbody>
                  </table>
                 </div>
            </div>
        </div>

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