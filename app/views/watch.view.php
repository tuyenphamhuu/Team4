<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<?php 
	$sub = 0;
	
	echo "<pre>";
		print_r($_SESSION['cart']);
	echo "</pre>";
	foreach ($_SESSION['cart'] as $items) {
		$sub += $items;
	}
 ?>
<div class="order-wrapper">
	<div class="container">
		<div class="row justify-content-center order">
			<div class=" col-8 order-info">
				<form action="orderCustomer" method="POST" class="container" id="needs-validation" novalidate>
					<div class="customer-info">
					<p> Customer Information</p>
						<div class="form-row">
						    <div class="col">
						      	<input type="Email" name="email" class="form-control" id="validationCustom01" placeholder="Email" required>
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
								<input type="text" name="name" class="form-control" id="validationCustom02" placeholder="Full name" required>
								<div class="invalid-feedback">
								* Required information
								</div>
							</div>
						</div>
						<div class="form-row ">
							<div class="col form-address">
  								<input type="text" name="add" class="form-control" id="validationCustom04" placeholder="Address" required>
  								<div class="invalid-feedback">
								* Required information
								</div>
							</div>
						</div>
					  	<div class="form-row ">
							<div class="col form-address">
								<input type="tel" name="phone" class="form-control" id="validationCustom07" placeholder="Phone number" required>
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
							<input type="text" hidden="hidden" name="date" value="<?php echo $date = date("Y-m-d h:i:sa") ?>"  >
							<input type="text" hidden="hidden" name="time" value="<?php echo $time = date("h:i:sa"); ?>"  >
							<p>Time and date</p>
						<!-- </div> -->
						<!-- <div class="col-3"> -->
							<p>Today is : <?php echo $date = date("Y-m-d") ?></p>
							<p>
								<?php 
									$time =date("h:i:sa");
									echo "The time is ".$time ; 
								?>
							</p>
					<!-- 	</div> -->
						<!-- </div> -->
					</div>
						<div class="submit-order text-center">
					  	<button class="btn btn-dark" type="submit">Check out</button>
					</div>
				</form>

				<form id="MyForm" method="post" >
  <label for="txtName">Name:</label>
  <input id="txtName" name="txtName" type="text" minlength="2" maxlength="50" placeholder="Required">
  <input type="submit" value="Submit"/>
</form>
			</div>	
		</div>		
	</div>
</div>

<?php require 'partials/footer.php'; ?>
<script>
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
$(document).ready(function(){
  $("#MyForm").validate({
    rules: {
      txtName: {
        required: true,
        minlength: 10
      }      
    }
  });
})
</script>

