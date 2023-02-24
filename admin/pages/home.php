

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
         <h3 style="margin-left:35px;">REGISTERED PARTICIPANT</h3>   
        <!-- task-block -->
        <div class="task-block" style="background-color:#1ddd9f;">
          
          <!-- task-card 1-->
         
          <div class="task-card" style="background-color:white;">
            <div class="task-header">
            </div>
            <br />
            <hr>
             <iframe src="pages/home/" style="width:100%; height:700px; border:none;" scrolling="yes"></iframe>

              
          
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
          <h3>REGISTER A PARTICIPANT</h3>
        </div>
        <!-- deals image block -->
        <div class="deals-graph">
          <form action="action/register.php" method="POST">
          <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Middlename:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lname" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Birthdate:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="dob" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Ref:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="ref" id='purpose'>
                            <option value="Association / Club Member">Association / Club Member</option>
                            <option value="Guest">Guest</option>
                            <option value="Sponsored">Sponsored By A Member</option>
                            <option value="Race">Race Sponsor</option>
                        </select>
					</div>
				</div>
                <div id='Sponsored' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Member:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sponmem">
					</div>
                </div>
                <div id='Race' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Sponsor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sponmem">
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

                <div id='Kiddie' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Short:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Boys (7-9 years old)">Boys (7-9 years old)</option>
                            <option value="Pre-teen boys (10-12 years old)">Pre-teen boys (10-12 years old)</option>
                            <option value="Boys (7-9 years old)">Girls (7-9 years old)</option>
                            <option value="Pre-teen girls (10-12 years old)">Pre-teen girls (10-12 years old)</option>
                        </select>
					</div>
                </div>

                <div id='Short' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Intermediate:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Kiddie">Kiddie Run</option>
                            <option value="Short">Short Run</option>
                            <option value="Intermediate">Intermediate Run</option>
                            <option value="Open">Open Run</option>
                        </select>
					</div>
                </div>

                <div id='Intermediate' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Open:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Teen">Teen</option>
                            <option value="Young Men">Young Men</option>
                            <option value="Men">Men</option>
                            <option value="Master Men">Master Men</option>
                            <option value="Senior Men">Senior Men</option>
                            <option value="Teen">Teen</option>
                            <option value="Young Women">Young Women</option>
                            <option value="Women">Women</option>
                            <option value="Master Women">Master Women</option>
                            <option value="Senior Women">Senior Women</option>
                        </select>
					</div>
                </div>

                <div id='Open' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
				 <label class="control-label modal-label">Category:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Mens">Mens</option>
                            <option value="Women">Women</option>
                        </select>
					</div> 
                </div>

                
            <div class="row form-group">
				<div class="col-sm-12">
                <button class="form-control" name="submit">REGISTER</button>  
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

    <style>


h4 {
  margin-bottom:2rem;
  margin-top: 3rem;
}

.panel {
  border-radius: 0.3rem;
  padding: 1rem;
  margin-bottom: 1rem;
  
}



    </style>