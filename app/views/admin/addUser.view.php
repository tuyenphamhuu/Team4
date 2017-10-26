<?php require 'app/views/partials/head-admin.php'; ?>
<br>
<div class="container-fluid">
    <div class="row">
        <?php require 'app/views/partials/sidebar-left.php'; ?>
        
        <div class="right col-lg-10 col-md-10 col-sm-8">
        	<div class="wrapper-btn row ">
                <h3>Add User</h3>
            </div>
            <form id="form-func" action="/addUser" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">UserName :</label>
                    </div>
                    <div class="col-md-9">
                        <input name="user" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">PassWord</label>
                    </div>
                    <div class="col-md-9">
                        <input name="pass" type="password" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter New PassWord">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Rule_rank :</label>
                    </div>
                    <div class="col-md-9">
                        <input name="rule" type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter Rule rank">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Email :</label>
                    </div>
                    <div class="col-md-9">
                    	<input name="email" type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">ADD :</label>
                    </div>
                    <div class="col-md-9">
	                    <input name="add" type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter add">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="exampleInputEmail1">Phone Number :</label>
                    </div>
                    <div class="col-md-9">
	                    <input name="phone" type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter your phone">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div> 
