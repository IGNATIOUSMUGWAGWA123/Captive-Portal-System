<div class="row justify-content">
            
    	<form action="process.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $id?>">
    	        <div class="form-group">
                   <label>PinNumber :</label>
    		        <input type="text" name="PinNumber" class="form-control" value="<?php echo $PinNumber; ?>"placeholder="Enter student PinNumber">
    	       </div>
    	       <div class="form-group">
    		        <label>Firstname :</label>
    		         <input type="text" name="FirstName" class="form-control"  value="<?php echo $FirstName; ?>"placeholder="Enter student FirstName">
    		  </div>
    	<div class="form-group">
    		<label>Surname   :</label>
    		<input type="text" name="Surname" class="form-control"  value="<?php echo $Surname; ?>"placeholder="Enter student Surname">
    		</div>
    	<div class="form-group">
    		<label>Programme :</label>
    		<input type="text" name="Programme" class="form-control"  value="<?php echo $Programme; ?>"placeholder="Enter student Programme">
    		</div>
    	<div class="form-group">
    		<label>Password  :</label>
    		<input type="password" name="Password" class="form-control"  value="<?php echo $Password; ?>"placeholder="Enter student Password">
    		</div>
    	<div class="form-group">
            <?php 
            if ($update == true):
            ?>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <?php else: ?>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
            <?php endif; ?>
             
            </div>
    	
    	</form>
    </div>