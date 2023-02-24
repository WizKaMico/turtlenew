<?php 
  
 include '../../../connection/connection.php';  

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
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                    <label>SCAN QR CODE</label>
                    <form action="add_user.php" method="POST">
                    <input type="text" name="code" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                   </form>
                   <table class="table table-bordered">
                       <thead>
                          <tr>
                            <td>CODE</td>
                            <td>PARTICIPANT</td>
                            <td>STARTED</td>
                            <td>ENDED</td>
                          </tr>
                       </thead>
                       <tbody>
                       <?php
							
							$sql = "SELECT currently_running.date_ended as dend, currently_running.code as UID, registration.fname as FULL, currently_running.date AS DATE_START  FROM currently_running LEFT JOIN registration ON currently_running.code = registration.code";
				
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
                                
                        ?>
                    
                          <tr>
                            <td><?php echo $row['UID'];  ?></td>
                            <td><?php echo $row['FULL'];  ?></td>
                            <td><?php echo $row['DATE_START'];  ?></td>
                            <td><?php if($row['dend'] == '0000-00-00 00:00:00') {  echo 'NOT ENDED'; } else {  echo $row['dend'];  } ?></td>
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