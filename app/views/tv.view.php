<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<div class="wrapper-editUser">
	<div class="container">
		<div class="row justify-content-center editUser">
			<div class=" col-5 edit-info">
				<form action="orderCustomer" method="POST" class="container" id="needs-validation" novalidate>
					<div class="form-row">
					    <div class="col form-editinfo">
					      	<input type="Password" name="Pass" class="form-control" id="validationCustom01" placeholder="Password" required>
					    </div>
  					</div>
  					<div class="form-row form-editinfo">
					    <div class="col">
					      	<input type="text" name="rule" class="form-control" id="validationCustom02" placeholder="Rule_Rank" required>
					    </div>
					</div>
					<div class="form-row form-editinfo">
					    <div class="col">
					      	<input type="Email" name="email" class="form-control" id="validationCustom03" placeholder="Email" required>
					    </div>
					</div>
					<div class="form-row ">
						<div class="col form-editinfo">
							<input type="text" name="add" class="form-control" id="validationCustom05" placeholder="Address" required>
						</div>
					</div>
					  	<div class="form-row ">
							<div class="col form-editinfo">
								<input type="tel" name="phone" class="form-control" id="validationCustom07" placeholder="Phone number" required>
					    	</div>
					  	</div>
						<hr>
						<div class="submit-order text-center">
					  	<button class="btn btn-dark" type="submit">Submit</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>


<?php require 'partials/footer.php'; ?>

