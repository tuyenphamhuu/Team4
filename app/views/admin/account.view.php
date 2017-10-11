<?php require 'app/views/partials/head.php'; ?>
<?php require 'app/views/partials/header-admin.php'; ?>

	<!-- Account -->
	<h5 class="tt-ad font-weight-bold">Account Admin</h5>
	<form class="table account-ad form-func add-new">
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">ID Account</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Product name">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Use Name</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter New Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Password</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Old Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">ID_Rule</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter ID_Type Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Email</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Color Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Add</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Config">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Phone Number</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Description">
		    </div>
		</div>
		<button type="submit" class="btn btn-primary">Add</button>
	</form>

<?php require 'app/views/partials/footer-admin.php'; ?>