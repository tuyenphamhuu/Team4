<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="order-wrapper">
	<div class="container">
		<div class="order-info">
		<div class="customer-info">
			<p> Customer Information</p>
			<form>
				 <div class="form-row">
				    <div class="col">
				      <input type="Email" class="form-control" placeholder="Email">
				    </div>
				    
				  </div>
			</form>
		</div>
		<div class="contact">
			<p> Contact Address</p>
			<form>
				  <div class="form-row">
				    <div class="col form-address">
				      <input type="text" class="form-control" placeholder="First name">
				    </div>
				    <div class="col form-address">
				      <input type="text" class="form-control" placeholder="Last name">
				    </div>
				  </div>
				  <div class="form-row ">
				    <div class="col-4 form-address">
				      <input type="text" class="form-control" placeholder="Address">
				    </div>
				    <div class="col-4 form-address">
				      <input type="text" class="form-control" placeholder="District">
				    </div>
				     <div class="col-4 form-address">
				      <input type="text" class="form-control" placeholder="City">
				    </div>
				  </div>
				  <div class="form-row ">
				    <div class="col form-address">
				      <input type="text" class="form-control" placeholder="Phone number">
				    </div>
				  </div>

			</form>
			
		</div>
		</div>
	</div>
</div>


<?php require 'partials/footer.php'; ?>
