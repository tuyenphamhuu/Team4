<?php require 'app/views/partials/head.php'; ?>
<?php require 'app/views/partials/header-admin.php'; ?>

	<!-- add new button -->
	<div class="row add-new">
		<div class="tt-ad col-12">
			<button>+ Add new</button>
		</div>
	</div>

	<!-- add new button detail -->
	<form class="table add-new add-new-detail">
		<h5 class="font-weight-bold">Add Products</h5>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Product name</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Product name">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">New Price</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter New Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Old Price</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Old Price">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">ID_Type Product</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter ID_Type Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Color Product</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Color Product">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Config</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Config">
		    </div>
		</div>
		<div class="form-group row">
			<div class="col-md-3">
		    	<label for="exampleInputEmail1">Description</label>
		    </div>
		    <div class="col-md-9">
		    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Description">
		    </div>
		</div>
		<button type="submit" class="btn btn-primary">Add</button>
	</form>

<?php require 'app/views/partials/footer-admin.php'; ?>