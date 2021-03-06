<!-- Modal Profile Information -->
<div class="modal fade" id="accountProfile" role="dialog">
    <div class="modal-dialog modal-sm">
    	<?php 
    		//db connection
    		include '../mysqlCon.php';
			if(isset($sessionId)){
				$sql = "SELECT * FROM faculty WHERE id_number='".$sessionId."'";
				$result = mysqli_query($conn, $sql);

		        $row = mysqli_fetch_assoc($result);
		    }
			
		?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title studentNameMain"><i class="fas fa-user"></i><span class='studentName'> <?php echo $row['faculty_name']; ?></span>'s Profile</h4>
        </div>
        <div class="modal-body">
	        <p class='text-center'>
	          	<i class="fas fa-id-badge userProfile1"></i>
	        </p>
          	<p>
		  		<i class="col-md-1 fas fa-id-card-alt accountProfileIcon"></i>
		  		<span class='personInfoLabel col-md-offset-1'>ID Number:</span> 
		  		<span class='idNumber'><?php echo $row['id_number']; ?></span>
		  	</p>
		  	<p>
		  		<i class="col-md-1 fas fa-user accountProfileIcon"></i>
		  		<span class='personInfoLabel col-md-offset-1'>Name:</span> 
		  		<span class='name'><?php echo $row['faculty_name']; ?></span>
		  	</p>
		  	<p>
		  		<i class="col-md-1 fas fa-user-alt accountProfileIcon"></i>
		  		<span class='personInfoLabel col-md-offset-1'>Position</span> 
		  		<span class='position'><?php echo $row['position']; ?></span>
		  	</p>
		  	<p>
		  		<i class="col-md-1 fas fa-phone accountProfileIcon"></i>
		  		<span class='personInfoLabel col-md-offset-1'>Contact Number:</span> 
		  		<span class='contactNumber'><?php echo $row['contact_number']; ?></span>
		  	</p>
        </div>
      </div>
      
    </div>
</div>
<!-- Modal Manage Password -->
<div class="modal fade" id="managePassword" role="dialog">
    <div class="modal-dialog modal-sm">
    	<?php 
    		//db connection
    		include '../mysqlCon.php';
			if(isset($sessionId)){
				$sql = "SELECT * FROM faculty WHERE id_number='".$sessionId."'";
				$result = mysqli_query($conn, $sql);

		        $row = mysqli_fetch_assoc($result);
		    }
			
		?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title studentNameMain"><i class="fas fa-user-lock"></i> Manage Password for <span class='studentName'> <?php echo $row['faculty_name']; ?></span></h4>
        </div>
        <div class="modal-body">
          <p class='text-center'>
          	<i class="fas fa-key userProfile2"></i>
          </p>
          <form method='POST' action='#managePassword'>
          	<p class='managePassName'><i class="fas fa-unlock-alt accountProfileIcon"></i>Current Password</p>
          	<input class='form-control managePass' type="text" name="currentPass" value=<?php echo $row['password'];?> readonly>
          	
          	<p class='managePassName'><i class="fas fa-lock accountProfileIcon"></i>New Password</p>
          	<input class='form-control managePass' type="text" name="newPass" placeholder="New Password">
       
          	<p class='managePassName'><i class="fas fa-lock accountProfileIcon"></i>Confirm Password</p>
          	<input class='form-control managePass' type="text" name="confirmPass" placeholder="Confirm Password">
          	
          
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-default btnModalStudent"><i class="fas fa-pencil-alt"></i> Update</button>
        </div>
    	</form>
      </div>
      
    </div>
</div>