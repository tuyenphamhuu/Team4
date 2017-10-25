<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<content>
		<div class="container-fluid">
		<div id="iphone" class="row text-center">
			<div class="col-12 text-center">
				<h1 class="prd-type">iPhone</h1>
				<p class="slogan">Safety, security is above all</p>
				<div class="container-fluid margin-lr">
					<div class="row justify-content-center prd">
						<?php 
							foreach ($iphones as $items) {
								?>
									<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
										<div class="wrap-item-prd hover-ap hover">
											<img class="mx-auto d-block rounded" src="public/images/<?php echo $items->Image ?>" alt="">
											<div class="overlay-n">
												<h2><?php echo $items->ProductName ?></h2>
												<button type="button" class="info" data-toggle="modal" data-target=".myModalIphone">
												<a class="info" href="/detailProduct?idProduct=<?php echo $items->ID_Product;?>&type=<?php echo $items->ID_TypeProduct ?>">View Detail
												
													</a>
												</button>
											</div>
										</div>
									</div>
								<?php
							}
						 ?>
					</div>
				</div>
			</div>
		</div>

		<div id="ipad" class="row text-center">
			<div class="col-12 text-center">
				<h1 class="prd-type">iPad</h1>
				<p class="slogan">Safety, security is above all</p>
				<div class="container-fluid margin-lr">
					<div class="row prd">
						<?php 
							foreach ($ipads as $items) {
								?>
									<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
										<div class="wrap-item-prd hover-ap hover">
											<img class="mx-auto d-block rounded" src="public/images/<?php echo $items->Image ?>" alt="">
											<div class="overlay-n">
												<h2><?php echo $items->ProductName ?></h2>
												<button type="button" class="info" data-toggle="modal" data-target=".myModalIphone">
												<a class="info" href="/detailProduct?idProduct=<?php echo $items->ID_Product;?>&type=<?php echo $items->ID_TypeProduct ?>">View Detail
													</a>
												</button>
											</div>
										</div>
									</div>	
								<?php
							}
						 ?>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<!-- <div class="modal fade myModalIphone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<!-- view detail -->
				<!-- <div id="view-detail" class="container">
					<div class="row justify-content-around hr-v-dl">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<img class="img-dt mx-auto d-block" src="public/images/ip_8_f.jpg">
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 align-self-center text-transform text-left">
							<h5 class="text-uppercase font-weight-bold">Iphone 8</h5>
							<h4 class="text-red font-weight-bold"><i>$699.00</i></h4>
							<hr>
							<p>
								<table class="colorblack-title">
								<tr>
									<th>Producer:</th>
									<td><small>Apple</small></td>
								</tr>								
								<tr>
									<th>Operating system:</th>
									<td><small>iOS 11</small></td>
								</tr>								
								<tr>
									<th>Size:</th>
									<td><small>143,5 x 71 x 7,5 mm</small></td>
								</tr>								
								<tr>
									<th>weight:</th>
									<td><small>148g</small></td>
								</tr>								
								<tr>
									<th>introductory date:</th>
									<td><small>13/09/2017</small></td>
								</tr>								
								<tr>
									<th>Day of sale:</th>
									<td><small>13/09/2017</small></td>
								</tr>								
								<tr>
									<th>Price:</th>
									<td><small>$699</small></td>
								</tr>
							</table>
							</p>
							<button class="info">Add to Cart</button>
						</div>
					</div>
				</div>
		    </div>
		  </div>
		</div> -->

		<script>
			document.getElementById('.myBtn').onclick = function() {
				myFunction()
				};
				function myFunction() {
					document.getElementById("myDropdown").classList.toggle("show");
								
					$(document).ready(function(){
					    $("window").click(function(){
					        $("p").hide();
					    });
					    $("window").click(function(){
					        $("p").show();
					    });
				});
			}
		</script>

		
	</div>
	<div id="mac">
		<img src="images/imacbg-f.jpg">
		<a href="#"><div><strong>iMac Pro</strong><span>(Power to the pro)</span></div></a>
	</div>


</content>

<?php require 'partials/footer.php'; ?>