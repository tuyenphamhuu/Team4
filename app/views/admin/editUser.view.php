



<?php require 'app/views/partials/head-admin.php'; ?>
<br>
<div class="container-fluid edit-products ">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
        
        <div class="right col-lg-10 col-md-10 col-sm-8">

        	<div class="wrapper-btn row ">
                <h3>Edit User</h3>
                
            </div>
            <form id="form-func" action="/editUser" method="POST"  enctype="multipart/form-data">
            	<?php 
				 	foreach ($user as $user) {
				 		?>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">PassWord :</label>
                    </div>
                    <div class="col-md-9">
                        <input name="pass" value="" type="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $user->PassWord ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Rule_rank :</label>
                    </div>
                    <div class="col-md-9">
                        <input name="rule" value="<?php echo $user->Rule_rank ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New rule rank">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Email :</label>
                    </div>
                    <div class="col-md-9">
                        <input name="email" value="<?php echo $user->Email ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">ADD :</label>
                    </div>
                    <div class="col-md-9">
                        <input name="add" value="<?php echo $user->Addr ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new add">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">PhoneNumber :</label>
                    </div>
                    
                    <div class="col-md-9">
                     <input name="phone" value="<?php echo $user->PhoneNumber ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new Phone">
                    </div>
                </div>
                <input type="text" name="id" hidden="hidden" value="<?php echo $user->ID_Account ?>"><br>
                 <button type="submit" class="btn btn-primary">Edit</button>
                 <?php
				 	}
				  ?>
            </form>
        </div>
    </div>
</div>