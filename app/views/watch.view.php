<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="order-wrapper">
	<div class="container">
		<div class="row justify-content-center">
			<div class=" col-8 order-info">
				<div class="customer-info">
					<p> Customer Information</p>
					<form>
						 <div class="form-row">
						    <div class="col">
						      	<input type="Email" class="form-control" placeholder="Email" required>
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
				<hr>
				<div class="delivery-info">
					<p><b>Delivery infomation</b></p>
					<div class="row">
					<div class="col-3">
						<p>Time and date</p>
					</div>
					<div class="col-3">
						<p>Monday - Friday</p>
						<p>8h00 - 17h00</p>
					</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="submit-order text-center">
			<a href="#" target="_blank"><button type="button" id="buynow-btn" class="btn btn-dark">Submit</button></a>
		</div>
	</div>
</div>


<?php require 'partials/footer.php'; ?>
