 <!-- first block -->
 <div class="first">
      <!-- task-calendar block -->
      <div class="task-calendar">
        <!-- task header -->
        <div class="taskhead">
          <div class="taskhead-header d-flex">
            <p class="taskCopmlete">WELCOME BACK! <?php echo strtoupper($row['email']); ?> <span style='font-size:20px;'>&#128075;</span></p>
          </div>
        </div>

    
        <!-- taskhead ends -->
         <h3 style="margin-left:35px;">THE EVENT | RACE TRACKS </h3>   
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
          <!-- task-card 1-->
         
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
         
            </div>
            <br />
            <hr>
            <iframe src="pages/lap/" style="width:100%; height:700px; border:none;" scrolling="no"></iframe>
              
          
            <div class="task-footer">
              
             

            
              <br />
              <br />
            </div>
          </div>
        
          <!-- task card 1 ends-->

        
        </div>
        <!-- task-block ends-->
      </div>
      <!-- task-calendar block ends -->
    </div>
    <!-- first block ends -->

     <!-- second block -->
     <div class="second d-flex">
      <!-- deals block -->
      <div class="deals" style="height:800px;">
        <!-- panelHeader -->
        <div class="panelHeader d-flex">
          <h3>REGISTER A ROUTE</h3>
        </div>
        <!-- deals image block -->
        <div class="deals-graph">
          <form action="action/lap.php" method="POST">
          <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Start:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="start" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">End:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="end" required>
					</div>
				</div>


                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" id="category" name="category">
                            <option value="Kiddie">Kiddie Run</option>
                            <option value="Short">Short Run</option>
                            <option value="Intermediate">Intermediate Run</option>
                            <option value="Open">Open Run</option>
                        </select>
					</div>
				</div>
			
                
            <div class="row form-group">
				<div class="col-sm-12">
                <button class="form-control" name="submit">ADD</button>  
                </div>
             </div>      
            </div>
 


           
            </div>
          </form>
        </div>
        
     </div>
      <!-- deals block ends-->

    
    </div>
    <!-- second block ends -->