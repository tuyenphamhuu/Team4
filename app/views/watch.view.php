<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="order-wrapper">
	<div class="container">
		<div class="row justify-content-center order">
			<div class=" col-8 order-info">
				<form class="container" id="needs-validation" novalidate>
					<div class="customer-info">
					<p> Customer Information</p>
						<div class="form-row">
						    <div class="col">
						      	<input type="Email" class="form-control" id="validationCustom01" placeholder="Email" required="true">
						      	<div class="invalid-feedback">
								* Please enter a valid email, e.g. name@domain.com
								</div>

						    </div>
  						</div>
					</div>
					<div class="contact">
						<p> Contact Address</p>
						<div class="form-row">
							<div class="col form-address">
								<input type="text" class="form-control" id="validationCustom02" placeholder="First name" required>
								<div class="invalid-feedback">
								* Required information
								</div>
							</div>
							<div class="col form-address">
								<input type="text" class="form-control" id="validationCustom03" placeholder="Last name" required>
								<div class="invalid-feedback">
								* Required information
								</div>
							</div>
						</div>
						<div class="form-row ">
							<div class="col-4 form-address">
  								<input type="text" class="form-control" id="validationCustom04" placeholder="Address" required>
  								<div class="invalid-feedback">
								* Required information
								</div>
							</div>
							<div class="col-4 form-address">
  								<input type="text" class="form-control" id="validationCustom05"  placeholder="District" required>
  								<div class="invalid-feedback">
								* Required information
								</div>
							</div>
					     	<div class="col-4 form-address">
					      		<input type="text" class="form-control" id="validationCustom06"  placeholder="City" required>
					      		<div class="invalid-feedback">
								* Required information
								</div>
					    	</div>
							</div>
					  	<div class="form-row ">
							<div class="col form-address">
								<input type="number" class="form-control" id="validationCustom07" placeholder="Phone number" required>
								<div class="invalid-feedback">
								* Required information
								</div>
					    	</div>
					  	</div>
						</div>
						<hr>
						<div class="delivery-info">
						<p><b>Delivery infomation</b></p>
						<!-- <div class="row"> -->
						<!-- <div class="col-3"> -->
							<p>Time and date</p>
						<!-- </div> -->
						<!-- <div class="col-3"> -->
							<p>Monday - Friday</p>
							<p>8h00 - 17h00</p>
					<!-- 	</div> -->
						<!-- </div> -->
					</div>
						<div class="submit-order text-center">
					  	<button class="btn btn-dark" type="submit">Submit</button>
					</div>
				</form>
			</div>	
		</div>		
	</div>
</div>


<?php require 'partials/footer.php'; ?>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  "use strict";
  window.addEventListener("load", function() {
    var form = document.getElementById("needs-validation");
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() == false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  }, false);
}());
</script>

